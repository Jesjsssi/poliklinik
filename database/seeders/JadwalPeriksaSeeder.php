<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalPeriksa;
use App\Models\Dokter;

class JadwalPeriksaSeeder extends Seeder
{
    public function run()
    {
        $dokters = Dokter::all();

        if ($dokters->isNotEmpty()) {
            foreach ($dokters as $dokter) {
                JadwalPeriksa::create([
                    'dokter_id' => $dokter->id,
                    'hari' => 'Senin',
                    'jam_mulai' => '08:00:00',
                    'jam_selesai' => '12:00:00',
                ]);

                JadwalPeriksa::create([
                    'dokter_id' => $dokter->id,
                    'hari' => 'Selasa',
                    'jam_mulai' => '09:00:00',
                    'jam_selesai' => '13:00:00',
                ]);
            }
        }
    }
}