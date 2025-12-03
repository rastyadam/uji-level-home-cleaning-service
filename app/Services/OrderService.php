<?php

namespace App\Services;

use App\Repositories\Contracts\PromoCodeRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderService
{
    protected $orderRepository;
    protected $promoCodeRepository;
    protected $categoryRepository;
    protected $serviceRepository;

    public function __construct(
        PromoCodeRepositoryInterface $promoCodeRepository,
        CategoryRepositoryInterface $categoryRepository,
        ServiceRepositoryInterface $serviceRepository,
        OrderRepositoryInterface $orderRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->promoCodeRepository = $promoCodeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->serviceRepository = $serviceRepository;
    }
    public function beginOrder(array $data): void
    {
        $orderData = [
        'service_id' => $data['service_id'],
        'category_id' => $data['category_id'],
        'customer_name' => $data['customer_name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'address' => $data['address'],
        'scheduled_date' => $data['scheduled_date'],
        'scheduled_time' => $data['scheduled_time'],
    ];
        // simpan data order sementara ke session via repository
        $this->orderRepository->saveToSession($orderData);
    }
    public function getOrderDetails(): array
    {
        $orderData = $this->orderRepository->getOrderDataFromSession();

        if (empty($orderData) || empty($orderData['service_id'])) {
            return ['orderData' => [], 'service' => null];
        }

        $service = $this->serviceRepository->findById($orderData['service_id']);
        $quantity = isset($orderData['quantity']) ? (int)$orderData['quantity'] : 1;

        $subTotal = ($service->price ?? 0) * $quantity;
        $taxRate = 0.11;
        $totalTax = $subTotal * $taxRate;
        $grandTotal = $subTotal + $totalTax;

        $orderData['sub_total_amount'] = $subTotal;
        $orderData['total_tax'] = $totalTax;
        $orderData['grand_total_amount'] = $grandTotal;

        return compact('orderData', 'service');
    }
    public function applyPromoCode(string $code, int $subTotalAmount): array
    {
        $promo = $this->promoCodeRepository->findByCode($code);

        if (!$promo) {
            return ['error' => 'Kode promo tidak tersedia'];
        }

        $discount = (float) ($promo->discount_amount ?? 0);
        $grandTotal = max(0, $subTotalAmount - $discount);

        return [
            'discount' => $discount,
            'grandTotalAmount' => $grandTotal,
            'promoCodeId' => $promo->id ?? null,
        ];
    }

    public function saveBookingTransaction(array $data): void
    {
        $this->orderRepository->saveToSession($data);
    }

    public function updateCustomerData(array $data)
    {
        $this->orderRepository->updateSessionData($data);
    }

    public function paymentConfirm(array $validated)
    {
        $orderData = $this->orderRepository->getOrderDataFromSession();
        $transactionId = null;

        try {
            DB::transaction(function () use (&$validated, &$transactionId, $orderData) {
                // simpan proof file bila ada
                if (isset($validated['proof'])) {
                    $validated['proof'] = $validated['proof']->store('proofs', 'public');
                }

                // merge session order data into validated payload
                $validated['name'] = $orderData['customer_name'] ?? $validated['name'] ?? null;
                $validated['email'] = $orderData['email'] ?? $validated['email'] ?? null;
                $validated['phone'] = $orderData['phone'] ?? $validated['phone'] ?? null;
                $validated['address'] = $orderData['address'] ?? $validated['address'] ?? null;
                $validated['post_code'] = $orderData['post_code'] ?? $validated['post_code'] ?? null;
                $validated['city'] = $orderData['city'] ?? $validated['city'] ?? null;
                $validated['quantity'] = $orderData['quantity'] ?? 1;
                $validated['sub_total_amount'] = $orderData['sub_total_amount'] ?? 0;
                $validated['grand_total_amount'] = $orderData['grand_total_amount'] ?? 0;
                $validated['discount_amount'] = $orderData['total_discount_amount'] ?? 0;
                $validated['promo_code_id'] = $orderData['promo_code_id'] ?? null;
                $validated['is_paid'] = false;
                $validated['booking_trx_id'] = uniqid('trx_');
                $validated['service_id'] = $orderData['service_id'] ?? null;

                $transaction = $this->orderRepository->createTransaction($validated);
                $transactionId = $transaction->id ?? null;
            });

            return $transactionId;

        } catch (\Throwable $e) {
            Log::error('Error in payment confirmation: ' . $e->getMessage());
            session()->flash('error', 'Terjadi kesalahan saat memproses pembayaran. Silakan coba lagi.');
            return null;
        }
        // selesai — nilai transaksi dikembalikan (return sudah dilakukan di blok try / catch)
    }
}