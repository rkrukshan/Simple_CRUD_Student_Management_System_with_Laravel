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


        \App\Models\Student::factory(10)->create()->each(function ($student) {
            $student->subjects()->saveMany(\App\Models\Grade::factory(5)->make());
        });


        \App\Models\House::factory(10)->create()->each(function ($house) {
            $house->students()->saveMany(\App\Models\Grade::factory(5)->make());
        });


        \App\Models\Subject::factory(10)->create()->each(function ($subject) {
            $subject->subjects()->saveMany(\App\Models\Grade::factory(5)->make());
        });
    }
}
