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
            'admision_number'=>$this->faker->randomDigit(),
            'first_name'=>$this->faker->randomDigit(),
            'last_name'=>$this->faker->randomDigit(),
            'gender'=>$this->faker->randomDigit(),
            'address'=>$this->faker->randomDigit(),
            'dob'=>$this->faker->randomDigit(),
            'house_id'=>$this->faker->randomDigit(),
            'grade_id'=>$this->faker->randomDigit(),
            'nic'=>$this->faker->randomDigit(),
            'nic'=>$this->faker->randomDigit(),
            'nic'=>$this->faker->randomDigit(),


        ];
    }
}
