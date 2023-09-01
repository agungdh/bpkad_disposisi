<?php

namespace Database\Factories;

use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Honorer>
 */
class HonorerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jabatans = Jabatan::select('id')->pluck('id');

        $user = User::factory()->create();
        $user->assignRole('User');

        return [
            'user_id' => $user->id,
            'nama' => fake()->name(),
            'nik' => fake()->unique()->nik(),
            'jabatan_id' => $jabatans->random(),
        ];
    }
}
