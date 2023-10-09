<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        House::factory()->count(2)->create();
        $hou = Grade::factory()->count(3)
            ->has(Student::factory()->count(3), 'students')
            ->create();

    }
}
