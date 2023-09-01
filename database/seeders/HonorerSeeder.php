<?php

namespace Database\Seeders;

use App\Models\Honorer;
use Illuminate\Database\Seeder;

class HonorerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Honorer::factory(5)->create()->each(function ($honorer) {
            $user = $honorer->user;

            $user->username = $honorer->nik;

            $user->save();
        });

        $honorer = Honorer::factory()->create(['nama' => 'Honorer', 'nik' => 'honorer']);

        $user = $honorer->user;

        $user->username = $honorer->nik;

        $user->save();

        $user->syncRoles(['Admin']);

    }
}
