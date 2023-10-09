<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    
    {
        Grade::create([
            "grade_group"=>"10",
            "grade_name"=>"10A",
            "grade_order"=>1
        ]);
    }
}
