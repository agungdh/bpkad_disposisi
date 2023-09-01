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
        $this->call([
            RoleSeeder::class,
            EselonSeeder::class,
            PangkatSeeder::class,
            BidangSeeder::class,
            JabatanSeeder::class,
            PegawaiSeeder::class,
            HonorerSeeder::class,
            SuratMasukSeeder::class,
        ]);
    }
}
