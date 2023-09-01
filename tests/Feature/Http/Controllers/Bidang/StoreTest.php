<?php

namespace Tests\Feature\Http\Controllers\Bidang;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class StoreTest extends TestCase
{
    public function test_store(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testStore();

        $response->assertCreated();
    }

    public function test_validation_failed_store(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testValidationFailedStore();

        $response->assertInvalid(['bidang']);
    }

    public function test_not_login_cant_access_store(): void
    {
        $response = $this->testValidationFailedStore();

        $response->assertUnauthorized();
    }

    public function test_not_admin_cant_access_store(): void
    {
        Sanctum::actingAs(User::role('User')->inRandomOrder()->first());

        $response = $this->testValidationFailedStore();

        $response->assertForbidden();
    }

    private function testValidationFailedStore()
    {
        $response = $this->postJson('/api/bidang');

        return $response;
    }

    private function testStore()
    {
        $response = $this->postJson('/api/bidang', [
            'bidang' => fake()->word(),
        ]);

        return $response;
    }
}
