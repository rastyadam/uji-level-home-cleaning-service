@extends('layouts.app')

@section('content')
    <h1>Booking Layanan: {{ $service->name ?? 'Tidak diketahui' }}</h1>

    <p>Silakan lengkapi data pemesanan untuk layanan ini.</p>

    <form method="post" action="{{ route('front.save_order', $service->slug) }}">
        @csrf
        <input type="hidden" name="service_id" value="{{ $service->id }}">

        <div>
            <label>Nama</label>
            <input type="text" name="customer_name" required>
        </div>

        <div>
            <label>Telepon</label>
            <input type="text" name="phone" required>
        </div>

        <div>
            <label>Email (opsional)</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Jumlah (qty)</label>
            <input type="number" name="quantity" value="1" min="1">
        </div>

        <div>
            <button type="submit">Mulai Pemesanan</button>
        </div>
    </form>
@endsection
