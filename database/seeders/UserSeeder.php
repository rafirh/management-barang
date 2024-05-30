<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'nama' => 'Administator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Raya Cikarang',
                'no_hp' => '081234567890',
                'role' => 'administrator',
            ],
            [
                'nama' => 'John Doe',
                'email' => 'customer@gmail.com',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Mawar',
                'no_hp' => '08123456789',
                'role' => 'customer',
            ],
            [
                'nama' => 'Agent Sumber Jaya',
                'email' => 'sumberjaya@gmail.com',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Melati',
                'no_hp' => '0812345678',
                'role' => 'agent',
            ],
            [
                'nama' => 'Agen Joyo Makmur',
                'email' => 'joyomakmur@gmail.com',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Melati',
                'no_hp' => '0812345678',
                'role' => 'agent',
            ],
            [
                'nama' => 'Agen Sumber Rejeki',
                'email' => 'sumberrejeki@gmail.com',
                'password' => bcrypt('123456'),
                'alamat' => 'Jl. Melati',
                'no_hp' => '0812345678',
                'role' => 'agent',
            ],
        ]);
    }
}
