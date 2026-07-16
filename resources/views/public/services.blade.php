@extends('layouts.public')

@section('title', 'Layanan - Althaf Cargo')

@section('content')
<section class="bg-gradient-to-br from-navy-800 to-navy-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Kami</h1>
        <p class="text-amber-100/90 text-lg">Solusi pengiriman lengkap untuk semua kebutuhan Anda</p>
    </div>
</section>

<div class="max-w-6xl mx-auto px-6 sm:px-8 py-16">
    @if($services->count() > 0)
        <div class="space-y-32">
            @foreach($services as $service)
                <div class="bg-white p-10 rounded-lg border border-gray-200 shadow-md hover:shadow-lg hover:border-amber-300 transition mb-8">
                    <div class="flex items-start gap-8 px-4 py-3">
                        <div class="flex-shrink-0 bg-amber-50 rounded-full p-4">
                            <svg class="w-8 h-8 text-amber-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 7h18M5 7v10a2 2 0 002 2h10a2 2 0 002-2V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-2xl text-navy-800 mb-3">{{ $service->name }}</h3>
                            @if($service->price)
                                <p class="text-amber-600 font-semibold text-base mb-6">{{ $service->price }}</p>
                            @endif
                            <p class="text-gray-600 leading-relaxed text-base">{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <h2 class="text-2xl font-bold text-navy-800 mb-4">Belum ada layanan</h2>
            <p class="text-gray-600">Silakan kembali lagi nanti untuk melihat daftar layanan kami.</p>
        </div>
    @endif
</div>
@endsection