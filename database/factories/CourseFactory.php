<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'courseID' => fake() -> regexify('[A-Z]{4}[0-9]{3}'),
            'courseName' => fake() -> words(2, true),
            'description'=> fake() -> text(50),
            'faculty_id' => fake() -> name(),
        ];
    }
}
