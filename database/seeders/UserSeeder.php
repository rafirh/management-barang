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
                'name' => 'Sevia Listiana',
                'email' => 'sevialistiana@gmail.com',
                'password' => bcrypt('123456'),
                'avatar_url' => null
            ]
        ]);
    }
}
