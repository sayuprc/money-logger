<?php

declare(strict_types=1);

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that display user login screen
     *
     * @return void
     */
    public function testShowLoginScreen(): void
    {
        $this->withoutVite();

        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * Test that user authenticate
     *
     * @return void
     */
    public function testLogin(): void
    {
        $email = 'test@example.com';
        $password = 'password';

        $user = User::factory()->create([
            'user_id' => str_repeat('0', 36),
            'name' => 'hoge user',
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $response = $this->post('/login', [
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasNoErrors();
    }
}
