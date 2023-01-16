<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Psychological_test_profileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'DIQ' => '8000.,9000',
            'raw_score' => '8000.,9000',
            'percentile' => '8000.,9000',
            'VA' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'NA' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'VR_NA' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'AR' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'MR' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'SR' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'S' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'L' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'delay_avoidance'=> '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'work_methods' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'study_habits' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'teacher_approval' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'educ_acceptance' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'study_attitude' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'study_orientation' => '8000.,9000.,Dignissimos ut veniam perspiciatis eos qui excepturi',
            'reserve' => 1,
            'less_intelligent' => 0,
            'affected_by_feelings' => 0,
            'phlegmatic' => 0,
            'obedient' => 1,
            'disregards_rules' => 0,
            'shy' => 1,
            'tough_minded' => 0,
            'sober' => 0,
            'vigorous' => 0,
            'self_assured' => 1,
            'group_dependent' => 0,
            'casual' => 1,
            'relaxed' => 1
        ];
    }
}
