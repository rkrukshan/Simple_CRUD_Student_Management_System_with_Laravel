<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Grade;

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

$posts = Student::factory()
            ->count(3)
            ->for($grade)
            ->create();

    }
}
