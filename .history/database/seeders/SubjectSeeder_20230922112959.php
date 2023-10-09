<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject=Subject::factory()->count(2)->create();


        $student = Student::factory()
            ->count(3)
            ->for($house)
            ->create();
    }
}
