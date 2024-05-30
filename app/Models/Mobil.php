<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';

    protected $fillable = [
        'agen_id',
        'merk_id',
        'jenis_id',
        'transmisi_id',
        'warna_id',
        'cc_id',
        'tipe_id',
        'nama',
        'plat_nomor',
        'tahun',
        'harga',
        'kapasitas',
        'foto',
        'status',
    ];

    public $timestamps = false;
}
