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
            ['email' => 'admin@kargo.com'], // cari berdasarkan email
            [
                'name' => 'Admin Kargo',
                'password' => bcrypt('rahasia123'),
                'role' => 'admin',
            ]
        );

        \App\Models\CompanyProfile::firstOrCreate(
            ['id' => 1], // atau kriteria unik lainnya
            [
                'name' => 'Nama Perusahaan Anda',
                'description' => 'Deskripsi singkat perusahaan kargo Anda.',
                'address' => 'Alamat lengkap',
                'phone' => '08123456789',
                'email' => 'info@kargo.com',
            ]
        );
    }
}
