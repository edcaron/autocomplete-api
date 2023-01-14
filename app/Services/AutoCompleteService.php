<?php

namespace App\Services;

class AutoCompleteService {

    public function getSuggestions(string $search, int $limit = 10): array
    {
        $words = [];

        $courses = (new CourseService)->getByNameStarting($search, $limit);
        if ($courses) {
            $words = [...$words, ...$courses->pluck('name')->toArray()];
        }

        $assignments = (new AssignmentService)->getByNameStarting($search, $limit);
        if ($assignments) {
            $words = [...$words, ...$assignments->pluck('name')->toArray()];
        }

        sort($words);

        return array_slice($words, 0, $limit);
    }
}
