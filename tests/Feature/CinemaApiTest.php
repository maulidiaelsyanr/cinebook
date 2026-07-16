<?php

namespace Tests\Feature;

use Tests\TestCase;

class CinemaApiTest extends TestCase
{
    public function test_get_all_cinemas()
    {
        $response = $this->getJson('/api/cinemas');

        $response->assertStatus(200);
    }
}