<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Periksa::factory(10)->create();
    }
}
