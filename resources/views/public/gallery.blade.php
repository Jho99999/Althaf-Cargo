@extends('layouts.public')

@section('title', 'Galeri - Althaf Cargo')

@section('content')

<!-- HERO -->
<section class="relative bg-gradient-to-r from-navy-900 via-navy-800 to-navy-700 text-white py-24">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="inline-block bg-amber-500 px-4 py-2 rounded-full text-sm font-semibold mb-5">
            Dokumentasi Perusahaan
        </span>

        <h1 class="text-5xl font-extrabold mb-5">
            Galeri Althaf Cargo
        </h1>

        <p class="text-xl text-gray-200 max-w-3xl mx-auto">
            Dokumentasi armada, fasilitas, gudang, serta aktivitas operasional
            Althaf Cargo dalam melayani pengiriman ke seluruh Indonesia.
        </p>

    </div>

</section>


<!-- GALLERY -->
<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        @if($galleries->count())

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                @foreach($galleries as $gallery)

                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:-translate-y-2 hover:shadow-2xl transition duration-300">

                    <div class="relative overflow-hidden">

                        <img
                            src="{{ $gallery->image }}"
                            alt="{{ $gallery->title }}"
                            class="h-72 w-full object-cover group-hover:scale-110 transition duration-500">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition">

                        </div>

                        <div
                            class="absolute bottom-4 left-4 bg-amber-500 text-white px-3 py-1 rounded-full text-sm font-semibold">

                            Althaf Cargo

                        </div>

                    </div>

                    <div class="p-7">

                        <h3 class="text-2xl font-bold text-navy-800 mb-3">
                            {{ $gallery->title }}
                        </h3>

                        <p class="text-gray-600 leading-7">
                            {{ $gallery->description }}
                        </p>

                    </div>

                </div>

                @endforeach

            </div>

        @else

            <div class="text-center py-24">

                <h2 class="text-3xl font-bold text-navy-800 mb-4">
                    Belum Ada Galeri
                </h2>

                <p class="text-gray-600">
                    Dokumentasi perusahaan akan segera ditampilkan.
                </p>

            </div>

        @endif

    </div>

</section>


<!-- CTA -->
<section class="bg-navy-900 py-20">

    <div class="max-w-5xl mx-auto text-center px-6">

        <h2 class="text-4xl font-bold text-white mb-6">

            Siap Mengirim Barang Anda?

        </h2>

        <p class="text-gray-300 text-lg mb-10">

            Tim Althaf Cargo siap membantu pengiriman darat, laut,
            maupun udara dengan layanan profesional.

        </p>

        <a href="{{ route('public.contact') }}"
            class="inline-block bg-amber-500 hover:bg-amber-400 text-white font-bold px-8 py-4 rounded-lg transition">

            Hubungi Kami

        </a>

    </div>

</section>

@endsection