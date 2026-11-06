<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nama_pelanggan',
    'no_polisi',
    'merek_mobil',
    'jenis_servis',
    'tanggal_servis',
    'biaya_servis',
    'keluhan',
    'status_servis'
])]

class ServisMobil extends Model
{
    /** @use HasFactory<\Database\Factories\ServisMobilFactory> */
    use HasFactory;
}