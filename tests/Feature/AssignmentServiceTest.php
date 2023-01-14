<?php

namespace Tests\Feature;

use App\Services\AssignmentService;
use Database\Seeders\AssignmentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssignmentServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_by_name_starting()
    {
        // Run the DatabaseSeeder...
        $this->seed(AssignmentSeeder::class);

        $service = new AssignmentService;

        $searchFor = 'Testing assignment';

        $collection = $service->getByNameStarting($searchFor);

        $this->assertTrue($collection->contains('name', $searchFor));
    }
}
