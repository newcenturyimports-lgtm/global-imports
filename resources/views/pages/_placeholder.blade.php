@extends('layouts.app')

@section('title', ($title ?? 'Coming soon') . ' — Global Market')

@section('content')
<section class="container-x py-24">
    <div class="mx-auto max-w-2xl text-center">
        <span class="pill">Coming in Phase {{ $phase ?? '3' }}</span>
        <h1 class="mt-6 font-display text-5xl text-ink">{{ $title ?? 'Coming soon' }}</h1>
        <p class="mt-4 text-ink-soft text-lg">
            {{ $blurb ?? 'This page is part of the upcoming build phase. Brand system, layout and navigation are already in place — content is next.' }}
        </p>
        <div class="kente-divider mt-10 rounded-full"></div>
        <a href="{{ route('home') }}" class="btn-secondary mt-10">Back to home</a>
    </div>
</section>
@endsection
