<?php

namespace App\Services;

use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;

class CourseService
{
    public function getByNameStarting(string $name, int $limit = 10): Collection
    {
        return Course::where('name', 'like', "{$name}%")
            ->take($limit)
            ->orderBy('name', 'asc')
            ->get();
    }
}
