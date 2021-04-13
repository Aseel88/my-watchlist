<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\Generator\Parameter;
use Tests\TestCase;

class MovieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMovie()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testIndexMovie()
    {
        $response = $this->get(route('index'));

        $response->assertJson([
            'popularMovies' => $this->popularMovies,
            'genres' => $this->genres,
            // 'id' => $this->id
        ]);
    }
}
// [Route: index] [URI: movies/{id}] [Missing parameter: id].
