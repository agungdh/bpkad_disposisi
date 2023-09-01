<?php

namespace Tests\Feature\Http\Controllers\Bidang;

use App\Models\Bidang;
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
        $bidang = Bidang::factory()->create();

        $response = $this->getJson('/api/bidang/'.$bidang->id);

        return $response;
    }
}
