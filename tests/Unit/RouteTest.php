<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        // $this->assertTrue(true);
        $this->get('/administrators')->assertStatus(200);
        $this->get('/customers')->assertStatus(200);
        $this->get('/mitras')->assertStatus(200);
        $this->get('/reports')->assertStatus(200);
    }
}
