<?php

namespace Tests\Feature;

use Tests\TestCase;

class MovieApiTest extends TestCase
{
    public function test_get_all_movies()
    {
        $response = $this->getJson('/api/movies');

        $response->assertStatus(200);
    }
}