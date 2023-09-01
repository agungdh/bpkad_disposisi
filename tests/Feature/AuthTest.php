<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_failed_login(): void
    {
        $response = $this->postJson('/api/login', [
            'username' => 'username salah',
            'password' => 'password salah',
        ]);

        $response->assertInvalid(['username']);
    }

    public function test_validation(): void
    {
        $response = $this->postJson('/api/login');

        $response->assertInvalid(['username', 'password']);
    }

    public function test_admin_success_login(): void
    {
        $response = $this->postJson('/api/login', [
            'username' => 'honorer',
            'password' => 'password',
        ]);

        $response->assertOk();

        $response = $this->postJson('/api/login', [
            'username' => 'pegawai',
            'password' => 'password',
        ]);

        $response->assertOk();
    }

    public function test_user_success_login(): void
    {
        $user = User::role('User')->inRandomOrder()->first();

        $response = $this->postJson('/api/login', [
            'username' => $user->username,
            'password' => 'password',
        ]);

        $response->assertOk();
    }

    public function test_get_user(): void
    {
        Sanctum::actingAs(User::inRandomOrder()->first());

        $response = $this->getJson('/api/user');

        $response->assertOk();
    }

    public function test_unauthenticated_request_cant_get_user(): void
    {
        $response = $this->getJson('/api/user');

        $response->assertUnauthorized();
    }

    public function test_logout(): void
    {
        Sanctum::actingAs(User::inRandomOrder()->first());

        $response = $this->getJson('/api/logout');

        $response->assertOk();
    }
}
