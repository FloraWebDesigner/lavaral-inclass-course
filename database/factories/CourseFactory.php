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
            'code' => fake() -> regexify('[A-Z]{4}[0-9]{3}'),
            'name' => fake() -> words(2, true),
            'description'=> fake() -> text(50),
            'tutor' => fake() -> name(),
        ];
    }
}
