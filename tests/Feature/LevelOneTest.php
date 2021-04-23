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

    public function test_standard_user_signature ()
    {
        $user = new User([
            'name' => 'Lakshay Verma',
            'email' => 'LaKshay.VerMa@waLKwel.IN'
        ]);

        $this->assertEquals($user->signature, 'Lakshay Verma <lakshay.verma@walkwel.in>', 'User signature to follow standard.');
    }


    public function test_user_signature ()
    {
        $user = new User([
            'name' => 'Lakshay Verma',
            'email' => 'lakshay.verma@walkwel.in'
        ]);

        $this->assertEquals($user->signature, 'Lakshay Verma <lakshay.verma@walkwel.in>', 'User signature to follow standard.');

        $user->email = 'LaKshay.VerMa@waLKwel.IN';
        $this->assertEquals($user->signature, 'Lakshay Verma <lakshay.verma@walkwel.in>', 'User signature to follow standard.');
    }
}
