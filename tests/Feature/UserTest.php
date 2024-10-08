<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->post('/login', [
            'email' => 'super.admin@test.com',
            'password' => '12345678',
        ]);
        $response = $this->get('/');

        $response->assertStatus(302);
        $this->assertAuthenticated();
    }
}
