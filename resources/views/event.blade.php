@extends('layouts.app')

@section('title', 'Growth Summit 2026 — Register')
@section('og-title', 'Growth Summit 2026 — Register')
@section('og-description', 'A one-hour, practitioner-led session on the tools, hiring decisions, and go-to-market moves that actually move the needle in your first 1,000 customers.')
@section('og-image', 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=1200&h=630&q=80')

@section('content')
<div class="min-h-full bg-white dark:bg-obsidian">
    <header class="sticky top-0 z-30 border-b border-slate-200 bg-white/70 backdrop-blur-md dark:border-slate-800/60 dark:bg-slate-950/70">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:px-6">
            <a href="/" class="flex items-center gap-2 font-semibold text-slate-900 dark:text-white">
                @include('partials.logo-mark')
                Certicode
            </a>
            <div class="flex items-center gap-3">
                @include('partials.theme-toggle')
                <a href="#register" class="hidden rounded-full bg-orange-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-orange-500/20 transition-all hover:bg-orange-500 hover:shadow-orange-500/40 sm:inline-block">
                    Register
                </a>
            </div>
        </div>
    </header>

    <section class="relative overflow-hidden border-b border-slate-200 dark:border-slate-800/60">
        <div class="pointer-events-none absolute inset-0 bg-gradient-to-tr from-orange-500/10 via-transparent to-amber-400/5 dark:from-orange-600/20 dark:to-amber-500/10"></div>
        <div class="pointer-events-none absolute -top-24 left-1/3 h-96 w-96 rounded-full bg-orange-500/10 blur-3xl dark:bg-orange-600/20"></div>
        <div class="pointer-events-none absolute -bottom-24 right-0 h-96 w-96 rounded-full bg-amber-400/10 blur-3xl dark:bg-amber-500/10"></div>

        <div class="relative mx-auto grid max-w-6xl gap-8 px-4 py-10 sm:px-6 lg:grid-cols-2 lg:items-center lg:py-20">
            <div>
                <div class="mb-4 flex flex-wrap items-center justify-between gap-2">
                    <div class="flex flex-wrap items-center gap-2 text-sm font-medium">
                        <span class="inline-flex items-center gap-1 rounded-full border border-red-300 bg-red-50 px-3 py-1 text-red-600 dark:border-red-500/30 dark:bg-red-500/10 dark:text-red-400">
                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                            </svg>
                            {{ $event['urgency'] }}
                        </span>
                        <span class="rounded-full border border-orange-300 bg-orange-50 px-3 py-1 text-orange-700 dark:border-orange-500/30 dark:bg-orange-500/10 dark:text-orange-400">Fri, Oct 16, 2026 · 6:00 PM</span>
                        <span class="rounded-full border border-amber-300 bg-amber-50 px-3 py-1 text-amber-700 dark:border-amber-500/30 dark:bg-amber-500/10 dark:text-amber-400">Online</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" data-share aria-label="Share this event"
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-orange-400 hover:text-orange-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-orange-500/50 dark:hover:text-orange-400">
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 8.25 12 3.75m0 0L7.5 8.25M12 3.75v12" />
                            </svg>
                        </button>
                        <button type="button" data-like aria-label="Save this event" aria-pressed="false"
                                class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-orange-400 hover:text-orange-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-orange-500/50 dark:hover:text-orange-400">
                            <svg data-like-icon class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                    Growth Summit — <span class="glow-text">Scaling Your Startup</span> in 2026
                </h1>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                    A one-hour, practitioner-led session on the tools, hiring decisions, and go-to-market
                    moves that actually move the needle in your first 1,000 customers.
                </p>

                <div class="mt-6 flex flex-wrap items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 p-3 dark:border-slate-800 dark:bg-slate-900/60">
                    <div class="flex items-center gap-3">
                        <img src="{{ $organizer['logo'] }}" alt="{{ $organizer['name'] }}" class="h-10 w-10 rounded-full border border-slate-200 object-cover dark:border-slate-700">
                        <div>
                            @if ($organizer['top_organizer'])
                                <span class="inline-block rounded border border-amber-300 bg-amber-50 px-1.5 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-amber-700 dark:border-amber-500/30 dark:bg-amber-500/10 dark:text-amber-400">Top organizer</span>
                            @endif
                            <p class="text-sm text-slate-600 dark:text-slate-300">by <span class="font-semibold text-slate-900 dark:text-white">{{ $organizer['name'] }}</span></p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">
                                {{ $organizer['followers'] }} followers &middot; {{ $organizer['events_hosted'] }} events &middot; {{ $organizer['years_hosting'] }} hosting &middot; {{ $organizer['total_attendees'] }} attendees
                            </p>
                        </div>
                    </div>
                    <button type="button" class="rounded-full border border-slate-300 bg-white px-4 py-1.5 text-sm font-medium text-slate-700 transition hover:border-orange-400 hover:text-orange-600 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-200 dark:hover:border-orange-500/50 dark:hover:text-orange-400">
                        Follow
                    </button>
                </div>

                <div class="mt-4 space-y-1.5 text-sm text-slate-600 dark:text-slate-300">
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 shrink-0 text-slate-400 dark:text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        {{ $event['location_label'] }}
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 shrink-0 text-slate-400 dark:text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>
                        {{ $event['date_full'] }}
                    </div>
                </div>

                <button type="button" data-open-modal class="mt-6 inline-flex items-center justify-center rounded-full bg-orange-600 px-6 py-3 text-base font-semibold text-white shadow-lg shadow-orange-500/25 transition-all hover:bg-orange-500 hover:shadow-orange-500/40">
                    Reserve your seat
                </button>
            </div>
            <div class="relative">
                <div class="absolute -inset-1 rounded-2xl bg-gradient-to-br from-orange-500/40 to-amber-400/20 blur-xl"></div>
                <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=900&q=80"
                     alt="Speakers presenting at a workshop"
                     class="relative aspect-[4/3] w-full rounded-2xl border border-slate-200 object-cover shadow-2xl dark:border-slate-800">
            </div>
        </div>
    </section>

    <div class="mx-auto grid max-w-6xl gap-10 px-4 py-10 sm:px-6 lg:grid-cols-3 lg:py-14">
        <main class="space-y-10 lg:col-span-2">
            <section>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Overview</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-300">
                    Workshops and live trainings are the fastest way to get a new playbook to actually stick with a
                    team — not just the founders, but everyone touching the roadmap. Whether it's hands-on execution
                    or a framework that needs to be translated into your day-to-day: the outcome depends less on the
                    topic and more on the preparation behind it.
                </p>
                <p class="mt-3 text-slate-600 dark:text-slate-300">
                    In this session, <span class="text-orange-600 dark:text-orange-400">{{ $speakers[0]['name'] }}</span> and
                    <span class="text-orange-600 dark:text-orange-400">{{ $speakers[1]['name'] }}</span> walk through what actually
                    happens behind the scenes of a growth-stage startup — the tools, the rituals, and the calls that
                    don't make it into the highlight reel.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Line-up</h2>
                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    @foreach ($speakers as $speaker)
                        <div class="glass-card flex items-center gap-3 p-4 transition-transform hover:-translate-y-0.5 dark:shadow-lg dark:shadow-orange-500/5 dark:hover:shadow-orange-500/10">
                            <img src="{{ $speaker['avatar'] }}" alt="{{ $speaker['name'] }}" class="h-12 w-12 rounded-full border border-slate-200 object-cover dark:border-slate-700">
                            <div>
                                @if ($speaker['headliner'])
                                    <span class="mb-1 inline-block rounded border border-amber-300 bg-amber-50 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wide text-amber-700 dark:border-amber-500/30 dark:bg-amber-500/10 dark:text-amber-400">Headliner</span>
                                @endif
                                <p class="font-medium text-slate-900 dark:text-white">{{ $speaker['name'] }}</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $speaker['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Good to know</h2>
                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    <div class="glass-card p-4">
                        <p class="font-medium text-slate-900 dark:text-white">Highlights</p>
                        <ul class="mt-2 space-y-1 text-sm text-slate-600 dark:text-slate-300">
                            <li>1 hour, live Q&amp;A included</li>
                            <li>Online — join from anywhere</li>
                        </ul>
                    </div>
                    <div class="glass-card p-4">
                        <p class="font-medium text-slate-900 dark:text-white">Refund policy</p>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">No refunds. Tickets may be transferred by contacting the organizer before the event.</p>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Location</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-300">Online event — a join link is emailed with your ticket confirmation.</p>
            </section>

            <section>
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">FAQ</h2>
                <div class="mt-4 space-y-3">
                    @foreach ($faqs as $faq)
                        <div class="glass-card p-4" data-faq-item>
                            <button type="button" data-faq-toggle class="flex w-full items-center justify-between text-left font-medium text-slate-900 dark:text-white">
                                {{ $faq['question'] }}
                                <svg data-faq-icon class="h-4 w-4 shrink-0 text-orange-600 transition-transform dark:text-orange-400" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 8l4 4 4-4" />
                                </svg>
                            </button>
                            <p data-faq-answer class="mt-2 hidden text-sm text-slate-600 dark:text-slate-300">{{ $faq['answer'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </main>

        <aside class="lg:col-span-1">
            <div class="glass-card sticky top-20 p-5 dark:shadow-xl dark:shadow-orange-500/10" id="register">
                <p class="text-lg font-semibold text-slate-900 dark:text-white">{{ $event['date_label'] }}</p>
                <button type="button" data-open-modal class="mt-4 w-full rounded-full bg-orange-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-orange-500/20 transition-all hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-500/25">
                    Register
                </button>
                <dl class="mt-5 space-y-2 border-t border-slate-200 pt-4 text-sm text-slate-600 dark:border-slate-800 dark:text-slate-300">
                    <div class="flex justify-between"><dt>Followers</dt><dd class="text-amber-600 dark:text-amber-400">{{ $event['followers'] }}</dd></div>
                    <div class="flex justify-between"><dt>Format</dt><dd>Online</dd></div>
                    <div class="flex justify-between"><dt>Duration</dt><dd>1 hour</dd></div>
                </dl>
            </div>
        </aside>
    </div>

    <footer class="border-t border-slate-800 bg-slate-950 text-slate-400">
        <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h3 class="text-sm font-semibold text-white">Event</h3>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="#" class="transition hover:text-orange-400">Overview</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Line-up</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">FAQ</a></li>
                        <li><a href="#register" class="transition hover:text-orange-400">Register</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white">Organizer</h3>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="#" class="transition hover:text-orange-400">About {{ $organizer['name'] }}</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Contact organizer</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Report this event</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white">Resources</h3>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="#" class="transition hover:text-orange-400">Help center</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Terms of service</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Privacy policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-white">Connect</h3>
                    <ul class="mt-3 space-y-2 text-sm">
                        <li><a href="#" class="transition hover:text-orange-400">X (Twitter)</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">LinkedIn</a></li>
                        <li><a href="#" class="transition hover:text-orange-400">Email us</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 flex flex-col items-center justify-between gap-4 border-t border-slate-800 pt-6 sm:flex-row">
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    @include('partials.logo-mark', ['size' => 'h-6 w-6'])
                    Certicode
                </div>
                <p class="text-xs text-slate-500">&copy; {{ date('Y') }} Certicode. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <div data-modal-backdrop class="fixed inset-0 z-40 hidden items-center justify-center bg-slate-950/70 p-4 backdrop-blur-sm dark:bg-slate-950/80">
        <div data-modal class="glass-card w-full max-w-md p-6 dark:shadow-2xl dark:shadow-orange-500/10">
            <div data-modal-form>
                <div class="flex items-start justify-between">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Reserve your seat</h3>
                    <button type="button" data-close-modal class="text-slate-400 hover:text-slate-900 dark:text-slate-500 dark:hover:text-white" aria-label="Close">&times;</button>
                </div>
                <form id="registration-form" class="mt-4 space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-slate-600 dark:text-slate-300" for="full_name">Full name</label>
                        <input id="full_name" name="full_name" type="text" required class="mt-1 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        <p class="mt-1 hidden text-sm text-orange-600 dark:text-orange-400" data-error="full_name"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 dark:text-slate-300" for="email">Email address</label>
                        <input id="email" name="email" type="email" required class="mt-1 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        <p class="mt-1 hidden text-sm text-orange-600 dark:text-orange-400" data-error="email"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 dark:text-slate-300" for="contact_number">Contact number</label>
                        <input id="contact_number" name="contact_number" type="tel" required class="mt-1 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
                        <p class="mt-1 hidden text-sm text-orange-600 dark:text-orange-400" data-error="contact_number"></p>
                    </div>
                    <p data-form-error class="hidden text-sm text-orange-600 dark:text-orange-400"></p>
                    <button type="submit" class="w-full rounded-full bg-orange-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-orange-500/20 transition-all hover:bg-orange-500 hover:shadow-orange-500/40 disabled:cursor-not-allowed disabled:opacity-60">
                        <span data-submit-label>Confirm registration</span>
                    </button>
                </form>
            </div>
            <div data-modal-success class="hidden text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-amber-300 bg-amber-50 text-amber-600 dark:border-amber-500/30 dark:bg-amber-500/10 dark:text-amber-400">
                    <svg class="h-6 w-6" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l3 3 7-7" />
                    </svg>
                </div>
                <h3 class="mt-3 text-lg font-semibold text-slate-900 dark:text-white">You're registered!</h3>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">We've sent a confirmation to your email.</p>
                <button type="button" data-close-modal class="mt-5 w-full rounded-full bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-700 dark:bg-slate-800 dark:hover:bg-slate-700">
                    Done
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
