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
     * A basic test example.
     *
     * @return void
     */
    public function testDeletecar()
    {
        $car = Car::find(51);
        //$car-> delete();
        DB::table('cars')->where('id', '>', 50)->delete();
        $cars = Car::all();
        $this->assertDatabaseMissing('cars', ['id' => '51']);
    }
}
