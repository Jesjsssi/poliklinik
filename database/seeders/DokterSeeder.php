<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    public function run()
    {
        // Create the first doctor with a hashed password
        Dokter::create([
            'nama' => 'John Doe',
            'alamat' => 'Semarang',
            'no_hp' => '081234567890',
            'id_poli' => 1,  // Sesuaikan dengan ID poli yang ada
            'password' => Hash::make('password'),  // Add hashed password
        ]);

        // Create the second doctor with a hashed password
        Dokter::create([
            'nama' => 'Jane',
            'alamat' => 'Jakarta',
            'no_hp' => '082345678901',
            'id_poli' => 2,  // Sesuaikan dengan ID poli yang ada
            'password' => Hash::make('password'),  // Add hashed password
        ]);
    }
}

