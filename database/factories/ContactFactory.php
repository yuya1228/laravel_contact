<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->unique()->safeEmail,
            'postcode' => $this->faker->postcode(8),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(255),
            'opinion' => $this->faker->realText(120)
        ];
    }
}
