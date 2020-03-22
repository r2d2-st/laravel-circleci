<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Str;
use Tests\TestCase;

class CreateSomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function create()
    {

        foreach (range(0,10) as $i) {
            $user = User::create([
                'name' => "user_{$i}",
                'email' => "user_email_{$i}@am.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            $this->assertInstanceOf(User::class, $user);
        }
    }
}
