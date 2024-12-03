<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Buat pengguna dengan peran admin
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Buat pengguna dengan peran dokter
        User::updateOrCreate(
            ['email' => 'dokter@example.com'],
            [
                'name' => 'Dokter User',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ]
        );

        // Buat pengguna dengan peran pasien
        User::updateOrCreate(
            ['email' => 'pasien@example.com'],
            [
                'name' => 'Pasien User',
                'password' => Hash::make('password'),
                'role' => 'pasien',
            ]
        );
    }
}
