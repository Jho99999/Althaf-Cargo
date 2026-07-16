@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold text-navy-800 mb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded-xl shadow-sm">
        <p class="text-gray-500 text-sm">Total Layanan</p>
        <p class="text-2xl font-bold text-navy-800">{{ $stats['total_services'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow-sm">
        <p class="text-gray-500 text-sm">Total Galeri</p>
        <p class="text-2xl font-bold text-navy-800">{{ $stats['total_galleries'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow-sm">
        <p class="text-gray-500 text-sm">Pesan Belum Dibaca</p>
        <p class="text-2xl font-bold text-amber-600">{{ $stats['unread_messages'] }}</p>
    </div>
    <div class="bg-white p-4 rounded-xl shadow-sm">
        <p class="text-gray-500 text-sm">Total Pesan</p>
        <p class="text-2xl font-bold text-navy-800">{{ $stats['total_messages'] }}</p>
    </div>
</div>
@endsection