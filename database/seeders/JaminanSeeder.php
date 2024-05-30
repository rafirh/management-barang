<?php

namespace Database\Seeders;

use App\Models\Jaminan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JaminanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jaminan::insert([
            [
                'nama' => 'KTP'
            ],
            [
                'nama' => 'KK'
            ],
            [
                'nama' => 'NPWP'
            ],
            [
                'nama' => 'Perhiasan'
            ],
        ]);
    }
}
