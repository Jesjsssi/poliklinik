<?php

namespace Database\Factories;

use App\Models\JadwalPeriksa;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalPeriksaFactory extends Factory
{
    protected $model = JadwalPeriksa::class;

    public function definition()
    {
        return [
            'tgl_periksa' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'catatan' => $this->faker->sentence(),
            'biaya_periksa' => $this->faker->numberBetween(100000, 500000),
        ];
    }
}