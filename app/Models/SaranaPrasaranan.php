<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaPrasaranan extends Model
{
    use HasFactory;
    protected $table = 'sarana_prasarana';

    protected $fillable = [
        'nama_moda',
        'jenis',
        'nomor_identitas',
        'deskripsi',
        'lokasi',
        'kapasitas',
        'satuan',
        'tanggal_pembelian',
    ];
}
