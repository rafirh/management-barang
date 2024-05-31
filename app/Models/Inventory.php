<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventories';

    protected $fillable = [
        'name',
        'code',
        'price',
        'desc',
        'stock',
        'category_id',
    ];

    protected $fields = [
        'name',
        'code',
        'price',
        'desc',
        'stock',
        'category_id',
        'created_at',
        'updated_at',
    ];
    
    static $sortables = [
        'name' => 'Nama',
        'code' => 'Kode',
        'price' => 'Harga',
        'desc' => 'Deskripsi',
        'stock' => 'Stok',
        'category_id' => 'Kategori',
        'created_at' => 'Waktu Ditambahkan',
        'updated_at' => 'Waktu Diperbarui',
    ];

    static $allowedParams = ['q', 'sortby', 'order', 'limit', 'category'];

    public function scopeOptions($query, $options = [])
    {
        if (isset($options['q'])) {
            $query->where(function ($query) use ($options) {
                $query->where('name', 'like', '%' . $options['q'] . '%')
                    ->orWhere('code', 'like', '%' . $options['q'] . '%')
                    ->orWhere('price', 'like', '%' . $options['q'] . '%')
                    ->orWhere('desc', 'like', '%' . $options['q'] . '%');
            });
        }
        if (isset($options['category'])) {
            $query->where('category_id', $options['category']);
        }
        if (isset($options['sortby']) && in_array($options['sortby'], $this->fields)) {
            if (!isset($options['order'])) {
                $options['order'] = 'asc';
            }
            $query->orderBy($options['sortby'], validateAndGetOrder($options['order']));
        } else {
            $query->orderBy('created_at', 'desc');
        }
        return $query;
    }

    public function category()
    {
        return $this->belongsTo(InventoryCategory::class, 'category_id');
    }
}
