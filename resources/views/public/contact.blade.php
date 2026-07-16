@extends('layouts.public')

@section('title', 'Kontak - KargoPro')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold text-navy-800 mb-8">Kontak Kami</h1>
    <form action="{{ route('contact.send') }}" method="POST" class="max-w-lg bg-white p-6 rounded-xl shadow-sm">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="name" class="w-full border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" class="w-full border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Telepon</label>
            <input type="text" name="phone" class="w-full border-gray-300 rounded-lg">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Pesan</label>
            <textarea name="message" rows="4" class="w-full border-gray-300 rounded-lg" required></textarea>
        </div>
        <button type="submit" class="bg-navy-800 text-white px-6 py-2 rounded-lg hover:bg-navy-700">Kirim Pesan</button>
    </form>
</div>
@endsection