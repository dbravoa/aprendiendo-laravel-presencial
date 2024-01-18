<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            #Faker creará datos de prueba o falsos que se generen de manera automática
            'nombre_producto' => $this->faker->sentence(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(3, 50),
            'categoria' => $this->faker->randomElement(['Electrodomésticos', 'Ropa', 'Calzado']),
            'stock' => $this->faker->randomDigit
        ];
    }
}
