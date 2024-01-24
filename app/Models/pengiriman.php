<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengiriman extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'ID_Produk',
        'alamat_pengirirman',
        'nomor_pelacakan',
        'status_pengiriman',
    ];
}
