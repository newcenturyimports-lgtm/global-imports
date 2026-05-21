@extends('layouts.app')

@section('title', 'Shop the catalog — Global Market')

@section('content')

<section class="container-x pt-12 pb-6">
    <span class="pill">Shop</span>
    <h1 class="mt-4 font-display text-3xl sm:text-4xl lg:text-6xl text-ink">The catalog.</h1>
    <p class="mt-3 text-sm sm:text-base text-ink-soft max-w-2xl">Filter by brand, category, or country of origin. Tap a product to see details, weights, and how to request a quote.</p>
</section>

{{-- ============ FILTERS ============ --}}
<section class="container-x py-6">
    <form method="GET" action="{{ route('shop.index') }}" class="bg-white ring-1 ring-sand rounded-2xl p-4 lg:p-5 grid gap-3 lg:grid-cols-12 items-end">
        <div class="lg:col-span-4">
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Search</label>
            <input type="search" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="e.g. tomato paste, masala, tea…"
                   class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
        </div>
        <div class="lg:col-span-3">
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Brand</label>
            <select name="brand" class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
                <option value="">All brands</option>
                @foreach($brands as $b)
                    <option value="{{ $b['slug'] }}" @selected(($filters['brand'] ?? '') === $b['slug'])>{{ $b['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="lg:col-span-3">
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Category</label>
            <select name="category" class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
                <option value="">All categories</option>
                @foreach($categories as $c)
                    <option value="{{ $c['slug'] }}" @selected(($filters['category'] ?? '') === $c['slug'])>{{ $c['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="lg:col-span-2 flex gap-2">
            <button type="submit" class="btn-primary flex-1 !px-4">Filter</button>
            @if(array_filter($filters))
                <a href="{{ route('shop.index') }}" class="btn-ghost !px-3" title="Clear filters">×</a>
            @endif
        </div>
    </form>
</section>

{{-- ============ GRID ============ --}}
<section class="container-x pb-24">
    @if($products->isEmpty())
        <div class="text-center py-24">
            <p class="font-display text-2xl text-ink">No products match those filters.</p>
            <a href="{{ route('shop.index') }}" class="mt-4 link-underline text-brand-green inline-block">Clear filters</a>
        </div>
    @else
        <div class="mb-6 text-sm text-ink-soft">{{ $products->count() }} {{ \Illuminate\Support\Str::plural('product', $products->count()) }}</div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach($products as $product)
                <x-product-card :product="$product"/>
            @endforeach
        </div>
    @endif
</section>

@endsection
