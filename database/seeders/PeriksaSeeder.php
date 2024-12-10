<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periksa;
use App\Models\DaftarPoli;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        $daftarPolis = DaftarPoli::all();

        foreach ($daftarPolis as $daftarPoli) {
            Periksa::create([
                'id_daftar_poli' => $daftarPoli->id,
                'tgl_periksa' => now()->addDays(rand(1, 30)),
                'catatan' => 'Catatan pemeriksaan untuk ' . $daftarPoli->id,
                'biaya_periksa' => rand(50000, 150000),
            ]);
        }
    }
}
