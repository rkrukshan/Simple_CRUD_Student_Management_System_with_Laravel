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
            'admision_number'=>$this->faker->numerify(),
            'first_name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'gender'=>$this->faker->name(),
            'address'=>$this->faker->name(),
            'dob'=>$this->faker->dateTime(),
            'house_id'=>$this->faker->numerify(),
            'grade_id'=>$this->faker->numerify(),
            'nic'=>$this->faker->name()
        ];
    }
}
