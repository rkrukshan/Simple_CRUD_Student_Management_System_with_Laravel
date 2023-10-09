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
            'admision_number'=>$this->faker->unique()->randomNumber(),
            'first_name'=>$this->faker->word(),
            'last_name'=>$this->faker->word(),
            'gender'=>$this->faker->randomElements(['male', 'female']);,
            'address'=>$this->faker->word(),
            'dob'=>$this->faker->dateTime(),
            'house_id'=>$this->faker->randomNumber(),
            'grade_id'=>$this->faker->randomNumber(),
            'nic'=>$this->faker->unique()->word()
        ];
    }
}
