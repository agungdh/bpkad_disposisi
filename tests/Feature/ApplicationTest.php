<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApplicationTest extends TestCase
{
    public function test_root_route_path_redirect_to_api_route_path(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/api');
    }

    public function test_api_route_path(): void
    {
        $response = $this->get('/api');

        $response->assertOk();
    }
}
