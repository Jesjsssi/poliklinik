<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        Periksa::create([
            'id_daftar_poli' => 1, // Sesuaikan dengan ID yang valid di tabel daftar_polis
            'tgl_periksa' => now(),
            'catatan' => 'Pasien mengalami gejala flu',
            'biaya_periksa' => 100000,
        ]);

        Periksa::create([
            'id_daftar_poli' => 2, // Sesuaikan dengan ID yang valid di tabel daftar_polis
            'tgl_periksa' => now()->addDay(),
            'catatan' => 'Pasien membutuhkan pemeriksaan lanjutan',
            'biaya_periksa' => 150000,
        ]);

        // Tambahkan data sesuai kebutuhan
    }
}
