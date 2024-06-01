<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'inventory_transactions';

    protected $fillable = [
        'inventory_id',
        'type',
        'qty',
        'desc',
        'date'
    ];

    protected $fields = [
        'inventory_id',
        'type',
        'qty',
        'desc',
        'date',
        'created_at',
        'updated_at',
    ];

    static $sortables = [
        'type' => 'Tipe',
        'qty' => 'Jumlah',
        'desc' => 'Deskripsi',
        'date' => 'Tanggal',
        'created_at' => 'Waktu Ditambahkan',
        'updated_at' => 'Waktu Diperbarui',
    ];

    static $allowedParams = ['q', 'sortby', 'order', 'limit', 'type'];

    static $types = ['Masuk', 'Keluar'];

    public function scopeOptions($query, $options = [])
    {
        if (isset($options['q'])) {
            $query->where(function ($query) use ($options) {
                $query->where('type', 'like', '%' . $options['q'] . '%')
                    ->orWhere('qty', 'like', '%' . $options['q'] . '%')
                    ->orWhere('desc', 'like', '%' . $options['q'] . '%');
            });
        }
        if (isset($options['type'])) {
            $query->where('type', $options['type']);
        }
        if (isset($options['sortby']) && in_array($options['sortby'], $this->fields)) {
            $query->orderBy($options['sortby'], $options['order'] ?? 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}
