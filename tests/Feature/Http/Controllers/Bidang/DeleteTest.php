<?php

namespace Tests\Feature\Http\Controllers\Bidang;

use App\Models\Bidang;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    public function test_delete(): void
    {
        Sanctum::actingAs(User::role('Admin')->inRandomOrder()->first());

        $response = $this->testDelete();

        $response->assertOk();
    }

    public function test_not_login_cant_access_delete(): void
    {
        $response = $this->testDelete();

        $response->assertUnauthorized();
    }

    public function test_not_admin_cant_access_delete(): void
    {
        Sanctum::actingAs(User::role('User')->inRandomOrder()->first());

        $response = $this->testDelete();

        $response->assertForbidden();
    }

    private function testDelete()
    {
        $bidang = Bidang::factory()->create();

        $response = $this->deleteJson('/api/bidang/'.$bidang->id);

        return $response;
    }
}
