<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('event', [
            'event' => [
                'date_label' => 'Oct 16 – 20, 2026',
                'date_full' => 'October 16 – 20, 2026 · 5-Day Seminar',
                'location_label' => 'Online event',
                'followers' => '312',
                'urgency' => 'Few spots left',
            ],
            'organizer' => [
                'name' => 'Growth Summit Collective',
                'logo' => 'https://i.pravatar.cc/150?img=64',
                'top_organizer' => true,
                'followers' => '312',
                'events_hosted' => '48+',
                'years_hosting' => '4y',
                'total_attendees' => '12.4k',
            ],
            'speakers' => [
                [
                    'name' => 'Maya Chen',
                    'role' => 'Co-founder, Northwind Labs',
                    'avatar' => 'https://i.pravatar.cc/150?img=32',
                    'headliner' => true,
                ],
                [
                    'name' => 'Ravi Osei',
                    'role' => 'Head of Growth, Fieldnote',
                    'avatar' => 'https://i.pravatar.cc/150?img=12',
                    'headliner' => true,
                ],
                [
                    'name' => 'Priya Patel',
                    'role' => 'Startup Advisor',
                    'avatar' => 'https://i.pravatar.cc/150?img=47',
                    'headliner' => false,
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Who is this session for?',
                    'answer' => 'Founders and operators who already have some traction and want a practical framework for the next stage of growth.',
                ],
                [
                    'question' => 'How does it run?',
                    'answer' => 'A 5-day seminar — join whichever sessions fit your schedule during the week. Recordings are sent to every registrant afterward.',
                ],
                [
                    'question' => 'When does it take place?',
                    'answer' => 'October 16 – 20, 2026. It\'s a 5-day seminar, so you can pick whichever days work best for you.',
                ],
            ],
        ]);
    }
}
