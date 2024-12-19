<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user with only name and password
        User::create([
            'name' => 'admin',
            'password' => Hash::make('password'),  // Password should be hashed
            'role' => 'admin',  // Set the role (if needed)
        ]);
    }
}


