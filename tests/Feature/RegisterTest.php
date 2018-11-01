<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
    This test tests whether the Register page created returns HTTP'200' status or not
     */
    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
