<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class IntegercarTest extends TestCase
{
    /**
    This test tests whether the year of the car is an integer or not
     * by first loading all cars and then finding any one car, like 22 id car and then asserting
     */
    public function testCaryeartype()
    {
        $car = Car::all();
        $car = Car::find(22);
        $this->assertInternalType('numeric',$car->year);
    }
}
