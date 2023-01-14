<?php

namespace Tests\Feature;

use App\Services\CourseService;
use Database\Seeders\CourseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_by_name_starting()
    {
        $this->seed(CourseSeeder::class);

        $service = new CourseService;

        $searchFor = 'PHP Course';

        $collection = $service->getByNameStarting($searchFor);

        $this->assertTrue($collection->contains('name', $searchFor));
    }
}
