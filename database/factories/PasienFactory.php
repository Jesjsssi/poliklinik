<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_ktp' => $this->faker->unique()->numerify('################'),
            'no_hp' => $this->faker->phoneNumber(),
            'no_rm' => $this->faker->unique()->numerify('RM######'),
        ];
    }
}
