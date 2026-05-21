@extends('layouts.app')

@section('title', $brand['name'] . ' — Global Market')

@section('content')

<section class="relative {{ ($brand['house'] ?? false) ? 'bg-brand-green-deep text-cream' : 'bg-grain' }} overflow-hidden">
    @if($brand['house'] ?? false)
        <div class="absolute inset-0 opacity-25 bg-[radial-gradient(circle_at_top_right,_#F5C518,_transparent_55%)]"></div>
    @endif

    <div class="container-x py-20 lg:py-28 relative">
        <a href="{{ route('shop.index') }}" class="text-xs uppercase tracking-widest opacity-75 hover:opacity-100">← All brands</a>

        @if($brand['house'] ?? false)
            <span class="pill mt-4 !bg-brand-gold !text-ink !ring-brand-gold/40">House brand</span>
            <h1 class="mt-4 font-script text-6xl sm:text-7xl lg:text-9xl text-brand-gold break-words">{{ $brand['name'] }}</h1>
        @else
            <span class="pill mt-4">Brand</span>
            <h1 class="mt-4 font-display text-4xl sm:text-5xl lg:text-7xl break-words">{{ $brand['name'] }}</h1>
        @endif

        <p class="mt-4 text-base sm:text-lg max-w-2xl {{ ($brand['house'] ?? false) ? 'text-cream/85' : 'text-ink-soft' }}">{{ $brand['blurb'] }}</p>
        <p class="mt-3 text-xs uppercase tracking-widest opacity-75">From {{ $brand['country'] }}</p>
    </div>

    @if($brand['house'] ?? false)
        <div class="kente-divider"></div>
    @endif
</section>

<section class="container-x py-16">
    @if($products->isEmpty())
        <p class="text-center py-12 text-ink-soft">No products listed under this brand yet.</p>
    @else
        <h2 class="font-display text-2xl mb-6 text-ink">{{ $products->count() }} {{ \Illuminate\Support\Str::plural('product', $products->count()) }}</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach($products as $product)
                <x-product-card :product="$product" :brand="$brand"/>
            @endforeach
        </div>
    @endif
</section>

@endsection
