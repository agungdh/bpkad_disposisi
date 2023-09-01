<?php

namespace Database\Factories;

use App\Models\Eselon;
use App\Models\Jabatan;
use App\Models\Pangkat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pangkats = Pangkat::select('id')->pluck('id');
        $eselons = Eselon::select('id')->pluck('id');
        $jabatans = Jabatan::select('id')->pluck('id');

        $user = User::factory()->create();
        $user->assignRole('User');

        return [
            'user_id' => $user->id,
            'nama' => fake()->name(),
            'nip' => fake()->unique()->nik(),
            'pangkat_id' => $pangkats->random(),
            'eselon_id' => $eselons->random(),
            'jabatan_id' => $jabatans->random(),
        ];
    }
}
