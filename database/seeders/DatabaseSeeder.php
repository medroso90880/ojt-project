<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Educational_bg;
use App\Models\Extra_curricular_act;
use App\Models\Family_bg;
use App\Models\Health_physical_dev;
use App\Models\Residence;
use App\Models\User;
use App\Models\Student_info;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $personalInfo = User::factory()->create();

        Student_info::factory()->create([
            'id' => $personalInfo->id
        ]);
        Family_bg::factory()->create([
            'id' => $personalInfo->id
        ]);
        Residence::factory()->create([
            'id' => $personalInfo->id
        ]);
        Health_physical_dev::factory()->create([
            'id' => $personalInfo->id
        ]);
        Educational_bg::factory()->create([
            'id' => $personalInfo->id
        ]);
        Extra_curricular_act::factory()->create([
            'id' => $personalInfo->id
        ]);
    }
}
