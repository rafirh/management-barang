<?php

namespace Database\Seeders;

use App\Models\StatusPengembalian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusPengembalian::insert([
            [
                'status_pengembalian' => 'Belum Diambil',
            ],
            [
                'status_pengembalian' => 'Sedang Disewa',
            ],
            [
                'status_pengembalian' => 'Sudah Dikembalikan',
            ],
        ]);
    }
}
