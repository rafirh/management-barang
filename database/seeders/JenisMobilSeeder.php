<?php

namespace Database\Seeders;

use App\Models\JenisMobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisMobil::insert([
            [
                'nama' => 'SUV'
            ],
            [
                'nama' => 'MPV'
            ],
            [
                'nama' => 'Sedan'
            ],
            [
                'nama' => 'Hatchback'
            ],
            [
                'nama' => 'Coupe'
            ],
            [
                'nama' => 'Convertible'
            ],
            [
                'nama' => 'Sport'
            ],
            [
                'nama' => 'Lainnya'
            ]
        ]);
    }
}
