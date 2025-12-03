@extends('layouts.app')

@section('content')
    <h1>Layanan: {{ $service->name ?? 'Tidak diketahui' }}</h1>

    <p>{{ $service->about ?? '' }}</p>

    @if(!empty($service->photos))
        <h3>Foto</h3>
        <ul>
            @foreach($service->photos as $photo)
                <li><img src="{{ $photo->path ?? $photo->thumbnail ?? '#' }}" alt="{{ $service->name }}" style="max-width:200px"></li>
            @endforeach
        </ul>
    @endif

@endsection
