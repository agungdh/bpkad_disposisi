<?php

namespace Database\Seeders;

use App\Models\Pangkat;
use Illuminate\Database\Seeder;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pangkat::create(['pangkat' => 'I.a Juru Muda']);
        Pangkat::create(['pangkat' => 'I.b Juru Muda Tingkat I']);
        Pangkat::create(['pangkat' => 'I.c Juru']);
        Pangkat::create(['pangkat' => 'I.d Juru Tingkat I']);
        Pangkat::create(['pangkat' => 'II.a Pengatur Muda']);
        Pangkat::create(['pangkat' => 'II.b Pengatur Muda Tingkat I']);
        Pangkat::create(['pangkat' => 'II.c Pengatur']);
        Pangkat::create(['pangkat' => 'II.d Pengatur Tingkat I']);
        Pangkat::create(['pangkat' => 'III.a Penata Muda']);
        Pangkat::create(['pangkat' => 'III.b Penata Muda Tingkat I']);
        Pangkat::create(['pangkat' => 'III.c Penata']);
        Pangkat::create(['pangkat' => 'III.d Penata Tingkat I']);
        Pangkat::create(['pangkat' => 'IV.a Pembina']);
        Pangkat::create(['pangkat' => 'IV.b Pembina Tingkat I']);
        Pangkat::create(['pangkat' => 'IV.c Pembina Utama Muda']);
        Pangkat::create(['pangkat' => 'IV.d Pembina Utama Madya']);
        Pangkat::create(['pangkat' => 'IV.e Pembina Utama']);
    }
}
