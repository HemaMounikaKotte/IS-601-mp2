<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class InsertUserTest extends TestCase
{
    /**
     This creates a new user and tests whether the user created is in the database or not
     */
    public function testUserinsert()
    {
        $user = factory(\App\User::class)->make();
        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);
    }
}