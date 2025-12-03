@extends('layouts.app')

@section('content')
    <h1>Kategori: {{ $category->name ?? 'Tidak diketahui' }}</h1>

    <h3>Layanan pada kategori ini</h3>
    <ul>
        @foreach($services ?? [] as $service)
            <li><a href="{{ route('front.details', optional($service)->slug ?? optional($service)->id) }}">{{ optional($service)->name ?? 'Tidak diketahui' }}</a></li>
        @endforeach
    </ul>

@endsection
