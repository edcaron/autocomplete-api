<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create(
            ['name' => 'Super cool Programming Course']
        );

        Course::create(
            ['name' => 'PHP Course']
        );

        Course::create(
            ['name' => 'Laravel Course']
        );


        Course::factory(50)->create();
    }
}
