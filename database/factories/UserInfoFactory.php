<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'secondary_name' => $this->faker->lastName,
            'birthday' => $this->faker->dateTimeBetween('-80 years', '-10 years'),
            'phone_number' => str_replace('+', '', $this->faker->unique()->e164PhoneNumber),
            'about' => $this->faker->text,
            'photo' => $this->faker->imageUrl,
        ];
    }
}
