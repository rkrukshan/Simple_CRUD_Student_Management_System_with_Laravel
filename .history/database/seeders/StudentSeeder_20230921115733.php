<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grade=Grade::factory()->create();
        $stu=Student::factory()->create()->for($grade)->count(55);


        $grade = Post::factory()
            ->count(3)
            ->for($stu)
            ->create();

    }
}
