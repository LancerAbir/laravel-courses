<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->word(5),
            "type" => rand(0, 1),
            "resources" => rand(1, 50),
            "year" => rand(2010, 2022),
            "price" => rand(0, 1) ? rand(1, 100) : 0.00,
            "image" => fake()->imageUrl(),
            "descriptions" => fake()->paragraph(3),
            "link" => fake()->url(),
            "duration" => rand(0, 2),
            "level" => rand(0, 1),
            "submitted_by" => User::all()->random()->id,
            "platform_id" => Platform::all()->random()->id,

        ];
    }
}
