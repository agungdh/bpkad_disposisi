<?php

namespace Database\Seeders;

use App\Models\Eselon;
use Illuminate\Database\Seeder;

class EselonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 4; $i++) {
            Eselon::create(['eselon' => $i]);
        }
    }
}
