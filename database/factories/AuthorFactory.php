<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Author::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'secondary_name' => $this->faker->lastName,
            'surname' => $this->faker->name(1),
            'birthday' => $this->faker->dateTime,
            'day_death' => $this->faker->dateTime,
        ];
    }
}
