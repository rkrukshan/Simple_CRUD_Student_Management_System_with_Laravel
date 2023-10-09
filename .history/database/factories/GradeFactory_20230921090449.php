<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    protected $model=Grade::class;
    /**
     * Define the model's default state.
     *
     * @return array<'grade_name'=>$this->
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
