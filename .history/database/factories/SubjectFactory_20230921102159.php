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
            'subject_name'=>$this->faker->word()->uniq,
            'subject_name'=>$this->faker->randomDigit(),
            'subject_name'=>$this->faker->randomDigit(),

        ];
    }
}
