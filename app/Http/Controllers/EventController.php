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
                'contact_email' => 'codecerti@gmail.com',
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
                    'question' => 'What is the "AI Automation Seminar/Bootcamp"?',
                    'answer' => 'It is an intensive seminar designed to teach you how to combine artificial intelligence (ChatGPT, Gemini) with workflow automation tools (N8N) and cloud infrastructure to eliminate repetitive tasks and build smart, autonomous pipelines.',
                ],
                [
                    'question' => 'To whom is this seminar for?',
                    'answer' => 'This session is ideal for professionals, entrepreneurs, freelancers, and tech enthusiasts looking to eliminate repetitive busywork and scale their productivity using modern AI tools.',
                ],
                [
                    'question' => 'What will I learn from this seminar?',
                    'answer' => 'By the end of the bootcamp, you will understand the fundamentals of AI automation.',
                ],
                [
                    'question' => 'How can I join the session?',
                    'answer' => 'Once you complete your registration, you will receive a confirmation email containing the secure link to access the live seminar.',
                ],
            ],
        ]);
    }
}
