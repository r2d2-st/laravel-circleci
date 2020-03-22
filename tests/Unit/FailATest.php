<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Str;
use Tests\TestCase;

class FailATest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function create()
    {
        $this->assertEquals(1,2);
    }
}
