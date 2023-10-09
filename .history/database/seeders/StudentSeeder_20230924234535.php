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

        $students=Student::factory()->count(1);//create 1 data to student
        $subject = Subject::factory()->count(3)->has($students, 'students')->create();
    }
}
