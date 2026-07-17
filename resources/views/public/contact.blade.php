@extends('layouts.public')

@section('title', 'Kontak - Althaf Cargo')

@section('content')

<section class="bg-gradient-to-r from-navy-900 via-navy-800 to-navy-700 text-white py-24">

    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="bg-amber-500 px-4 py-2 rounded-full text-sm font-semibold">
            Hubungi Kami
        </span>

        <h1 class="text-5xl font-bold mt-6 mb-5">

            Kami Siap Membantu Pengiriman Anda

        </h1>

        <p class="text-xl text-gray-200 max-w-3xl mx-auto">

            Konsultasikan kebutuhan logistik Anda bersama tim Althaf Cargo.

        </p>

    </div>

</section>



<section class="py-20 bg-gray-50">

<div class="max-w-7xl mx-auto px-6">

<div class="grid lg:grid-cols-5 gap-10">

<!-- INFORMASI -->

<div class="lg:col-span-2">

<div class="bg-white rounded-2xl shadow-lg p-8 h-full">

<h2 class="text-3xl font-bold text-navy-800 mb-8">

Informasi Kontak

</h2>

<div class="space-y-8">

<div>

<h3 class="font-semibold text-navy-800">

📞 Telepon

</h3>

<p class="text-gray-600 mt-2">

0811-2399-972

</p>

</div>

<div>

<h3 class="font-semibold text-navy-800">

✉ Email

</h3>

<p class="text-gray-600 mt-2">

info@althafcargo.id

</p>

</div>

<div>

<h3 class="font-semibold text-navy-800">

📍 Alamat

</h3>

<p class="text-gray-600 mt-2 leading-7">

Jl. Raya KH. Umar,
Rawa Ilat,
Cileungsi,
Kabupaten Bogor

</p>

</div>

<div>

<h3 class="font-semibold text-navy-800">

🕒 Jam Operasional

</h3>

<p class="text-gray-600 mt-2">

Senin - Sabtu

<br>

08.00 - 17.00 WIB

</p>

</div>

<a
href="https://wa.me/628112399972"
target="_blank"
class="block text-center mt-10 bg-green-600 hover:bg-green-700 text-white font-semibold py-4 rounded-xl transition">

Chat via WhatsApp

</a>

</div>

</div>

</div>



<!-- FORM -->

<div class="lg:col-span-3">

<div class="bg-white rounded-2xl shadow-lg p-10">

<h2 class="text-3xl font-bold text-navy-800 mb-8">

Kirim Pesan

</h2>

<form action="{{ route('contact.send') }}" method="POST">

@csrf

<div class="grid md:grid-cols-2 gap-6">

<div>

<label class="font-medium">

Nama

</label>

<input
type="text"
name="name"
required
class="mt-2 w-full rounded-xl border-gray-300">

</div>

<div>

<label class="font-medium">

Email

</label>

<input
type="email"
name="email"
required
class="mt-2 w-full rounded-xl border-gray-300">

</div>

</div>

<div class="mt-6">

<label class="font-medium">

Nomor Telepon

</label>

<input
type="text"
name="phone"
class="mt-2 w-full rounded-xl border-gray-300">

</div>

<div class="mt-6">

<label class="font-medium">

Pesan

</label>

<textarea
rows="6"
name="message"
required
class="mt-2 w-full rounded-xl border-gray-300"></textarea>

</div>

<button
class="mt-8 bg-navy-800 hover:bg-navy-700 text-white px-8 py-4 rounded-xl font-semibold transition">

Kirim Pesan

</button>

</form>

</div>

</div>

</div>

</div>

</section>



<section class="bg-white py-20">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-3xl font-bold text-center text-navy-800 mb-10">

Lokasi Kami

</h2>

<div class="rounded-2xl overflow-hidden shadow-xl">

<iframe
src="https://www.google.com/maps?q=Cileungsi,Bogor&output=embed"
width="100%"
height="450"
style="border:0;"
loading="lazy">
</iframe>

</div>

</div>

</section>

@endsection