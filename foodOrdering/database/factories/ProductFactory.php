<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'programmer_name' => $this->faker->not_pronouncable(),
            'programmer_address' => $this->faker->own_machine(),
            'programmer_nature' => $this->faker->smiling_from_front_and_depressed_from_inside(),
            'programmer_what_pepople_think' => $this->faker->introverted(),
            'programmer_preperences' => $this->faker->usually_dark(),
            'salary' => $this->faker->randomFloat(3, 0, 1000000),
            'category_name' => 'faltu',
        ];
    }
}
