<?php

namespace Database\Seeders;

use App\Models\TipeMobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipeMobil::insert([
            [
                'nama' => 'Tinggi'
            ],
            [
                'nama' => 'Sedang'
            ],
            [
                'nama' => 'Rendah'
            ],
        ]);
    }
}
