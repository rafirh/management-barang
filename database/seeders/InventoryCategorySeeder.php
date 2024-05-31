<?php

namespace Database\Seeders;

use App\Models\InventoryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InventoryCategory::insert([
            [
                'name' => 'Mesin',
                'desc' => 'Kategori yang digunakan untuk suku cadang mesin',
            ],
            [
                'name' => 'Elektronik',
                'desc' => 'Kategori yang digunakan untuk suku cadang elektronik',
            ],
            [
                'name' => 'Sistem Pengereman',
                'desc' => 'Kategori yang digunakan untuk suku cadang sistem pengereman',
            ],
            [
                'name' => 'Sistem Pendinginan',
                'desc' => 'Kategori yang digunakan untuk suku cadang sistem pendinginan',
            ],
            [
                'name' => 'Sistem Bahan Bakar',
                'desc' => 'Kategori yang digunakan untuk suku cadang sistem bahan bakar',
            ],
            [
                'name' => 'Transmisi',
                'desc' => 'Kategori yang digunakan untuk suku cadang transmisi',
            ]
        ]);
    }
}
