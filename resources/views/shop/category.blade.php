@extends('layouts.app')

@section('title', $category['name'] . ' — Global Market')

@section('content')

<section class="bg-grain">
    <div class="container-x py-20 lg:py-24">
        <a href="{{ route('shop.index') }}" class="text-xs uppercase tracking-widest text-ink-soft hover:text-brand-green">← All categories</a>
        <span class="pill mt-4">Category</span>
        <h1 class="mt-4 font-display text-4xl sm:text-5xl lg:text-7xl text-ink break-words">{{ $category['name'] }}</h1>
        <p class="mt-4 text-base sm:text-lg text-ink-soft max-w-2xl">{{ $category['blurb'] }}</p>
    </div>
</section>

<section class="container-x py-16">
    @if($products->isEmpty())
        <p class="text-center py-12 text-ink-soft">No products in this category yet.</p>
    @else
        <h2 class="font-display text-2xl mb-6 text-ink">{{ $products->count() }} {{ \Illuminate\Support\Str::plural('product', $products->count()) }}</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach($products as $product)
                <x-product-card :product="$product"/>
            @endforeach
        </div>
    @endif
</section>

@endsection
