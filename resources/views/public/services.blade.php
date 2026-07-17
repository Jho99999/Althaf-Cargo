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
        <div class="space-y-14">
            @foreach($services as $service)

            @php
                $image = match($service->name) {
                    'Kargo Darat' => asset('images/services/truck.jpg'),
                    'Kargo Udara' => asset('images/services/air.jpg'),
                    'Kargo Laut' => asset('images/services/ship.jpg'),
                    default => asset('images/services/default.jpg'),
                };
            @endphp

            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">

                <div class="grid md:grid-cols-2">

                    <!-- Gambar -->
                    <div>
                        <img
                            src="{{ $image }}"
                            alt="{{ $service->name }}"
                            class="w-full h-80 object-cover">
                    </div>

                    <!-- Konten -->
                    <div class="p-10 flex flex-col justify-center">

                        <div class="inline-flex items-center gap-3 mb-5">

                            <div class="bg-amber-100 p-3 rounded-full">
                                <svg class="w-7 h-7 text-amber-600"
                                    viewBox="0 0 24 24"
                                    fill="none">

                                    <path
                                        d="M3 7h18M5 7v10a2 2 0 002 2h10a2 2 0 002-2V7"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>

                                </svg>
                            </div>

                            <h2 class="text-3xl font-bold text-navy-800">
                                {{ $service->name }}
                            </h2>

                        </div>

                        @if($service->price)
                            <div class="mb-6">
                                <span class="bg-amber-500 text-white px-4 py-2 rounded-full font-semibold">
                                    {{ $service->price }}
                                </span>
                            </div>
                        @endif

                        <p class="text-gray-600 leading-8 text-lg">
                            {{ $service->description }}
                        </p>

                        <a href="{{ route('public.contact') }}"
                            class="mt-8 inline-flex w-fit bg-navy-800 text-white px-6 py-3 rounded-lg hover:bg-navy-700 transition">

                            Konsultasi Sekarang

                        </a>

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