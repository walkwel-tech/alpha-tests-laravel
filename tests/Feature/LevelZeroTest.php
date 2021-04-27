<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;


class LevelZeroTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;


    private $admins;
    private $customers;


    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->customers = User::role('customer')->get();
        $this->admins = User::role('admin')->get();
    }



    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_count()
    {
        $this->assertCount(40, $this->customers, 'There should be 40 users with role customers.');
        $this->assertLessThanOrEqual(10, $this->admins, 'There can only be 10 admin users.');
    }
}
