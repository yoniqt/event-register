<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('event', [
            'event' => [
                'date_label' => '5-Day Seminar',
                'date_full' => '5-Day Seminar',
                'location_label' => 'Online event',
                'urgency' => 'Few spots left',
            ],
            'organizer' => [
                'name' => 'Certicode',
                'logo' => '/images/pic.jpg',
                'top_organizer' => true,
                'followers' => '312',
                'events_hosted' => '48+',
                'years_hosting' => '4y',
                'total_attendees' => '12.4k',
            ],
            'speakers' => [
                [
                    'name' => 'Tom Oliver Chua',
                    'role' => 'Founder of Certicode',
                    'avatar' => '/images/pic.jpg',
                    'headliner' => true,
                ],
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
                    'answer' => 'It\'s a 5-day seminar, so you can pick whichever days work best for you.',
                ],
            ],
        ]);
    }
}
