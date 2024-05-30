<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaKirim extends Model
{
    use HasFactory;

    protected $table = 'jasa_kirim';

    protected $fillable = [
        'nama',
        'harga'
    ];
}
