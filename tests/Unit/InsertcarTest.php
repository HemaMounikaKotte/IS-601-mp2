<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use App\User;

class InsertcarTest extends TestCase
{
    /**
     This test creates a new car with id,make and model features
     * and tests whether it is in the database
     */
    public function testcarinsert()
    {
        $Car = factory(\App\Car::class)->make();
        $this->assertDatabaseHas('cars', ["make" => "Ford"]);
    }
}
