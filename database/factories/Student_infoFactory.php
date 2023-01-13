<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_info>
 */
class Student_infoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'sex' => $this->faker->titleMale(),
            'contact_number' =>$this->faker->phoneNumber(),
            'religion' => $this->faker->word(),
            'email' => $this->faker->email(),
            'cell_number' => $this->faker->phoneNumber(),
            'age' => 18,
            'date_of_birth' => $this->faker->date(),
            'place_of_birth' => $this->faker->city(),
            'nationality' => $this->faker->sentence(),
            'permanent_add' => $this->faker->city()
        ];
    }
}
