<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryCategory extends Model
{
    use HasFactory;

    protected $tables = 'inventory_categories';

    protected $fillable = [
        'name',
        'desc',
    ];

    protected $fields = [
        'name',
        'desc',
        'created_at',
        'updated_at',
    ];

    static $sortables = [
        'name' => 'Nama',
        'desc' => 'Deskripsi',
        'created_at' => 'Waktu Ditambahkan',
        'updated_at' => 'Waktu Diperbarui',
    ];

    static $allowedParams = ['q', 'sortby', 'order', 'limit'];

    public function scopeOptions($query, $options = [])
    {
        if (isset($options['q'])) {
            $query->where(function ($query) use ($options) {
                $query->where('name', 'like', '%' . $options['q'] . '%')
                    ->orWhere('desc', 'like', '%' . $options['q'] . '%');
            });
        }
        if (isset($options['sortby']) && in_array($options['sortby'], $this->fields)) {
            $query->orderBy($options['sortby'], $options['order'] ?? 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'category_id');
    }
}
