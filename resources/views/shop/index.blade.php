@extends('layouts.app')

@section('title', 'Shop — Global Market')

@section('content')

<section class="container-x pt-6 pb-24" x-data="{ open: false }">
    <div class="flex flex-col lg:flex-row gap-8 items-start">

        {{-- Desktop sidebar --}}
        <aside class="hidden lg:block lg:w-64 shrink-0 sticky top-28 bg-white ring-1 ring-sand rounded-2xl p-5">
            <h2 class="font-display text-lg text-ink mb-4">Filters</h2>
            @include('shop.partials.filter-form')
        </aside>

        {{-- Mobile drawer --}}
        <div x-show="open" x-cloak class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true">
            <div class="absolute inset-0 bg-ink/50" x-transition.opacity @click="open = false"></div>
            <div class="absolute inset-y-0 left-0 w-80 max-w-[85%] bg-white p-6 overflow-y-auto shadow-xl"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full">
                <div class="flex items-center justify-between mb-5">
                    <h2 class="font-display text-lg text-ink">Filters</h2>
                    <button @click="open = false" class="text-ink-soft" aria-label="Close filters">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="6" y1="18" x2="18" y2="6"/></svg>
                    </button>
                </div>
                @include('shop.partials.filter-form')
            </div>
        </div>

        {{-- Products --}}
        <div class="flex-1 min-w-0 w-full">
            <div class="flex items-center justify-between mb-5">
                <div class="text-sm text-ink-soft">{{ $products->count() }} {{ \Illuminate\Support\Str::plural('product', $products->count()) }}</div>
                <button @click="open = true" class="lg:hidden btn-ghost !px-4 !py-2 text-sm inline-flex items-center gap-2">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M4 6h16M7 12h10M10 18h4"/></svg>
                    Filters
                </button>
            </div>

            @if($products->isEmpty())
                <div class="text-center py-24">
                    <p class="font-display text-2xl text-ink">No products match those filters.</p>
                    <a href="{{ route('shop.index') }}" class="mt-4 link-underline text-brand-green inline-block">Clear filters</a>
                </div>
            @else
                <div class="flex flex-wrap justify-center gap-3 sm:gap-4">
                    @foreach($products as $product)
                        <div class="w-[calc(50%_-_0.375rem)] sm:w-[calc(33.333%_-_0.667rem)] md:w-[calc(25%_-_0.75rem)] lg:w-[calc(20%_-_0.8rem)] xl:w-[calc(16.666%_-_0.833rem)]">
                            <x-product-card :product="$product"/>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
