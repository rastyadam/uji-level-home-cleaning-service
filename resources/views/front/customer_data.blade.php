@extends('layouts.app')

@section('content')
    <h1>Data Pelanggan</h1>

    @if(!empty($orderData))
        <p>Anda sedang memesan: <strong>{{ optional($service)->name ?? 'Layanan' }}</strong></p>
    @endif

    <form method="post" action="{{ route('front.save_customer_data') }}">
        @csrf

        <div>
            <label>Alamat</label>
            <input type="text" name="address" value="{{ old('address', $orderData['address'] ?? '') }}" required>
        </div>

        <div>
            <label>Kota</label>
            <input type="text" name="city" value="{{ old('city', $orderData['city'] ?? '') }}" required>
        </div>

        <div>
            <label>Kode Pos</label>
            <input type="text" name="post_code" value="{{ old('post_code', $orderData['post_code'] ?? '') }}" required>
        </div>

        <div>
            <button type="submit">Lanjut ke Pembayaran</button>
        </div>
    </form>
@endsection
