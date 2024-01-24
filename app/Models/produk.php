<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama_Produk',
        'Harga',
        'Stok',
    ];

    protected $hidden = [
        'ID_produk',
    ];
}
