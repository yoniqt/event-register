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
            ],
            'speakers' => [
                [
                    'name' => 'Tom Oliver Chua',
                    'role' => 'Founder of Certicode',
                    'avatar' => '/images/pic.jpg',
                    'headliner' => true,
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
