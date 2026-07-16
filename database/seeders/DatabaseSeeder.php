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
    }
}
