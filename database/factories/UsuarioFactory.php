<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{

    public function definition(): array
    {
        $log = fake()->unique()->word();
        return [
            'name' => fake()->unique()->word(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'login' => $log,
            'password' => bcrypt($log),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
