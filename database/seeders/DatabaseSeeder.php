<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Counselor_note;
use Aoo\Models\Psychological_test_profile;
use App\Models\Educational_bg;
use App\Models\Extra_curricular_act;
use App\Models\Family_bg;
use App\Models\Social_bg;
use App\Models\Self_assessment;
use App\Models\Vocational_planning;
use App\Models\Health_physical_dev;
use App\Models\Psychological_test_profile as ModelsPsychological_test_profile;
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
        Social_bg::factory()->create([
            'id' => $personalInfo->id
        ]);
        Self_assessment::factory()->create([
            'id' => $personalInfo->id
        ]);
        Vocational_planning::factory()->create([
            'id' => $personalInfo->id
        ]);
        Counselor_note::factory()->create([
            'id' => $personalInfo->id
        ]);
        ModelsPsychological_test_profile::factory()->create([
            'id' => $personalInfo->id
        ]);
    }
}
