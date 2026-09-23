@extends('layouts.app')

@section('title', 'Registrations — Admin')

@section('content')
<div class="min-h-full bg-white dark:bg-obsidian">
    <header class="sticky top-0 z-10 border-b border-slate-200 bg-white/70 backdrop-blur-md dark:border-slate-800/60 dark:bg-slate-950/70">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
            <div>
                <h1 class="text-lg font-semibold text-slate-900 dark:text-white">Registrations</h1>
            </div>
            <div class="flex items-center gap-3">
                @include('partials.theme-toggle')
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-slate-500 hover:text-orange-600 dark:text-slate-400 dark:hover:text-orange-400">Sign out</button>
                </form>
            </div>
        </div>
    </header>

    <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6">
        <div class="glass-card p-5 dark:shadow-lg dark:shadow-orange-500/5">
            <p class="text-sm text-slate-500 dark:text-slate-400">Total registrations</p>
            <p class="mt-1 text-2xl font-bold glow-text" data-summary-registrations>—</p>
        </div>

        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <input type="search" placeholder="Search by name, email, organization, or ticket code" data-search
                   class="w-full max-w-sm rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
            <a href="{{ route('admin.api.registrations.export') }}" class="inline-flex items-center justify-center rounded-full border border-amber-300 bg-amber-50 px-4 py-2 text-sm font-medium text-amber-700 transition hover:bg-amber-100 dark:border-amber-500/30 dark:bg-amber-500/10 dark:text-amber-400 dark:hover:bg-amber-500/20">
                Export PDF
            </a>
        </div>

        <div class="glass-card mt-4 overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 text-sm dark:divide-slate-800">
                <thead class="bg-slate-50 text-left text-xs font-semibold uppercase tracking-wide text-slate-500 dark:bg-slate-900/60 dark:text-slate-400">
                    <tr>
                        <th class="px-4 py-3">First Name</th>
                        <th class="px-4 py-3">Last Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Location</th>
                        <th class="px-4 py-3">Organization/School</th>
                        <th class="px-4 py-3">Registered</th>
                    </tr>
                </thead>
                <tbody data-table-body class="divide-y divide-slate-200 dark:divide-slate-800">
                    <tr><td class="px-4 py-6 text-center text-slate-400 dark:text-slate-500" colspan="7">Loading…</td></tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex items-center justify-between text-sm text-slate-500 dark:text-slate-400">
            <p data-pagination-info></p>
            <div class="flex gap-2">
                <button type="button" data-prev-page class="rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-slate-600 hover:border-orange-400 hover:text-orange-600 disabled:cursor-not-allowed disabled:opacity-40 disabled:hover:border-slate-300 disabled:hover:text-slate-600 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 dark:hover:border-orange-500/40 dark:hover:text-orange-400 dark:disabled:hover:border-slate-700 dark:disabled:hover:text-slate-300" disabled>Previous</button>
                <button type="button" data-next-page class="rounded-lg border border-slate-300 bg-white px-3 py-1.5 text-slate-600 hover:border-orange-400 hover:text-orange-600 disabled:cursor-not-allowed disabled:opacity-40 disabled:hover:border-slate-300 disabled:hover:text-slate-600 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 dark:hover:border-orange-500/40 dark:hover:text-orange-400 dark:disabled:hover:border-slate-700 dark:disabled:hover:text-slate-300" disabled>Next</button>
            </div>
        </div>
    </main>
</div>
@endsection
