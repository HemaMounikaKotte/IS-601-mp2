<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\User;

class AboutTest extends TestCase
{
    /**
     This test tests whether the about page created returns HTTP'200' status or not
     */
    public function testAboutPage()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/about');

        $response->assertStatus(200);
    }
}
