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
                'name' => 'Motor',
                'desc' => 'Kategori yang digunakan untuk motor',
            ],
            [
                'name' => 'Mobil',
                'desc' => 'Kategori yang digunakan untuk mobil',
            ],
            [
                'name' => 'Sepeda',
                'desc' => 'Kategori yang digunakan untuk sepeda',
            ],
        ]);
    }
}
