<?php

namespace Database\Seeders;

use App\Models\StatusPembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusPembayaran::insert([
            [
                'status_pembayaran' => 'Belum Bayar',
            ],
            [
                'status_pembayaran' => 'Sedang Dikonfirmasi',
            ],
            [
                'status_pembayaran' => 'Ditolak',
            ],
            [
                'status_pembayaran' => 'Belum Lunas',
            ],
            [
                'status_pembayaran' => 'Lunas',
            ],
        ]);
    }
}
