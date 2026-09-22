<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('event', [
            'event' => [
                'date_label' => 'Fri, Oct 16 · 6:00 PM PST',
                'date_full' => 'Friday, October 16 · 6:00 - 7:00 PM PST',
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
                    'answer' => 'A 40-minute walkthrough followed by 20 minutes of live Q&A. The recording is sent to every registrant afterward.',
                ],
                [
                    'question' => 'When does it take place?',
                    'answer' => 'Friday, October 16, 2026 at 6:00 PM PST. The event lasts about one hour.',
                ],
            ],
        ]);
    }
}
