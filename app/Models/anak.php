<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    // Menambahkan fillable property
    protected $fillable = [
        'nama',
        'umur',
        'alamat',
        'orang_tua',
        'kontak_orang_tua',
        'member',
    ];
}