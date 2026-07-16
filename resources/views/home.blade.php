@extends('layouts.public')

@section('title', 'Beranda - Althaf Cargo')

@section('content')
<section class="bg-gradient-to-br from-navy-800 to-navy-900 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <div class="text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 text-white">Solusi Pengiriman Kargo <span class="text-amber-400">Terpercaya</span></h1>
            <p class="text-lg text-amber-100/90 mb-6">Aman, cepat, dan terpercaya ke seluruh Indonesia. Pantau kiriman Anda dan nikmati layanan pelanggan 24/7.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('public.services') }}" class="inline-block bg-amber-400 text-navy-900 font-semibold px-6 py-3 rounded-lg hover:bg-amber-300 transition">Lihat Layanan</a>
                <a href="{{ route('public.contact') }}" class="inline-block border border-white/30 text-white px-6 py-3 rounded-lg hover:bg-white/5 transition">Hubungi Kami</a>
            </div>
        </div>
        <div class="flex justify-center md:justify-end">
            <div class="w-64 h-64 bg-white/5 rounded-2xl p-6 flex items-center justify-center">
                <svg width="160" height="160" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-amber-300">
                    <rect x="2" y="7" width="20" height="10" rx="2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7 7V5a2 2 0 012-2h6a2 2 0 012 2v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 14v3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 14v3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-navy-800 text-center mb-12">Layanan Unggulan</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex items-start gap-4">
            <div class="flex-shrink-0 bg-amber-50 rounded-full p-3">
                <svg class="w-8 h-8 text-amber-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7h18M5 7v10a2 2 0 002 2h10a2 2 0 002-2V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
                <h3 class="font-semibold text-xl mb-1 text-navy-800">Kargo Darat</h3>
                <p class="text-gray-600">Pengiriman via truk ke seluruh wilayah dengan pelacakan realtime.</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex items-start gap-4">
            <div class="flex-shrink-0 bg-amber-50 rounded-full p-3">
                <svg class="w-8 h-8 text-amber-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 12h20M6 8l4-4 4 4M6 16l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
                <h3 class="font-semibold text-xl mb-1 text-navy-800">Kargo Udara</h3>
                <p class="text-gray-600">Pengiriman cepat via pesawat untuk kebutuhan mendesak.</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex items-start gap-4">
            <div class="flex-shrink-0 bg-amber-50 rounded-full p-3">
                <svg class="w-8 h-8 text-amber-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h18v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 14v3M17 14v3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div>
                <h3 class="font-semibold text-xl mb-1 text-navy-800">Kargo Laut</h3>
                <p class="text-gray-600">Pengiriman antar pulau via kapal dengan pilihan jadwal ekonomis.</p>
            </div>
        </div>
    </div>
</div>
@endsection