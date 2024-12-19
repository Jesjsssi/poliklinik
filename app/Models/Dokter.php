<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Authenticatable  // Inherit from the Authenticatable class
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'id_poli',
        'password',  // Make sure the password field is also included in fillable
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli', 'id'); // Dokter terkait Poli
    }
}
