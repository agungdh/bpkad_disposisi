<?php

namespace Tests\Feature\Http\Controllers\Eselon;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_index(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testIndex();

        $response->assertOk();
    }

    public function test_not_login_cant_access_index(): void
    {
        $response = $this->testIndex();

        $response->assertUnauthorized();
    }

    public function test_not_admin_cant_access_index(): void
    {
        Sanctum::actingAs(User::role('User')->inRandomOrder()->first());

        $response = $this->testIndex();

        $response->assertForbidden();
    }

    private function testIndex()
    {
        $response = $this->getJson('/api/eselon');

        return $response;
    }
}
