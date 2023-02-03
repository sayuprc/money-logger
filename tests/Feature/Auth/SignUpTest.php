<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SignUpTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that display user sign up screen
     *
     * @return void
     */
    public function testShowSignUp(): void
    {
        $response = $this->get('/sign-up');

        $response->assertStatus(200);
    }

    /**
     * Test that save user
     *
     * @return void
     */
    public function testSignUp(): void
    {
        $response = $this->post(
            '/sign-up',
            [
                'name' => 'hoge fuga',
                'email' => 'hoge@example.com',
                'password' => 'user password',
            ]
        );

        $response->assertStatus(200);
    }
}
