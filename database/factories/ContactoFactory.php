<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->firstName(),
            'apellidos'=> $this->faker->lastName(),
            'alias' => substr($this->faker->userName(), 0, 15),
            'email' => $this->faker->unique()->safeEmail(), 
            'telefono' => substr($this->faker->phoneNumber(), 0, 15)
        ];
    }
}
