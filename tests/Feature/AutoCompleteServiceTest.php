<?php

namespace Tests\Feature;

use App\Services\AutoCompleteService;
use Database\Seeders\CourseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AutoCompleteServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_suggestions_assignment()
    {
        $this->seed();

        $service = new AutoCompleteService;

        $searchFor = 'Laravel assignment';

        $arraySuggestions = $service->getSuggestions($searchFor);

        $this->assertContainsEquals($searchFor, $arraySuggestions);
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_suggestions_course()
    {
        $this->seed();

        $service = new AutoCompleteService;

        $searchFor = 'Laravel Course';

        $arraySuggestions = $service->getSuggestions($searchFor);

        $this->assertContainsEquals($searchFor, $arraySuggestions);
    }
}
