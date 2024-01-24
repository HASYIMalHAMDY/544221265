<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan_pelanggan extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id-ulasan',
        'ulasan',
        'perigkat',
    ];

    protected $hidden = [
        'id_ulasan',
    ];
}
