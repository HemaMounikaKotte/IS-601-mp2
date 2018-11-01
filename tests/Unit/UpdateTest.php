<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateTest extends TestCase
{
    /**
     This test loads all the users and finds a particular user and
     * updates it's name with steve smith
     * and then asserts whether the database contains the name or not
     */
    public function testUserupdate()
    {
        //$users = User::all();
        $user = User::find(5);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);

        //$user = factory(\App\User::class)->create([
           // 'name' => 'Steve Smith',
       // ]);

    }

}
