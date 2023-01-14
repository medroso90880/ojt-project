<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Educational_bgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'school_last_attended' => $this->faker->catchPhrase(),
            'public_or_private' => 'private',
            'school_address' => $this->faker->city(),
            'coed_or_exclusive' => 'exclusive',
            'honors_or_awards_received' => 'with very high honors',
            'secretarian_or_nonsect' => 'secretarian',
            'grade_level' => '7,8,9,10,11,12',
            'section' =>'appolo,renco,alo,gerorge,ala,alalal',
            'scholarship_status' => 'secret, sec, secr, secrett, secrete,secsec',
            'academic_status' => 'secret, sec, secr, secrett, secrete,secces',
            'subject_like_best' => 'math,math1,mat2h,3math,4math,5math',
            'subject_like_least' => 'english,1english,2english,3english,4english,5english',
            'subject_find_difficult' => 'science,1science,2science,3science,4science,5science',
            'subject_learned_most' => 'programming,1programming,2programming,3programming,4programming,5programming',
            'subject_learned_least' => 'english,1english,2english,3english,4english,5english',
            'subject_taught_best' => 'science,1science,2science,3science,4science,5science',
            'subject_taught_worst' =>  'programming,1programming,2programming,3programming,4programming,5programming',
        ];
    }
}
