<x-mail::message>
# You're registered!

Hi {{ $registration->full_name }},

Thanks for registering for **The Autonomous Professional: Unlocking AI & Automation**. Here are your details:

<x-mail::panel>
Ticket code: **{{ $registration->ticket_code }}**<br>
Tickets: **{{ $registration->ticket_quantity }}**<br>
When: **5-Day Seminar**<br>
Where: **Online** — a join link is emailed closer to the event
</x-mail::panel>

<x-mail::button :url="route('event.show')">
View event page
</x-mail::button>

Keep this email for your records — you may be asked for your ticket code at check-in.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
