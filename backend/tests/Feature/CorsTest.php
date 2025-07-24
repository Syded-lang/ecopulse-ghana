<?php

namespace Tests\Feature;

use Tests\TestCase;

class CorsTest extends TestCase
{
    public function test_api_endpoint_has_cors_headers()
    {
        $response = $this->withHeaders([
            'Origin' => 'http://localhost:5173',
        ])->get('/api/hello');

        $response->assertStatus(200);
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertJson(['message' => 'Hello from Laravel API!']);
    }

    public function test_cors_preflight_request_works()
    {
        $response = $this->call('OPTIONS', '/api/test', [], [], [], [
            'HTTP_ORIGIN' => 'http://localhost:5173',
            'HTTP_ACCESS_CONTROL_REQUEST_METHOD' => 'POST',
            'HTTP_ACCESS_CONTROL_REQUEST_HEADERS' => 'Content-Type,Authorization'
        ]);

        $response->assertStatus(204);
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertHeader('Access-Control-Allow-Methods', 'POST');
        // Note: Laravel normalizes header names to lowercase
        $response->assertHeader('Access-Control-Allow-Headers', 'Content-Type,Authorization');
    }

    public function test_post_request_with_cors()
    {
        $response = $this->withHeaders([
            'Origin' => 'http://localhost:5173',
            'Content-Type' => 'application/json',
        ])->postJson('/api/test', ['test' => 'data']);

        $response->assertStatus(200);
        $response->assertHeader('Access-Control-Allow-Origin', '*');
        $response->assertJson([
            'message' => 'POST request successful!',
            'data' => ['test' => 'data']
        ]);
    }
}