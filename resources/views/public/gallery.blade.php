@extends('layouts.public')

@section('title', 'Galeri - Althaf Cargo')

@section('content')
<section class="bg-gradient-to-br from-navy-800 to-navy-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeri Kami</h1>
        <p class="text-amber-100/90 text-lg">Lihat koleksi foto dari berbagai layanan dan fasilitas Althaf Cargo</p>
    </div>
</section>

<div class="max-w-7xl mx-auto px-4 py-16">
    @if($galleries->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($galleries as $gallery)
                <div class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition">
                    <div class="relative overflow-hidden h-64">
                        <img 
                            src="{{ $gallery->image }}" 
                            alt="{{ $gallery->title }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300"
                        >
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl text-navy-800 mb-2">{{ $gallery->title }}</h3>
                        @if($gallery->description)
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $gallery->description }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-16">
            <h2 class="text-2xl font-bold text-navy-800 mb-4">Belum ada galeri</h2>
            <p class="text-gray-600">Silakan kembali lagi nanti untuk melihat koleksi foto kami.</p>
        </div>
    @endif
</div>
@endsection