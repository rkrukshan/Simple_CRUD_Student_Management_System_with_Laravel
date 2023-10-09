<?php

namespace Database\Seeders;

use App\Models\House;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::factory()->count(5)->create();
        $house = House::factory()->count(3)
            ->has(Student::factory()->count(3), 'students')
            ->create();

    }
}
