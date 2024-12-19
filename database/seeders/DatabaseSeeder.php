<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user with 'name', 'password', and 'role'
        User::create([
            'name' => 'admin',  // User's name
            'password' => Hash::make('password'),  // Hashed password
            'role' => 'admin',  // Assign role to the user (you can adjust this based on the role)
        ]);
    }
}
