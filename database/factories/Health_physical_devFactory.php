<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Health_physical_devFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'height' => '6.5ft',
            'weight' => '50kg',
            'sight' => 'No',
            'hearing' => 'yes',
            'speech' => 'yes',
            'general_health' => 'No',
            'question_a1' => 'No',
            'question_a2' => 'truma',
            'question_b1' => 'yes',
            'question_b2' => 'purple lungs'
        ];
    }
}
