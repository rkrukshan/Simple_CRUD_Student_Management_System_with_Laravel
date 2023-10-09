<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_name'=>$this->faker->unique()->randomElement([Hindu Culture]),
            'subject_index'=>$this->faker->randomDigit(),
            'subject_order'=>$this->faker->randomDigit()

        ];
    }
}
