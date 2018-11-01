<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CountcarTest extends TestCase
{
    /**
     This test counts the number of cars in the database which is equal to 50
     */
    public function testcarcount()
    {
        $cars= car::all();
        $cars->count();
        $this->assertEquals(50, count($cars), "Should return 50 cars");
    }
}
