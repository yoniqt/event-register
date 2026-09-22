<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => $this->faker->numerify('+639########'),
            'ticket_quantity' => $this->faker->numberBetween(1, 4),
            'ticket_code' => Registration::generateTicketCode(),
            'status' => 'confirmed',
        ];
    }
}
