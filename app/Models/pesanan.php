<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID_Produk',
        'Nama_Produk',
        'Harga',
        'Stok',
    ];
}

