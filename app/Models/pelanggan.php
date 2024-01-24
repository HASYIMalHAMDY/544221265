<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Pelanggan',
        'Nama_Pelanggan',
        'Alamat',
        'Nomor_telepon',
        'Email',
    ];

}
