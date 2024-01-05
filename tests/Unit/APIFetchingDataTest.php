<?php

namespace Tests\Unit;

use Tests\TestCase;

class APIFetchingDataTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_fetch_date_movies_error(): void
    {
        $path = 'https://api.themoviedb.org/3/discover/movie?api_key=db456e2314b333719aaf25c1c9eb11f';
        $response = $this->json('GET',$path);
        $response->assertStatus(404);
    }

    public function test_fetch_date_tv_error(): void
    {
        $path = 'https://api.themoviedb.org/3/discover/tv?api_key=db456e2314b333719aaf25c1c9eb11f';
        $response = $this->json('GET',$path);
        $response->assertStatus(404);
    }

    public function test_fetch_date_movies_done(): void
    {
        $path = 'https://api.themoviedb.org/3/discover/movie?api_key=db456e2314b333719aaf25c1c9eb11fc';
        $response = $this->json('GET',$path);
        $response->assertStatus(200);
    }

    public function test_fetch_date_tv_done(): void
    {
        $path = 'https://api.themoviedb.org/3/discover/tv?api_key=db456e2314b333719aaf25c1c9eb11fc';
        $response = $this->json('GET',$path);
        $response->assertStatus(200);
    }
}
