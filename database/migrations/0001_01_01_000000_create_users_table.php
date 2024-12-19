<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create users table with name, password, and role columns
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Store user name
            $table->string('password');  // Store hashed password
            $table->string('role');  // Store user role (e.g., admin, dokter)
            $table->rememberToken();  // Store remember me token
            $table->timestamps();  // Store created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the users table
        Schema::dropIfExists('users');
    }
};
