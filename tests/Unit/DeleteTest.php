<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     Deleting the users with id above 50 because every time we run phpunit ,
     * testuserinsert test runs and a new id is created which gives incorrect count
     */
    public function testDeleteuser()
    {
        //$user = User::find(51);
        //$user-> delete();
        DB::table('users')->where('id', '>', 50)->delete();
        //$users = User::all();
        $this->assertDatabaseMissing('users', ['id' => '51']);
    }
}
