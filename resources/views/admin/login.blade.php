@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="relative flex min-h-full items-center justify-center overflow-hidden bg-white px-4 py-16 dark:bg-obsidian">
    <div class="pointer-events-none absolute -top-24 left-1/3 h-96 w-96 rounded-full bg-orange-500/10 blur-3xl dark:bg-orange-600/20"></div>
    <div class="pointer-events-none absolute -bottom-24 right-1/3 h-96 w-96 rounded-full bg-amber-400/10 blur-3xl dark:bg-amber-500/10"></div>

    <div class="absolute right-4 top-4">
        @include('partials.theme-toggle')
    </div>

    <div class="glass-card relative w-full max-w-sm p-6 dark:shadow-2xl dark:shadow-orange-500/10">
        <div class="mb-1 flex items-center gap-2">
            @include('partials.logo-mark')
            <h1 class="text-lg font-semibold text-slate-900 dark:text-white">Admin sign in</h1>
        </div>
        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Manage event registrations.</p>

        @if ($errors->any())
            <div class="mt-4 rounded-lg border border-orange-300 bg-orange-50 p-3 text-sm text-orange-700 dark:border-orange-500/30 dark:bg-orange-500/10 dark:text-orange-400">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}" class="mt-5 space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-slate-600 dark:text-slate-300">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                       class="mt-1 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-slate-600 dark:text-slate-300">Password</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900 dark:text-white dark:placeholder-slate-500">
            </div>
            <label class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400">
                <input type="checkbox" name="remember" class="rounded border-slate-300 bg-white text-orange-600 focus:ring-orange-500 dark:border-slate-700 dark:bg-slate-900">
                Remember me
            </label>
            <button type="submit" class="w-full rounded-full bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-lg shadow-orange-500/20 transition-all hover:bg-orange-500 hover:shadow-orange-500/40">
                Sign in
            </button>
        </form>
    </div>
</div>
@endsection
