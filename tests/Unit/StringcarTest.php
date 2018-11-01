<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class StringcarTest extends TestCase
{
    /**
     This test tests whether the model of the car is a string or not (ex: Ritchie LLC )
     * by first loading all cars and then finding any one car, like 22 id car and then asserting
     */
    public function testcarstring()
    {
        $car = Car::all();
        $car = Car::find(22);
        $this->assertInternalType('string', $car->model);
    }
}
