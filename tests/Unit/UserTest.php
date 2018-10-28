<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ["name" => "Mr. Jacinto Padberg"]);
    }


    public function testExample2()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Steve Smith',
        ]);
        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);
    }

    public function testExample3()
    {
        $user = User::find(44);
        $user-> delete();
        $users = User::all();
        $this->assertDatabaseMissing('users', ['id' => '44']);
    }
}