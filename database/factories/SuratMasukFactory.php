<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuratMasuk>
 */
class SuratMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::select('id')->pluck('id');

        return [
            'user_id' => $users->random(),
            'nomor_surat' => fake()->nik(),
            'tanggal_surat' => fake()->date(),
            'instansi_pengirim' => fake()->company(),
            'perihal' => fake()->realText(255),
            'pejabat_pengirim' => fake()->name(),
            'has_lampiran' => rand(0, 1),
        ];
    }
}
