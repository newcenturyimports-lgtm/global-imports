@props(['product', 'brand' => null])

@php
    $brand   = $brand ?? collect(config('catalog.brands'))->firstWhere('slug', $product['brand']);
    $imgPath = 'images/products/'.$product['image'];
    $imgFull = public_path($imgPath);
    $hasImg  = file_exists($imgFull);
@endphp

<a href="{{ route('product.show', $product['slug']) }}" class="card group p-4 sm:p-5">

    {{-- Product image / placeholder --}}
    <div class="relative aspect-square overflow-hidden rounded-xl bg-cream flex items-center justify-center">
        @if($hasImg)
            <img src="{{ asset($imgPath) }}" alt="{{ $product['name'] }}"
                 class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                 loading="lazy">
        @else
            <div class="text-center px-4">
                <div class="font-script text-2xl text-brand-green/70">{{ $brand['name'] ?? '' }}</div>
                <div class="mt-2 font-display text-sm text-ink-soft">{{ $product['name'] }}</div>
            </div>
        @endif

        @if(!empty($product['badges']))
            <div class="absolute top-3 left-3 flex flex-col gap-1.5">
                @foreach($product['badges'] as $badge)
                    <span class="ribbon">{{ $badge }}</span>
                @endforeach
            </div>
        @endif
    </div>

    <div class="mt-4">
        <div class="text-[11px] font-semibold uppercase tracking-widest text-brand-green-dark truncate">{{ $brand['name'] ?? '' }}</div>
        <h3 class="mt-1 font-display text-base sm:text-lg leading-tight text-ink line-clamp-2">{{ $product['name'] }}</h3>
    </div>

    <p class="mt-2 text-xs sm:text-sm text-ink-soft line-clamp-2">{{ $product['short'] ?? '' }}</p>

    <div class="mt-3 flex flex-wrap items-center gap-x-2 gap-y-1 text-[11px] text-ink-soft/80">
        @if(!empty($product['weight']))
            <span class="font-semibold text-ink-soft">{{ $product['weight'] }}</span>
            <span class="opacity-40">·</span>
        @endif
        <span>From {{ $product['origin'] }}</span>
    </div>

    <div class="mt-3 inline-flex items-center gap-1 text-xs font-semibold text-brand-red group-hover:gap-2 transition-all">
        View details
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </div>
</a>
