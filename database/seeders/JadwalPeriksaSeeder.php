<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\JadwalPeriksa;
use Illuminate\Database\Seeder;

class JadwalPeriksaSeeder extends Seeder
{
    public function run()
    {
        $dokters = Dokter::all();

        foreach ($dokters as $dokter) {
            // Menambahkan beberapa jadwal per dokter
            JadwalPeriksa::create([
                'id_dokter' => $dokter->id,
                'hari' => 'Senin',
                'jam_mulai' => '08:00',
                'jam_selesai' => '12:00',
            ]);
            JadwalPeriksa::create([
                'id_dokter' => $dokter->id,
                'hari' => 'Rabu',
                'jam_mulai' => '13:00',
                'jam_selesai' => '17:00',
            ]);
            JadwalPeriksa::create([
                'id_dokter' => $dokter->id,
                'hari' => 'Jumat',
                'jam_mulai' => '08:00',
                'jam_selesai' => '12:00',
            ]);
        }
    }
}
