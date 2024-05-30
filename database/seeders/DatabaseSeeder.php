<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(WarnaSeeder::class);
        $this->call(MerkMobilSeeder::class);
        $this->call(JenisMobilSeeder::class);
        $this->call(TransmisiSeeder::class);
        $this->call(CcSeeder::class);
        $this->call(TipeMobilSeeder::class);
        $this->call(AgenSeeder::class);
        $this->call(MobilSeeder::class);
        $this->call(StatusPembayaranSeeder::class);
        $this->call(StatusPengembalianSeeder::class);
        $this->call(MetodePembayaranSeeder::class);
        $this->call(DendaSeeder::class);
        $this->call(JaminanSeeder::class);
    }
}
