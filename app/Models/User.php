<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define fillable fields
    protected $fillable = [
        'name',
        'password',
        'role',  // You may want to add 'role' as well if using roles
    ];
}
