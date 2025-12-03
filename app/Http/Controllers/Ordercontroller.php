<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\Request;
use App\Models\Services as Service;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    // Menyimpan order baru berdasarkan input dari StoreOrderRequest
    public function saveOrder(StoreOrderRequest $request, Service $service)
    {
        // Gunakan data tervalidasi dari FormRequest
        $validated = $request->validated();

        // Pastikan service_id menggunakan id dari route model binding (lebih aman)
        $validated['service_id'] = $service->id;

        // Simpan data order awal ke session via OrderService
        $this->orderService->beginOrder($validated);

        // Lanjutkan ke halaman pengisian data customer (alamat, post_code, city)
        return redirect()->route('front.customer_data');
    }

    /**
     * Menampilkan halaman booking untuk service tertentu.
     */
    public function booking(Service $service)
    {
        // Jika Anda memiliki data order/session yang perlu dikirimkan,
        // bisa diambil dari repository/service, contoh:
        // $orderData = $this->orderService->getOrderDetails();

        return view('front.booking', compact('service'));
    }

    /**
     * POST: process payment confirmation
     */
    public function paymentConfirm(StoreOrderRequest $request)
    {
        $validated = $request->validated();
        $transactionId = $this->orderService->paymentConfirm($validated);

        if ($transactionId) {
            return redirect()->route('front.index')->with('success', 'Pembayaran berhasil. ID transaksi: ' . $transactionId);
        }

        return redirect()->route('front.index')->with('error', 'Payment failed, silakan coba lagi nanti.');
    }

    /**
     * GET: show payment page (summary of order and payment form)
     */
    public function payment()
    {
        $data = $this->orderService->getOrderDetails();
        return view('front.payment', $data);
    }
    /**
     * Tampilkan form pengisian data customer (alamat, city, post_code) sebelum pembayaran
     */
    public function customerData()
    {
        $data = $this->orderService->getOrderDetails();
        return view('front.customer_data', $data);
    }

    /**
     * Simpan data customer dari form dan lanjut ke halaman pembayaran
     */
    public function saveCustomerData(\App\Http\Requests\StoreCustomerDataRequest $request)
    {
        $validated = $request->validated();
        $this->orderService->updateCustomerData($validated);

        return redirect()->route('front.payment');
    }
    // removed duplicate/invalid paymentconfirm() — handled above by paymentConfirm()

}
