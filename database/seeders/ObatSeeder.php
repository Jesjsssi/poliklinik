<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    public function run()
    {
        Obat::insert([
            [
                'nama_obat' => 'Paracetamol',
                'kemasan' => 'Tablet 500mg',
                'harga' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Amoxicillin',
                'kemasan' => 'Kapsul 250mg',
                'harga' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Vitamin C',
                'kemasan' => 'Tablet 1000mg',
                'harga' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}