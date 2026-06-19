<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table = 'tb_pengaturan';

    protected $fillable = [
        'nama_klinik',
        'alamat',
        'telepon',
        'email',
        'logo',
        'favicon',
        'maps_embed',
        'deskripsi_singkat',
        'jam_operasional',
        'facebook',
        'instagram',
        'whatsapp',
    ];
}
