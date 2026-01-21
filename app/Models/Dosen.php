<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dosen extends Model
{
    // use HasFactory;
    use HasFactory, Notifiable;

    // protected $table = 'dosen';

    protected $fillable = [
        'nama',
        'nidn',
        'alamat',
        'hp',
        'email',
        'password'
    ];
}