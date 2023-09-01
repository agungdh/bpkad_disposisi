<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bidang::create(['bidang' => 'sekretariat']);
        Bidang::create(['bidang' => 'anggaran']);
        Bidang::create(['bidang' => 'perbendaharaan']);
        Bidang::create(['bidang' => 'akuntansi']);
    }
}
