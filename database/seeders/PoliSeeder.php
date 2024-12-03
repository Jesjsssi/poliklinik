<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    public function run()
    {
        DB::table('polis')->insert([
            ['nama_poli' => 'Poli Umum', 'keterangan' => 'Pelayanan kesehatan umum'],
            ['nama_poli' => 'Poli Anak', 'keterangan' => 'Pelayanan kesehatan untuk anak'],
            ['nama_poli' => 'Poli Gigi', 'keterangan' => 'Pelayanan kesehatan gigi'],
        ]);
    }
}
