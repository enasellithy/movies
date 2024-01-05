<?php

namespace Tests\Unit;

use Kreait\Firebase\Factory;
use Tests\TestCase;

class APIFetchingDataFireabseTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_fetch_movies_firebase(): void
    {
        $response = $this->json('GET','/api/get_data_movies');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'current_page',
            'data',
            'first_page_url',
        ]);
    }

    public function test_fetch_tv_firebase(): void
    {
        $response = $this->json('GET','/api/get_data_tv');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'current_page',
            'data',
            'first_page_url',
        ]);
    }

    public function test_fetch_data_firebase(): void
    {
        $response = $this->json('GET','/api/get_data_all');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'current_page',
            'data',
            'first_page_url',
        ]);
    }
}
