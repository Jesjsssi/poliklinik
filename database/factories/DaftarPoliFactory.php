<?php

namespace Database\Factories;

use App\Models\DaftarPoli;
use App\Models\Pasien;
use App\Models\JadwalPeriksa;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarPoliFactory extends Factory
{
    protected $model = DaftarPoli::class;

    public function definition()
    {
        return [
            'id_pasien' => Pasien::factory(),
            'id_jadwal' => JadwalPeriksa::factory(),
            'keluhan' => $this->faker->sentence,
            'no_antrian' => $this->faker->unique()->numberBetween(1, 100),
        ];
    }
}