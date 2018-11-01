<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdatecarTest extends TestCase
{
    /**
     This test finds a car with its ID and then updates the car's year to 2000
     */
    public function testUpdatecar()
    {
        $cars = Car::all();
        $car = Car::find(5);
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);

        //$user = factory(\App\Car::class)->create([
           // 'year' => '2000',
       // ]);

    }
}
