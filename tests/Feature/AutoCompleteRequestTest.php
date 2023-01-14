<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AutoCompleteRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_suggestions()
    {
        $this->seed();

        $response = $this->get('/api/autocomplete?search=Super cool');

        $response->assertStatus(200);
        $response->assertJsonStructure(['data' => []]);
    }
}
