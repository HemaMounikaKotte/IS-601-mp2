<?php

namespace Tests\Unit;

    use Tests\TestCase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use App\User;

    class CountTest extends TestCase
    {
        /**
         This test counts the number of users in the database
         */
        public function testUsercount()
        {
            $users= User::all();
            $users->count();
            $this->assertEquals(52, count($users), "Should return 50 users");
        }
    }
