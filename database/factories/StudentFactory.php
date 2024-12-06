<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // three fillable data from Model
            // call fake library, get the names -> firstname()
            'fname' => fake() -> firstname(),
            'lname' => fake() -> lastname(),
            'email' => fake() -> unique() -> safeEmail(),
            // 'email' => fake() -> safeEmail(),

        ];
    }
}
