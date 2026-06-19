<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'tb_dokter';

    protected $fillable = [
        'nama',
        'spesialis',
        'jadwal',
        'foto',
        'no_telp',
        'email',
        'bio',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
