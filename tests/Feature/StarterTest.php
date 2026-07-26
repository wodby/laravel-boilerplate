<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StarterTest extends TestCase
{
    /**
     * The starter landing page confirms that the application is running.
     */
    public function test_the_landing_page_is_available(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Your Laravel app is running.')
            ->assertDontSee('cloud.laravel.com');
    }

    /**
     * The health endpoint is intentionally independent of application dependencies.
     */
    public function test_the_health_endpoint_is_available(): void
    {
        $response = $this->get('/healthz');

        $response
            ->assertOk()
            ->assertExactJson(['status' => 'ok']);
    }
}
