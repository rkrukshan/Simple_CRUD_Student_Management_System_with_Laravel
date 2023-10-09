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
        Student::factory()->count(42)->create();
         Grade::factory()->create();
         $user = Grade::factory()->create();

$posts = Post::factory()
            ->count(3)
            ->for($user)
            ->create();

    }
}
