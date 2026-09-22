<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og-title', config('app.name'))">
    <meta property="og:description" content="@yield('og-description', 'Register for upcoming events on ' . config('app.name') . '.')">
    <meta property="og:image" content="@yield('og-image', url('/og-image.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og-title', config('app.name'))">
    <meta name="twitter:description" content="@yield('og-description', 'Register for upcoming events on ' . config('app.name') . '.')">
    <meta name="twitter:image" content="@yield('og-image', url('/og-image.jpg'))">
    @unless ($__env->hasSection('force-light'))
        <script>
            (function () {
                var stored = localStorage.getItem('theme');
                var isDark = stored ? stored === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.documentElement.classList.toggle('dark', isDark);
            })();
        </script>
    @endunless
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    @yield('content')
</body>
</html>
