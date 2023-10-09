<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    // protected $model=Grade::class;
    Grade::factory()->count(5)->create();

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'grade_name'=>$this->faker->randomDigit(),        ];
             'grade_order'=>$this->faker->randomDigit(),
             'grade_group'=>$this->faker->word(),     ];
    }
}
