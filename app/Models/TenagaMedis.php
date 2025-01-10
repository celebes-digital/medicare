<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaMedis extends Model
{
    use HasFactory;

    protected $table = 'tenaga_medis';

    protected $fillable = [
        'nama',
        'nik',
        'no_str',
        'alamat',
        'no_telp',
        'his',
    ];
}
