<?php

namespace Tests\Feature;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login(): void
    {
        $response = $this->get('/admin/registrations');

        $response->assertRedirect(route('admin.login'));
    }

    public function test_guests_cannot_access_the_admin_api(): void
    {
        $response = $this->getJson('/api/admin/registrations');

        $response->assertStatus(401);
    }

    public function test_admin_can_log_in_and_view_registrations(): void
    {
        $admin = User::factory()->create(['password' => 'password']);
        Registration::factory()->count(3)->create();

        $this->post('/admin/login', [
            'email' => $admin->email,
            'password' => 'password',
        ])->assertRedirect(route('admin.registrations'));

        $response = $this->actingAs($admin)->getJson('/api/admin/registrations');

        $response->assertOk();
        $response->assertJsonCount(3, 'data');
        $response->assertJsonPath('summary.total_registrations', 3);
    }

    public function test_admin_can_search_registrations(): void
    {
        $admin = User::factory()->create();
        Registration::factory()->create(['full_name' => 'Maya Chen']);
        Registration::factory()->create(['full_name' => 'Ravi Osei']);

        $response = $this->actingAs($admin)->getJson('/api/admin/registrations?search=Maya');

        $response->assertOk();
        $response->assertJsonCount(1, 'data');
        $response->assertJsonPath('data.0.full_name', 'Maya Chen');
    }

    public function test_admin_can_export_registrations_as_pdf(): void
    {
        $admin = User::factory()->create();
        Registration::factory()->create();

        $response = $this->actingAs($admin)->get('/api/admin/registrations/export');

        $response->assertOk();
        $response->assertHeader('content-type', 'application/pdf');
    }
}
