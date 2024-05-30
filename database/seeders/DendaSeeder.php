<?php

namespace Database\Seeders;

use App\Models\Denda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denda::insert([
            [
                'nama' => 'Keterlambatan',
                'tarif' => 100000,
            ],
            [
                'nama' => 'Kerusakan',
                'tarif' => 500000,
            ],
        ]);
    }
}
