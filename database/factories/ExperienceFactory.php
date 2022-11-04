<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description'=>$this->faker->paragraphs( 4 , 'true'),
            'current'=>$current = $this->faker->boolean( ),
            'started_at'=>now()->subMonths($this->faker->nuberBetween( 3 , 12 )), 
            'finished_at'=>$current ? null : now()->subMonths($this->faker->nuberBetween( 3 , 12 )), 
        ];
    }
}
