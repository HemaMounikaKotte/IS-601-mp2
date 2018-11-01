<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeletecarTest extends TestCase
{
    /**
     This test deletes the cars whose id numbers are more than 50 ,
     * instead of finding a particular car and deleting it.
     * if that is the case we can just use the syntax in the cooment section below
     */
    public function testDeletecar()
    {
       // $car = Car::find(51);
        //$car-> delete();
        DB::table('cars')->where('id', '>', 50)->delete();
        $cars = Car::all();
        $this->assertDatabaseMissing('cars', ['id' => '51']);
    }

}
