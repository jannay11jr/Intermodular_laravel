<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


            'cif' => fake()->randomNumber(),
            'notas'=> fake()->sentence(),
            'email' => fake()->sentence(),
            'direccion' => fake()->sentence(),
            'provincia' => fake()->sentence(),
            'poblacion' => fake()->sentence(),
            'nombre_empresa' => fake()->unique()->word(),
            'descripcion' => fake()->paragraphs(3,true),
        ];
    }
}
