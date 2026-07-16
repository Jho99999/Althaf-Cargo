@extends('layouts.public')

@section('title', 'Terima Kasih - Althaf Cargo')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-16 text-center">
    <div class="bg-gray-50 p-8 rounded-lg">
        <div class="mb-8">
            <svg class="w-16 h-16 mx-auto text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4 text-navy-800">Pesan Berhasil Dikirim!</h1>
        <p class="text-xl text-gray-700 mb-8">Terima kasih telah menghubungi kami. Tim kami akan segera memproses pesan Anda.</p>
        <p class="text-lg text-gray-600 mb-12">Fitur ini sedang kami perbaiki untuk memberikan layanan yang lebih baik.</p>
    </div>
</div>

<section class="bg-gradient-to-br from-navy-800 to-navy-900 text-white py-16 mt-12">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold mb-4">Informasi Kontak Kami</h2>
        <p class="text-amber-100/90 mb-8">Jika Anda membutuhkan bantuan segera, silakan hubungi kami melalui:</p>
        <div class="space-y-3 mb-8">
            <p class="text-lg"><span class="font-semibold">📞</span> 0812-3456-7890</p>
            <p class="text-lg"><span class="font-semibold">✉️</span> info@althafcargo.id</p>
            <p class="text-lg"><span class="font-semibold">📍</span> Jl. Logistik No. 99, Jakarta</p>
        </div>
        
        <a href="{{ route('home') }}" class="inline-block bg-amber-400 text-navy-900 font-semibold px-8 py-4 rounded-lg hover:bg-amber-300 transition text-lg">
            ← Kembali ke Beranda
        </a>
    </div>
</section>
@endsection
