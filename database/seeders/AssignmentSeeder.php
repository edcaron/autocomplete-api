<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assignment::create(
            ['name' => 'Super cool Assignment for today']
        );

        Assignment::create(
            ['name' => 'A cool Assignment due tomorrow']
        );

        Assignment::create(
            ['name' => 'Testing assignment']
        );

        Assignment::create(
            ['name' => 'Laravel assignment']
        );

        Assignment::factory(50)->create();
    }
}
