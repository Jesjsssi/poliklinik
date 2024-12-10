<?php

namespace Database\Seeders;

use App\Models\DaftarPoli;
use App\Models\Pasien;
use App\Models\JadwalPeriksa;
use Illuminate\Database\Seeder;

class DaftarPoliSeeder extends Seeder
{
    public function run()
    {
        // Ambil pasien dan jadwal secara acak
        $pasien = Pasien::inRandomOrder()->first();
        $jadwal = JadwalPeriksa::inRandomOrder()->first();

        DaftarPoli::create([
            'id_pasien' => $pasien->id,
            'id_jadwal' => $jadwal->id,
            'keluhan' => 'Keluhan contoh',
            'no_antrian' => rand(1, 100),
        ]);
    }
}