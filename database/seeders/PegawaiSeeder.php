<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::factory(10)->create()->each(function ($pegawai) {
            $user = $pegawai->user;

            $user->username = $pegawai->nip;

            $user->save();
        });

        $pegawai = Pegawai::factory()->create(['nama' => 'Pegawai', 'nip' => 'pegawai']);

        $user = $pegawai->user;

        $user->username = $pegawai->nip;

        $user->save();

        $user->syncRoles(['Admin']);
    }
}
