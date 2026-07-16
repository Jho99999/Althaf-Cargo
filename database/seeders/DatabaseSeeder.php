<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::firstOrCreate(
            ['email' => 'admin@althafcargo.com'], // cari berdasarkan email
            [
                'name' => 'Admin Althaf Cargo',
                'password' => bcrypt('rahasia123'),
                'role' => 'admin',
            ]
        );

        \App\Models\CompanyProfile::firstOrCreate(
            ['id' => 1], // atau kriteria unik lainnya
            [
                'name' => 'Althaf Cargo',
                'description' => 'Deskripsi singkat perusahaan cargo Anda.',
                'address' => 'Alamat lengkap',
                'phone' => '08123456789',
                'email' => 'info@althafcargo.com',
            ]
        );

        // Seeding Services
        \App\Models\Service::firstOrCreate(
            ['name' => 'Kargo Darat'],
            [
                'description' => 'Pengiriman via truk ke seluruh wilayah dengan pelacakan realtime. Layanan andal untuk pengiriman barang dengan kapasitas besar ke berbagai destinasi di Indonesia.',
                'icon' => 'truck',
                'price' => 'Mulai dari Rp 50.000',
            ]
        );

        \App\Models\Service::firstOrCreate(
            ['name' => 'Kargo Udara'],
            [
                'description' => 'Pengiriman cepat via pesawat untuk kebutuhan mendesak. Ideal untuk barang yang memerlukan pengiriman kilat dengan prioritas tinggi ke seluruh Indonesia dan mancanegara.',
                'icon' => 'plane',
                'price' => 'Mulai dari Rp 100.000',
            ]
        );

        \App\Models\Service::firstOrCreate(
            ['name' => 'Kargo Laut'],
            [
                'description' => 'Pengiriman antar pulau via kapal dengan pilihan jadwal ekonomis. Cocok untuk pengiriman dalam jumlah besar dengan biaya terjangkau ke berbagai pelabuhan di Indonesia.',
                'icon' => 'ship',
                'price' => 'Mulai dari Rp 30.000',
            ]
        );

        // Seeding Gallery
        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Truk Pengiriman Darat'],
            [
                'description' => 'Armada truk modern kami siap melayani pengiriman ke seluruh nusantara dengan kapasitas besar dan aman.',
                'image' => 'https://images.pexels.com/photos/2199293/pexels-photo-2199293.jpeg',
            ]
        );

        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Pesawat Cargo'],
            [
                'description' => 'Layanan pengiriman udara cepat dengan jaringan internasional untuk pengiriman ekspres ke seluruh dunia.',
                'image' => 'https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=600&h=400&fit=crop',
            ]
        );

        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Kapal Pengirim'],
            [
                'description' => 'Kapal cargo kami melayani rute antar pulau dengan tarif ekonomis dan keamanan terjamin.',
                'image' => 'https://images.pexels.com/photos/906982/pexels-photo-906982.jpeg',
            ]
        );

        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Gudang Logistik'],
            [
                'description' => 'Fasilitas gudang modern dengan sistem penyimpanan berteknologi tinggi untuk menjamin keamanan barang.',
                'image' => 'https://images.pexels.com/photos/4483610/pexels-photo-4483610.jpeg',
            ]
        );

        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Sistem Tracking'],
            [
                'description' => 'Teknologi pelacakan real-time memberikan transparansi penuh terhadap posisi pengiriman Anda setiap waktu.',
                'image' => 'https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg',
            ]
        );

        \App\Models\Gallery::updateOrCreate(
            ['title' => 'Tim Profesional'],
            [
                'description' => 'Tim profesional kami terlatih dan berpengalaman dalam menangani berbagai jenis pengiriman dengan hati-hati.',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop',
            ]
        );
    }
}
