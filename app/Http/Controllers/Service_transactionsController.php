<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_transactions;
use App\Models\Services;
use App\Models\User;
use App\Models\Promo_codes;

class Service_transactionsController extends Controller
{
    // ========= PAGE FORM =========
    public function create(Request $request)
    {
        $selectedService = $request->input('service');
        $services = Services::all();

        return view('pemesanan', compact('selectedService', 'services'));
    }

    // ========= STORE DATA =========
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required',
            'email'      => 'required|email',
            'phone'      => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'post_code'  => 'required',
            'quantity'   => 'required|numeric|min:1',
            'service_id' => 'required|exists:services,id',
            'promo_code' => 'nullable|string|exists:promo_codes,code',
            'proof'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Buat user guest
        $user = User::firstOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['name'],
                'password' => bcrypt('guest123'),
            ]
        );

        $validated['user_id'] = $user->id;

        // Kode booking
        $validated['booking_code'] = 'BK' . strtoupper(substr(md5(time() . $validated['email']), 0, 8));

        // Hitung total harga
        $service = Services::find($validated['service_id']);
        $validated['sub_total_amount'] = $service->price * $validated['quantity'];
        $validated['discount_amount'] = 0;
        $validated['is_paid'] = false;

        // Diskon
        if (!empty($validated['promo_code'])) {
            $promo = Promo_codes::where('code', $validated['promo_code'])->first();
            if ($promo) {
                if ($promo->discount_amount <= 100) {
                    $validated['discount_amount'] =
                        ($validated['sub_total_amount'] * $promo->discount_amount) / 100;
                } else {
                    $validated['discount_amount'] =
                        min($promo->discount_amount, $validated['sub_total_amount']);
                }
                $validated['promo_code_id'] = $promo->id;
            }
        }

        // Grand total
        $validated['grand_total_amount'] =
            $validated['sub_total_amount'] - $validated['discount_amount'];

        // Upload bukti pembayaran (opsional)
        if ($request->hasFile('proof')) {
            $file = $request->file('proof');
            $filename = time() . '_' . $validated['booking_code'] . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('transaction_proofs', $filename, 'public');
            $validated['proof'] = $path;
        }

        // Simpan ke database
        Service_transactions::create($validated);

        return redirect()->route('welcome')
            ->with('success', 'Pemesanan berhasil dikirim! Kode booking: ' . $validated['booking_code']);
    }
}
