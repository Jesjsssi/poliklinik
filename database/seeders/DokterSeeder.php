<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;

class DokterSeeder extends Seeder
{
    public function run()
    {
        Dokter::create([
            'nama' => 'Dr. John Doe',
            'alamat' => 'Jl. Contoh Alamat No. 1',
            'no_hp' => '081234567890',
            'id_poli' => 1,  // Sesuaikan dengan ID poli yang ada
        ]);

        Dokter::create([
            'nama' => 'Dr. Jane Smith',
            'alamat' => 'Jl. Contoh Alamat No. 2',
            'no_hp' => '082345678901',
            'id_poli' => 2,  // Sesuaikan dengan ID poli yang ada
        ]);
    }
}
