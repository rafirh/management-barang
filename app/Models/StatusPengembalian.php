<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengembalian extends Model
{
    use HasFactory;

    protected $table = 'status_pengembalian';

    protected $fillable = [
        'status_pengembalian'
    ];
}
