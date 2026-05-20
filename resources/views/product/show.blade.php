@extends('layouts.app')

@section('title', $product['name'] . ' — Global Market')
@section('meta_description', $product['short'] ?? '')

@section('content')

<section class="container-x pt-10 pb-4 text-xs uppercase tracking-widest text-ink-soft">
    <a href="{{ route('home') }}" class="hover:text-brand-green">Home</a>
    <span class="mx-2">/</span>
    <a href="{{ route('shop.index') }}" class="hover:text-brand-green">Shop</a>
    <span class="mx-2">/</span>
    <a href="{{ route('shop.category', $category['slug']) }}" class="hover:text-brand-green">{{ $category['name'] }}</a>
    <span class="mx-2">/</span>
    <span class="text-ink">{{ $product['name'] }}</span>
</section>

<section class="container-x py-10 lg:py-16 grid lg:grid-cols-2 gap-10 lg:gap-16">
    {{-- Gallery --}}
    <div class="lg:sticky lg:top-32 self-start">
        <div class="aspect-square rounded-3xl bg-white ring-1 ring-sand p-6 lg:p-10 flex items-center justify-center overflow-hidden">
            @if(file_exists(public_path('images/products/'.$product['image'])))
                <img src="{{ asset('images/products/'.$product['image']) }}" alt="{{ $product['name'] }}"
                     class="max-w-full max-h-full object-contain">
            @else
                <div class="text-center">
                    <div class="font-script text-5xl text-brand-green">{{ $brand['name'] ?? '' }}</div>
                    <div class="mt-3 font-display text-2xl text-ink-soft">{{ $product['name'] }}</div>
                    <div class="mt-6 text-xs text-ink-soft/60">Drop photo at<br><code>public/images/products/{{ $product['image'] }}</code></div>
                </div>
            @endif
        </div>

        @if(!empty($product['badges']))
            <div class="mt-4 flex flex-wrap gap-2">
                @foreach($product['badges'] as $badge)
                    <span class="ribbon">{{ $badge }}</span>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Details --}}
    <div>
        <div class="text-sm font-semibold uppercase tracking-widest text-brand-green-dark">
            <a href="{{ route('shop.brand', $brand['slug']) }}" class="link-underline">{{ $brand['name'] }}</a>
        </div>
        <h1 class="mt-2 font-display text-4xl lg:text-5xl text-ink text-balance">{{ $product['name'] }}</h1>

        <p class="mt-4 text-lg text-ink-soft">{{ $product['short'] ?? '' }}</p>

        <dl class="mt-8 grid grid-cols-2 gap-y-4 text-sm border-t border-sand pt-6">
            @if(!empty($product['weight']))
                <dt class="text-ink-soft uppercase text-xs tracking-widest">Weight</dt>
                <dd class="font-semibold">{{ $product['weight'] }}</dd>
            @endif
            <dt class="text-ink-soft uppercase text-xs tracking-widest">Origin</dt>
            <dd class="font-semibold">{{ $product['origin'] }}</dd>
            <dt class="text-ink-soft uppercase text-xs tracking-widest">Brand</dt>
            <dd class="font-semibold">{{ $brand['name'] }}</dd>
            <dt class="text-ink-soft uppercase text-xs tracking-widest">Category</dt>
            <dd class="font-semibold">{{ $category['name'] }}</dd>
        </dl>

        <div class="mt-8 prose prose-sm max-w-none text-ink-soft">
            <p>{{ $product['long'] ?? $product['short'] ?? '' }}</p>
        </div>

        <div class="mt-10 flex flex-wrap gap-3">
            <a href="{{ route('inquire', $product['slug']) }}" class="btn-primary">
                Request a quote
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <a href="tel:+19132279959" class="btn-ghost">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 006.6 6.6l2.2-2.2a1 1 0 011-.25 11.4 11.4 0 003.6.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.24.2 2.45.57 3.6a1 1 0 01-.25 1z"/></svg>
                Call the store
            </a>
        </div>

        <div class="mt-8 p-4 rounded-2xl bg-cream ring-1 ring-sand text-xs text-ink-soft">
            <strong class="text-ink">In-store today at Global Market.</strong> 9930 W 87th St, Overland Park.
            Prefer to stock this in your shop? <a href="{{ route('wholesale') }}" class="link-underline text-brand-green">Wholesale inquiries →</a>
        </div>
    </div>
</section>

{{-- Related --}}
@if($related->isNotEmpty())
<section class="container-x pb-24">
    <div class="kente-divider mb-12 rounded-full"></div>
    <h2 class="font-display text-3xl text-ink mb-6">More from {{ $category['name'] }}</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        @foreach($related as $r)
            <x-product-card :product="$r"/>
        @endforeach
    </div>
</section>
@endif

@endsection
