<?php

namespace Database\Factories;

use App\Models\DaftarPoli;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaftarPoliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DaftarPoli::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_poli' => $this->faker->word, // Nama Poli
            'keterangan' => $this->faker->sentence, // Keterangan
        ];
    }
}
