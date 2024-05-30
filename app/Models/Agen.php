<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;

    protected $table = 'agen';

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'no_rekening',
        'bank',
        'atas_nama',
        'user_id'
    ];
}
