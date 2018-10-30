<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdatecarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdatecar()
    {
        $user = factory(\App\Car::class)->create([
            'year' => '2000',
        ]);
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }
}
