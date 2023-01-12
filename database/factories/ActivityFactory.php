<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'=>fake()->isbn10(),
            'name'=>fake()->name(),
            'content'=>fake()->sentence(),
            'status'=>fake()->sentence(),
            'start_time'=>fake()->date(),
            'end_time'=>fake()->date(),
            'school_year_id' => fake()->numberBetween(1,3),
        ];
    }
}
