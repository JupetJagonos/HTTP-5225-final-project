<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Create sample courses
        Course::create([
            'course_name' => 'Introduction to Laravel',
            'course_index' => 'LRN101',
            'course_description' => 'Learn the basics of Laravel, a popular PHP framework.',
            'faculty_id' => 1  // Specify a valid faculty_id here
        ]);

        Course::create([
            'course_name' => 'Advanced PHP Programming',
            'course_index' => 'PHP202',
            'course_description' => 'Deep dive into PHP programming with advanced topics.',
            'faculty_id' => 2  // Specify a valid faculty_id here
        ]);

        Course::create([
            'course_name' => 'Database Management with MySQL',
            'course_index' => 'DBM303',
            'course_description' => 'Understand how to manage databases using MySQL.',
            'faculty_id' => 1  // Specify a valid faculty_id here
        ]);

        Course::create([
            'course_name' => 'Frontend Development with React',
            'course_index' => 'FRD404',
            'course_description' => 'Learn to build interactive web applications using React.',
            'faculty_id' => 3 // Specify a valid faculty_id here
        ]);
    }
}