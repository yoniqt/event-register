<?php

namespace Tests\Feature;

use App\Mail\RegistrationConfirmationMail;
use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class RegistrationApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_loads(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('The Autonomous Professional');
    }

    public function test_it_registers_an_attendee(): void
    {
        Mail::fake();

        $response = $this->postJson('/api/register', [
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'contact_number' => '+639171234567',
            'location' => 'Quezon City',
            'organization' => 'Northwind Labs',
        ]);

        $response->assertCreated();
        $response->assertJsonPath('success', true);
        $response->assertJsonStructure(['data' => ['ticket_code']]);

        $this->assertDatabaseHas('registrations', [
            'email' => 'juan@example.com',
            'location' => 'Quezon City',
            'organization' => 'Northwind Labs',
        ]);
    }

    public function test_it_emails_a_confirmation_to_the_registrant(): void
    {
        Mail::fake();

        $this->postJson('/api/register', [
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'contact_number' => '+639171234567',
            'location' => 'Quezon City',
            'organization' => 'Northwind Labs',
        ]);

        Mail::assertQueued(RegistrationConfirmationMail::class, function (RegistrationConfirmationMail $mail) {
            return $mail->registration->email === 'juan@example.com'
                && $mail->hasTo('juan@example.com');
        });
    }

    public function test_it_validates_required_fields(): void
    {
        $response = $this->postJson('/api/register', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['full_name', 'email', 'contact_number', 'location', 'organization']);
    }

    public function test_ticket_code_is_generated_automatically(): void
    {
        $registration = Registration::factory()->create(['ticket_code' => null]);

        $this->assertNotNull($registration->ticket_code);
        $this->assertStringStartsWith('TICK-', $registration->ticket_code);
    }
}
