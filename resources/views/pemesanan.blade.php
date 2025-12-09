@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('/assests/pemesanan.css') }}">
@section('content')
<div class="form-container">
<div class="container" style="max-width: 900px;">

    <h2 class="fw-bold mb-4 text-center text-primary">Form Pemesanan Layanan</h2>

    {{-- ALERT BERHASIL --}}
    @if(session('success'))
        <div class="alert alert-success text-center mb-4">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
        </div>
    @endif

    {{-- ALERT ERROR --}}
    @if($errors->any())
        <div class="alert alert-danger text-center mb-4">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Ada kesalahan dalam pengisian form:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-card">
        <div class="form-header">
            <h3 class="mb-0"><i class="fas fa-clipboard-list me-2"></i>Detail Pemesanan</h3>
            <p class="mb-0 mt-2 opacity-75">Isi formulir di bawah dengan benar</p>
        </div>

        <form action="{{ route('pemesanan.store') }}" method="POST" class="p-4">
            @csrf

            <div class="row g-4">

                {{-- Nama --}}
                <div class="col-md-6">
                    <label class="form-label"><i class="fas fa-user me-2"></i>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>

                {{-- Email --}}
                <div class="col-md-6">
                    <label class="form-label"><i class="fas fa-envelope me-2"></i>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
                </div>

                {{-- Phone --}}
                <div class="col-md-6">
                    <label class="form-label"><i class="fas fa-phone me-2"></i>Nomor Telepon</label>
                    <input type="text" name="phone" class="form-control" placeholder="081234567890" required>
                </div>

                {{-- Quantity --}}
                <div class="col-md-6">
                    <label class="form-label"><i class="fas fa-calculator me-2"></i>Jumlah</label>
                    <input type="number" name="quantity" class="form-control" min="1" value="1" required>
                </div>

                {{-- SERVICE DROPDOWN --}}
                <div class="col-12">
                    <label class="form-label"><i class="fas fa-concierge-bell me-2"></i>Pilih Layanan</label>
                    <select name="service_id" class="form-control" required>
                        <option value="" disabled selected>— Pilih layanan —</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">
                                {{ $service->name }} 
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Address --}}
                <div class="col-md-6">
                    <label class="form-label"><i class="fas fa-map-marker-alt me-2"></i>Alamat Lengkap</label>
                    <textarea name="address" class="form-control" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                </div>

                {{-- City --}}
                <div class="col-md-3">
                    <label class="form-label"><i class="fas fa-city me-2"></i>Kota</label>
                    <input type="text" name="city" class="form-control" required>
                </div>

                {{-- Postcode --}}
                <div class="col-md-3">
                    <label class="form-label"><i class="fas fa-mailbox me-2"></i>Kode Pos</label>
                    <input type="text" name="post_code" class="form-control" required>
                </div>

            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn-submit text-white">
                    <i class="fas fa-paper-plane me-2"></i> Kirim Pemesanan
                </button>
            </div>

        </form>

    </div>
</div>
</div>

@endsection