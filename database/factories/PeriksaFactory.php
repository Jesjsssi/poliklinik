<?php

namespace Database\Factories;

use App\Models\Periksa;
use App\Models\DaftarPoli;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriksaFactory extends Factory
{
    protected $model = Periksa::class;

    public function definition()
    {
        return [
            'id_daftar_poli' => DaftarPoli::factory(),
            'tgl_periksa' => $this->faker->dateTime(),
            'catatan' => $this->faker->sentence(),
            'biaya_periksa' => $this->faker->numberBetween(50000, 200000),
        ];
    }
}
