<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
'admision_number'=>$this->faker->unique()->randomNumber(),
            'first_name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'gender'=>$this->faker->randomElements(['male', 'female'])[0],
            'address'=>$this->faker->name(),
            'dob'=>$this->faker->dateTime(),
            'house_id'=>$this->faker->randomDigit(),
            'grade_id'=>$this->faker->randomDigit(),
            'nic'=>$this->faker->unique()->name()
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     GradeSeeder::class
        // ]);
        // $this->call([
        //     StudentSeeder::class
        // ]);
        // $this->call([
        //     SubjectSeeder::class
        // ]);
        // $this->call([
        //     HouseSeeder::class
        // ]);


        Student::factory(10)->create()->each(function ($student) {
            $student->subjects()->saveMany(\App\Models\Subject::factory(5)->make());

        });


        House::factory(10)->create()->each(function ($house) {
            $house->students()->saveMany(\App\Models\Student::factory(5)->make());

        });


        Subject::factory(10)->create()->each(function ($subject) {
            $subject->students()->saveMany(\App\Models\Student::factory(5)->make());

        });


        Grade::factory(10)->create()->each(function ($grade) {
            $grade->students()->saveMany(\App\Models\Student::factory(5)->make());

        });
    }
}
