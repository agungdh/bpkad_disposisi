<?php

namespace Tests\Feature\Http\Controllers\Eselon;

use App\Models\Eselon;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UpdateTest extends TestCase
{
    public function test_update(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testUpdate();

        $response->assertOK();
    }

    public function test_validation_failed_update(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testValidationFailedUpdate();

        $response->assertInvalid(['eselon']);
    }

    public function test_not_login_cant_access_update(): void
    {
        $response = $this->testValidationFailedUpdate();

        $response->assertUnauthorized();
    }

    public function test_not_admin_cant_access_update(): void
    {
        Sanctum::actingAs(User::role('User')->inRandomOrder()->first());

        $response = $this->testValidationFailedUpdate();

        $response->assertForbidden();
    }

    private function testValidationFailedUpdate()
    {
        $eselon = Eselon::factory()->create();

        $response = $this->putJson('/api/eselon/'.$eselon->id);

        return $response;
    }

    private function testUpdate()
    {
        $eselon = Eselon::factory()->create();

        $response = $this->putJson('/api/eselon/'.$eselon->id, [
            'eselon' => fake()->word(),
        ]);

        return $response;
    }
}
