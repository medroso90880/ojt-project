<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family_bg>
 */
class Family_bgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_father' => $this->faker->name($gender = 'male'),
            'name_mother' => $this->faker->name($gender = 'female'),
            'age_father' => 26,
            'age_mother' => 15,
            'educational_attain_father' => $this->faker->catchPhrase(),
            'educational_attain_mother' => $this->faker->catchPhrase(),
            'school_attended_father' => $this->faker->catchPhrase(),
            'school_attended_mother' => $this->faker->catchPhrase(),
            'occupation_father' => $this->faker->jobTitle(),
            'occupation_mother' => $this->faker->jobTitle(),
            'company_add_father' => $this->faker->company(),
            'company_add_mother' => $this->faker->company(),
            'contact_number_father' => $this->faker->phoneNumber(),
            'contact_number_mother' => $this->faker->phoneNumber(),
            'marital_status' => $this->faker->company(),
            'name_sibling' => $this->faker->name(),
            'age_sibling' => 2,
            'educational_attain_sibling' => $this->faker->catchPhrase(),
            'school_attended_sibling' => $this->faker->catchPhrase(),
            'occupation_sibling' => $this->faker->catchPhrase()
        ];
    }
}
