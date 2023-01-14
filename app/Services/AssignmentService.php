<?php

namespace App\Services;

use App\Models\Assignment;
use Illuminate\Database\Eloquent\Collection;

class AssignmentService
{
    public function getByNameStarting(string $name, int $limit = 10): Collection
    {
        return Assignment::where('name', 'like', "{$name}%")
            ->take($limit)
            ->get();
    }
}
