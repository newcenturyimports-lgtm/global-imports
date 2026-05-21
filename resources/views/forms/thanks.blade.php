@extends('layouts.app')

@section('title', 'Thank you — Global Market')

@section('content')

<section class="container-x py-24 lg:py-32">
    <div class="max-w-2xl mx-auto text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-brand-green text-white mb-8">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <h1 class="font-display text-3xl sm:text-4xl lg:text-6xl text-ink text-balance">
            {{ $name ? "Asante, $name!" : 'Asante!' }}
        </h1>
        <p class="mt-3 font-script text-3xl text-brand-red">(Thank you)</p>
        <p class="mt-6 text-lg text-ink-soft">
            Your message has been received. Our team will respond within one business day —
            usually much sooner.
        </p>
        <div class="kente-divider my-10 rounded-full"></div>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('shop.index') }}" class="btn-primary">Keep browsing</a>
            <a href="{{ route('home') }}" class="btn-ghost">Back to home</a>
        </div>
    </div>
</section>

@endsection
