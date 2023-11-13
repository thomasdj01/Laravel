<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rollercoaster>
 */
class RollercoasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Maker' =>$this ->faker->word(),
            'Lengte' =>$this ->faker->randomNumber(3,true),
            'Hoogte' =>$this ->faker->randomNumber(3,true),
        ];
    }
}
