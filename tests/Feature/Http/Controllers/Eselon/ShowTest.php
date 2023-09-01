<?php

namespace Tests\Feature\Http\Controllers\Eselon;

use App\Models\Eselon;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ShowTest extends TestCase
{
    public function test_show(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testShow();

        $response->assertOk();
    }

    public function test_not_login_cant_access_show(): void
    {
        $response = $this->testShow();

        $response->assertUnauthorized();
    }

    public function test_not_admin_cant_access_show(): void
    {
        Sanctum::actingAs(User::role('User')->inRandomOrder()->first());

        $response = $this->testShow();

        $response->assertForbidden();
    }

    private function testShow()
    {
        $eselon = Eselon::factory()->create();

        $response = $this->getJson('/api/eselon/'.$eselon->id);

        return $response;
    }
}
