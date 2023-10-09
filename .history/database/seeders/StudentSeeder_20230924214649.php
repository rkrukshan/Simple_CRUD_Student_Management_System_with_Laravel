<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Grade;
use App\Models\House;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grade = Grade::factory()->create();

        $student = Student::factory()->count(3)->for($grade)->create();


            $house = House::factory()->create();

        $student = Student::factory()
            ->count(3)
            ->for($house)
            ->create();


        //     $subject = Subject::factory()->create();

        // $student = Student::factory()
        //     ->count(3)
        //     ->for($subject)
        //     ->create();


        $subject = Subject::factory()->count(3)
            ->has(Student::factory()->count(1), 'students')
            ->create();
    }
}
