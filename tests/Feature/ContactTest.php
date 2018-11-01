<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ContactTest extends TestCase
{
    /**
     This test tests whether the contact page returns HTTP'200' status or not
     */
    public function testContactPage()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/contact');

        $response->assertStatus(200);
    }
}
