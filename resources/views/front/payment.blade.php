@extends('layouts.app')

@section('content')
    <h1>Pembayaran</h1>

    @if(!empty($orderData))
        <h2>Detail Pesanan</h2>
        <p>Nama layanan: {{ optional($service)->name ?? 'Tidak diketahui' }}</p>
        <p>Jumlah: {{ $orderData['quantity'] ?? 1 }}</p>
        <p>Subtotal: {{ $orderData['sub_total_amount'] ?? 0 }}</p>
        <p>Grand total: {{ $orderData['grand_total_amount'] ?? 0 }}</p>
    @else
        <p>Tidak ada data pesanan. Silakan kembali ke halaman layanan untuk memulai pemesanan.</p>
    @endif

    {{-- Simplified payment form (POST to paymentConfirm route) --}}
    <form method="post" action="{{ route('front.payment_confirm') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name', $orderData['customer_name'] ?? '') }}" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $orderData['email'] ?? '') }}">
        </div>

        <div>
            <label>Bukti pembayaran (opsional)</label>
            <input type="file" name="proof">
        </div>

        <button type="submit">Kirim Pembayaran</button>
    </form>
@endsection
