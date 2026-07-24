@extends('layouts.public')

@section('title', 'Beranda - Althaf Cargo')

@section('content')
<section
    class="relative min-h-[700px] flex items-center bg-cover bg-center"
    style="background-image: url('{{ asset('images/hero-cargo.jpg') }}');">

    <div class="absolute inset-0 bg-navy-900/75"></div>

    <div class="relative max-w-7xl mx-auto px-6 w-full">

        <div class="max-w-2xl">

            <span class="inline-block bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6">
                Solusi Logistik Nasional
            </span>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 text-white drop-shadow-2xl">

                Pengiriman Barang

                <span class="block text-amber-400">
                    Cepat, Aman,
                </span>

                <span class="block">
                    dan Terpercaya
                </span>

            </h1>

            <p class="text-xl text-gray-200 leading-relaxed mb-8">
                Althaf Cargo melayani pengiriman darat, laut, dan udara ke seluruh Indonesia dengan sistem pelacakan real-time serta armada profesional.
            </p>

            <div class="flex flex-wrap gap-4">

                <a href="{{ route('public.services') }}"
                    class="bg-amber-500 hover:bg-amber-400 transition px-8 py-4 rounded-lg font-bold shadow-lg">

                    Lihat Layanan

                </a>

                <a href="{{ route('public.contact') }}"
                    class="inline-flex items-center justify-center
                        border-2 border-white
                        text-white
                        px-8 py-4
                        rounded-lg
                        font-bold
                        shadow-lg
                        hover:bg-white
                        hover:text-navy-900
                        transition-all duration-300">
                    Hubungi Kami
                </a>

            </div>

            <div class="grid grid-cols-3 gap-8 mt-14">

                <div>
                    <h2 class="text-4xl font-bold text-amber-400">
                        10+
                    </h2>

                    <p class="text-gray-300">
                        Tahun Pengalaman
                    </p>
                </div>

                <div>

                    <h2 class="text-4xl font-bold text-amber-400">
                        5000+
                    </h2>

                    <p class="text-gray-300">
                        Pengiriman
                    </p>

                </div>

                <div>

                    <h2 class="text-4xl font-bold text-amber-400">
                        34
                    </h2>

                    <p class="text-gray-300">
                        Provinsi
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<section class="bg-white py-14">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div>
                <h2 class="text-4xl font-bold text-navy-800">10+</h2>
                <p class="text-gray-600 mt-2">Tahun Pengalaman</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold text-navy-800">5000+</h2>
                <p class="text-gray-600 mt-2">Pengiriman Berhasil</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold text-navy-800">34</h2>
                <p class="text-gray-600 mt-2">Provinsi Terjangkau</p>
            </div>

            <div>
                <h2 class="text-4xl font-bold text-navy-800">24/7</h2>
                <p class="text-gray-600 mt-2">Customer Support</p>
            </div>

        </div>
    </div>
</section>

<div class="max-w-7xl mx-auto px-6 py-20">

    <div class="text-center mb-14">

        <h2 class="text-4xl font-bold text-navy-800">
            Layanan Unggulan
        </h2>

        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
            Kami menyediakan berbagai solusi logistik untuk memenuhi kebutuhan pengiriman barang Anda ke seluruh Indonesia.
        </p>

    </div>

    <div class="grid md:grid-cols-3 gap-10">

        <!-- DARAT -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

            <img
                src="{{ asset('images/services/truck.jpg') }}"
                class="w-full h-60 object-cover">

            <div class="p-6">

                <h3 class="text-2xl font-bold text-navy-800 mb-3">
                    🚚 Kargo Darat
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Pengiriman barang menggunakan armada truk modern dengan cakupan ke seluruh Indonesia.
                </p>

                <a
                    href="{{ route('public.services') }}"
                    class="font-semibold text-amber-600 hover:text-amber-500">

                    Pelajari Selengkapnya →

                </a>

            </div>

        </div>

        <!-- UDARA -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

            <img
                src="{{ asset('images/services/air.jpg') }}"
                class="w-full h-60 object-cover">

            <div class="p-6">

                <h3 class="text-2xl font-bold text-navy-800 mb-3">
                    ✈️ Kargo Udara
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Solusi pengiriman cepat melalui jalur udara untuk kebutuhan ekspres dan bernilai tinggi.
                </p>

                <a
                    href="{{ route('public.services') }}"
                    class="font-semibold text-amber-600 hover:text-amber-500">

                    Pelajari Selengkapnya →

                </a>

            </div>

        </div>

        <!-- LAUT -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition duration-300">

            <img
                src="{{ asset('images/services/ship.jpg') }}"
                class="w-full h-60 object-cover">

            <div class="p-6">

                <h3 class="text-2xl font-bold text-navy-800 mb-3">
                    🚢 Kargo Laut
                </h3>

                <p class="text-gray-600 leading-relaxed mb-6">
                    Pengiriman antar pulau menggunakan kapal kargo dengan kapasitas besar dan biaya ekonomis.
                </p>

                <a
                    href="{{ route('public.services') }}"
                    class="font-semibold text-amber-600 hover:text-amber-500">

                    Pelajari Selengkapnya →

                </a>

            </div>

        </div>

    </div>

</div>

<section class="bg-gray-50 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-14">

            <h2 class="text-4xl font-bold text-navy-800">
                Mengapa Memilih Althaf Cargo
            </h2>

            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Kami berkomitmen memberikan layanan logistik yang aman,
                cepat, dan terpercaya untuk setiap pengiriman.
            </p>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="bg-white rounded-xl p-8 shadow hover:shadow-xl transition">
                <div class="text-5xl mb-5">🛡️</div>
                <h3 class="font-bold text-xl text-navy-800 mb-3">
                    Keamanan Terjamin
                </h3>

                <p class="text-gray-600">
                    Barang ditangani oleh tenaga profesional dengan standar keamanan tinggi.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow hover:shadow-xl transition">
                <div class="text-5xl mb-5">⚡</div>

                <h3 class="font-bold text-xl text-navy-800 mb-3">
                    Pengiriman Cepat
                </h3>

                <p class="text-gray-600">
                    Armada modern memastikan barang tiba sesuai estimasi.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow hover:shadow-xl transition">

                <div class="text-5xl mb-5">📍</div>

                <h3 class="font-bold text-xl text-navy-800 mb-3">
                    Tracking Real-Time
                </h3>

                <p class="text-gray-600">
                    Pantau posisi pengiriman Anda secara online kapan saja.
                </p>

            </div>

            <div class="bg-white rounded-xl p-8 shadow hover:shadow-xl transition">

                <div class="text-5xl mb-5">🤝</div>

                <h3 class="font-bold text-xl text-navy-800 mb-3">
                    Customer Support
                </h3>

                <p class="text-gray-600">
                    Tim kami siap membantu selama proses pengiriman berlangsung.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="bg-navy-800 py-24">

    <div class="max-w-5xl mx-auto text-center px-6">

        <h2 class="text-4xl font-bold text-white">
            Siap Mengirim Barang Anda?
        </h2>

        <p class="text-gray-300 mt-6 text-lg">
            Percayakan kebutuhan logistik Anda kepada Althaf Cargo.
            Kami siap melayani pengiriman ke seluruh Indonesia.
        </p>

        <a href="{{ route('public.contact') }}"
            class="inline-block mt-10 bg-amber-500 hover:bg-amber-400 text-white font-bold px-10 py-4 rounded-xl shadow-lg transition">

            Hubungi Kami Sekarang

        </a>

    </div>

</section>
@endsection