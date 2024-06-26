<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ['Casa', 'Apartamento', 'Fazenda'];

        $user = User::inRandomOrder()->first();
        if (!$user) {
            $user = User::factory()->create();
        }
        
        return [
            'type' => $this->faker->randomElement($types),
            'city' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 100000, 500000),
            'photo' => $this->faker->imageUrl(640, 480, 'architecture', true),
            'user_id' => $user->id
        ];
    }
}
