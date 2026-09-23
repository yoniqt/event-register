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
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => $this->faker->numerify('+639########'),
            'location' => $this->faker->city(),
            'organization' => $this->faker->company(),
            'ticket_quantity' => $this->faker->numberBetween(1, 4),
            'ticket_code' => Registration::generateTicketCode(),
            'status' => 'confirmed',
        ];
    }
}
