<?php

namespace Tests\Unit;

    use Tests\TestCase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use App\User;

    class CountTest extends TestCase
    {
        /**
         * A basic test example.
         *
         * @return void
         */
        public function testUsercount()
        {
            $users= User::all();
            $users->count();
            $this->assertEquals(50, count($users), "Should return 50 users");
        }
    }
