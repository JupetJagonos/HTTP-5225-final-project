<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = \App\Models\Course::class; // Ensure this line exists

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->words(3, true), // Example: "Introduction to Laravel"
            'course_index' => strtoupper($this->faker->bothify('???###')), // Example: "ABC123"
            'course_description' => $this->faker->paragraph(), // Fake course description
            'faculty_id' => \App\Models\Faculty::query()->inRandomOrder()->value('id') // Random faculty assignment
        ];
    }
}