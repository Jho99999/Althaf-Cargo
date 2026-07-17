@extends('layouts.public')

@section('title', 'Terima Kasih - Althaf Cargo')

@section('content')

<section class="min-h-[70vh] flex items-center justify-center py-20">

    <div class="max-w-2xl mx-auto px-6">

        <div class="bg-white rounded-2xl shadow-xl p-10 text-center">

            <div class="mb-8">
                <svg class="w-20 h-20 mx-auto text-green-500"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>

                </svg>
            </div>

            <h1 class="text-4xl font-bold text-navy-800 mb-6">

                Pesan Berhasil Dikirim

            </h1>

            <p class="text-lg text-gray-600 leading-8">

                Terima kasih telah menghubungi Althaf Cargo.
                Pesan Anda telah kami terima dan tim kami akan
                segera menghubungi Anda melalui email atau nomor
                telepon yang telah Anda berikan.

            </p>

            <div class="flex flex-wrap justify-center gap-4 mt-10">

                <a href="{{ route('home') }}"
                    class="bg-navy-800 hover:bg-navy-700 text-white px-8 py-4 rounded-lg transition">

                    Kembali ke Beranda

                </a>

                <a href="{{ route('public.services') }}"
                    class="bg-amber-500 hover:bg-amber-400 text-white px-8 py-4 rounded-lg transition">

                    Lihat Layanan

                </a>

                <a href="https://wa.me/628112399972"
                    target="_blank"
                    class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg transition">

                    WhatsApp

                </a>

            </div>

        </div>

    </div>

</section>

@endsection