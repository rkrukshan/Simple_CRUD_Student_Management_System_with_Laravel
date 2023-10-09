<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Grade::create([
        //     "grade_group"=>"10",
        //     "grade_name"=>"10A",
        //     "grade_order"=>1
        // ]);
        // $student=Student::factory()->create();
        // $grade=Grade::factory()->create()->count(55);
        $posts = Post::factory()
            ->count(3)
            ->for(User::factory()->state([
                'name' => 'Jessica Archer',
            ]))
            ->create();

    }
}
