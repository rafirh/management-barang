<?php

namespace Database\Seeders;

use App\Models\Transmisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransmisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transmisi::insert([
            [
                'nama' => 'Manual'
            ],
            [
                'nama' => 'Automatic'
            ],
            [
                'nama' => 'CVT'
            ],
            [
                'nama' => 'AMT'
            ],
            [
                'nama' => 'DCT'
            ],
            [
                'nama' => 'Lainnya'
            ]
        ]);
    }
}
