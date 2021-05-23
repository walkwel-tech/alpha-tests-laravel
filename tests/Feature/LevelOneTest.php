<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LevelOneTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_that_site_works()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_standard_user_signature()
    {
        $user = new User([
            'name' => 'Developer Walkwel',
            'email' => 'Developer.Walkwel@waLKwel.IN'
        ]);

        $this->assertEquals($user->signature, 'Developer Walkwel <developer.walkwel@walkwel.in>', 'User signature to follow standard.');
    }


    public function test_user_signature()
    {
        $user = new User([
            'name' => 'Developer Walkwel',
            'email' => 'developer.walkwel@walkwel.in'
        ]);

        $user2 = new User([
            'name' => 'WALKWEL tech',
            'email' => 'Tech.Walkwel@waLKwel.in'
            ]);

        $this->assertEquals($user->signature, 'Developer Walkwel <developer.walkwel@walkwel.in>', 'User signature to follow standard.');
        $user->email = 'Developer.Walkwel@waLKwel.IN';
        $this->assertEquals($user->signature, 'Developer Walkwel <developer.walkwel@walkwel.in>', 'User signature to follow standard.');

        $this->assertEquals($user2->signature, 'Walkwel Tech <tech.walkwel@walkwel.in>', 'User signature to follow standard.');
    }
}
