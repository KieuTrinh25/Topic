<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'day_of_birth'=>fake()->date(), 
            'sex'=>fake()->title(), 
            'phone'=>fake()->phoneNumber(), 
            'email'=>fake()->email(), 
            'address'=>fake()->address(), 
            'faculty_id' => fake()->numberBetween(1,3),
            'klass_id' => fake()->numberBetween(1,3),
        ];
    }
}
