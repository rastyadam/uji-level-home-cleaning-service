@extends('layouts.app')

@section('content')
    <h1>Beranda — Layanan</h1>

    <h2>Kategori</h2>
    <ul>
        @foreach($categories ?? [] as $cat)
            <li><a href="{{ route('front.category', optional($cat)->slug ?? optional($cat)->id) }}">{{ optional($cat)->name ?? 'Tidak diketahui' }}</a></li>
        @endforeach
    </ul>

    <h2>Layanan</h2>
    <ul>
        @foreach($services ?? [] as $service)
            <li><a href="{{ route('front.details', optional($service)->slug ?? optional($service)->id) }}">{{ optional($service)->name ?? 'Tidak diketahui' }}</a></li>
        @endforeach
    </ul>
@endsection
