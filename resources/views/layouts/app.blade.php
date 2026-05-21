<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0F6B3B">

    <title>@yield('title', 'Global Market — World Pantry, Curated by New Century Imports')</title>
    <meta name="description" content="@yield('meta_description', 'African, Caribbean, South American & European groceries — imported and distributed in the U.S. by New Century Imports since 2005.')">

    <link rel="icon" type="image/svg+xml" href="/images/brand/favicon.svg">
    <link rel="alternate icon" href="/favicon.ico">

    {{-- OpenGraph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Global Market — World Pantry, Curated by New Century Imports')">
    <meta property="og:description" content="@yield('meta_description', 'African, Caribbean, South American & European groceries — imported by New Century Imports since 2005.')">
    <meta property="og:image" content="{{ asset('images/brand/og-image.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="min-h-screen flex flex-col bg-cream">

    {{-- Top utility bar --}}
    <div class="bg-brand-green-deep text-cream/90 text-[11px] sm:text-[12px]">
        <div class="container-x flex items-center justify-between gap-3 py-2">
            <div class="flex items-center gap-3 sm:gap-4 min-w-0">
                <span class="hidden md:inline-flex items-center gap-1.5">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8 2 5 5 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-4-3-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/></svg>
                    9930 W 87th St, Overland Park, KS · Mon–Sat 9–8
                </span>
                <a href="tel:+19132279959" class="inline-flex items-center gap-1.5 hover:text-brand-gold whitespace-nowrap">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11.4 11.4 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.6a1 1 0 01-.25 1z"/></svg>
                    +1 (913) 227-9959
                </a>
            </div>
            <div class="flex items-center gap-3 sm:gap-4 shrink-0">
                <a href="{{ route('wholesale') }}" class="hover:text-brand-gold">Wholesale</a>
                <span class="opacity-40 hidden sm:inline">·</span>
                <a href="{{ route('contact') }}" class="hover:text-brand-gold hidden sm:inline">Contact</a>
            </div>
        </div>
    </div>

    @include('layouts.partials.header')

    <main class="flex-1">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
