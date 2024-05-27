<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    // Nama tabel yang digunakan
    protected $table = 'periksas';

    // Kolom yang dapat diisi
    protected $fillable = [
        'tgl',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
        'id_pasien',
        'id_dokter',
    ];
}