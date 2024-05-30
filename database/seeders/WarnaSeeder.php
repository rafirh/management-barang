<?php

namespace Database\Seeders;

use App\Models\Warna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // warna warna mobil
        Warna::insert([
            [
                'nama' => 'Hitam',
                'kode' => '#000000'
            ],
            [
                'nama' => 'Putih',
                'kode' => '#ffffff'
            ],
            [
                'nama' => 'Merah',
                'kode' => '#ff0000'
            ],
            [
                'nama' => 'Biru',
                'kode' => '#0000ff'
            ],
            [
                'nama' => 'Hijau',
                'kode' => '#00ff00'
            ],
            [
                'nama' => 'Kuning',
                'kode' => '#ffff00'
            ],
            [
                'nama' => 'Abu-abu',
                'kode' => '#808080'
            ],
            [
                'nama' => 'Coklat',
                'kode' => '#a52a2a'
            ],
            [
                'nama' => 'Navy',
                'kode' => '#000080'
            ],
            [
                'nama' => 'Olive',
                'kode' => '#808000'
            ],
            [
                'nama' => 'Oranye',
                'kode' => '#ffa500'
            ],
            [
                'nama' => 'Ungu',
                'kode' => '#800080'
            ],
            [
                'nama' => 'Perak',
                'kode' => '#c0c0c0'
            ],
            [
                'nama' => 'Teal',
                'kode' => '#008080'
            ],
            [
                'nama' => 'Fuchsia',
                'kode' => '#ff00ff'
            ],
            [
                'nama' => 'Lime',
                'kode' => '#00ff00'
            ],
            [
                'nama' => 'Maroon',
                'kode' => '#800000'
            ],
            [
                'nama' => 'Navy',
                'kode' => '#000080'
            ],
            [
                'nama' => 'Olive',
                'kode' => '#808000'
            ],
            [
                'nama' => 'Purple',
                'kode' => '#800080'
            ],
            [
                'nama' => 'Silver',
                'kode' => '#c0c0c0'
            ],
            [
                'nama' => 'Teal',
                'kode' => '#008080'
            ],
            [
                'nama' => 'Fuchsia',
                'kode' => '#ff00ff'
            ]
        ]);
    }
}
