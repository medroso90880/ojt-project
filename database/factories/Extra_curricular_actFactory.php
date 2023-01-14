<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extra_curricular_act>
 */
class Extra_curricular_actFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position' => 'position1,position2,position3,position4,position5,position6',
            'org_club' => 'org/club1,org/club2,org/club3,org/club4,org/club5,org/club6',
            'activity' => 'activity1,activity2,activity3,activity4,activity5,activity6',
            'extent_activity' => 'extent_activity1,extent_activity2,extent_activity3,extent_activity4,extent_activity5,extent_activity6',
            'nature_1involvement' => 'nature_involvement1,nature_involvement2,nature_involvement3,nature_involvement4,nature_involvement5,nature_involvement6',
            'award' => 'award1,award2,award3,award4,award5,award6',
            'activity_competition' => 'activity_competition1,activity_competition2,activity_competition3,activity_competition4,activity_competition5,activity_competition6',
            'classification' => 'classification1,classification2,classification3,classification4,classification5,classification6',
            'title' => 'title1,title2,title3,title4,title5,title6',
            'sponsor' => 'sponsor1,sponsor2,sponsor3,sponsor4,sponsor5,sponsor6',
            'scope' => 'scope1,scope2,scope3,scope4,scope5,scope6',
            'nature_2involvement' => 'nature_involvement1,nature_involvement2,nature_involvement3,nature_involvement4,nature_involvement5,nature_involvement6'
        ];
    }
}
