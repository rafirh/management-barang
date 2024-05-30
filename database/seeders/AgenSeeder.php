<?php

namespace Database\Seeders;

use App\Models\Agen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agen::insert([
            [
                'nama' => 'Agent Sumber Jaya',
                'user_id' => 3,
                'alamat' => 'Jl. MT Haryono No. 1 Kota Jakarta',
                'telepon' => '0812345678',
                'no_rekening' => '001234567890',
                'bank' => 'BCA',
                'atas_nama' => 'Sumber Jaya',
            ],
            [
                'nama' => 'Agen Joyo Makmur',
                'user_id' => 4,
                'alamat' => 'Jl. Soekarno Hatta No. 2 Kota Jakarta',
                'telepon' => '0812345678',
                'no_rekening' => '001234567890',
                'bank' => 'BRI',
                'atas_nama' => 'Joyo Makmur',
            ],
            [
                'nama' => 'Agen Sumber Rejeki',
                'user_id' => 5,
                'alamat' => 'Jl. Menteng No. 3 Kota Jakarta',
                'telepon' => '0812345678',
                'no_rekening' => '001234567890',
                'bank' => 'BNI',
                'atas_nama' => 'Sumber Rejeki',
            ],
        ]);
    }
}
