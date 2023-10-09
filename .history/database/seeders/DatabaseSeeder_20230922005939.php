<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        \App\Models\Student::factory(10)->create()->each(function ($student)
        {
            $student->subjects()->saveMany(\App\Models\Subject::factory()->make());

        });


        \App\Models\House::factory(10)->create()->each(function ($house)
        {
            $house->students()->saveMany(\App\Models\Student::factory()->make());

        });


        \App\Models\Subject::factory(10)->create()->each(function ($subject)
        {
            $subject->students()->saveMany(\App\Models\Student::factory()->make());

        });


        \App\Models\Grade::factory(10)->create()->each(function ($grade) {
            $grade->students()->saveMany(\App\Models\Student::factory(5)->make());

        });
    }
}
