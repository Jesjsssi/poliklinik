<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public static $noRmCounter = 0; // Counter untuk nomor RM

    public function definition()
    {
        // Increment counter untuk setiap pasien
        self::$noRmCounter++;

        // Format nomor rekam medis (RM_001, RM_002, ...)
        $noRm = 'RM_' . str_pad(self::$noRmCounter, 3, '0', STR_PAD_LEFT);

        return [
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'no_ktp' => $this->faker->unique()->numerify('################'),
            'no_hp' => $this->faker->phoneNumber(),
            'no_rm' => $noRm,
        ];
    }
}
