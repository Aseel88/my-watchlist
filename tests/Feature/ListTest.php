<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewList()
    {
        $response = $this->get('/your-list');

        $response->assertStatus(200);
    }
}
