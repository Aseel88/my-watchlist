<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\Generator\Parameter;
use Illuminate\Testing\Fluent\AssertableJson;
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

    public function test_fluent_json()
    {
        $response = $this->json('GET', '/movies');

        $response
            ->assertJson(
                fn (AssertableJson $json) =>
                $json->where('id', 1)
                    ->where('name', 'Godzilla')
                    ->etc()
            );
    }

    // public function testIndexMovie()
    // {
    // test_making_an_api_request

    // $response = $this->getJson('/api/movies');

    // $response
    //     ->assertStatus(201)
    //     ->assertJson([
    //         'created' => true,
    //     ]);
    // $this->assertTrue($response['created']);
    // $response = $this->get(route('index'));

    // $response->assertJson([
    //     'popularMovies' => $this->popularMovies,
    //     'genres' => $this->genres,
    //     // 'id' => $this->id
    // ]);
    // }
}
// [Route: index] [URI: movies/{id}] [Missing parameter: id].
