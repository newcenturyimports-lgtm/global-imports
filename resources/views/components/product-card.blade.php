@props(['product', 'brand' => null])

@php
    $brand   = $brand ?? collect(config('catalog.brands'))->firstWhere('slug', $product['brand']);
    $imgPath = 'images/products/'.$product['image'];
    $imgFull = public_path($imgPath);
    $hasImg  = file_exists($imgFull);
@endphp

<a href="{{ route('product.show', $product['slug']) }}" class="card group p-3 sm:p-4 h-full flex flex-col">

    {{-- Product image / placeholder --}}
    <div class="relative aspect-[3/4] overflow-hidden rounded-lg bg-white flex items-center justify-center p-1.5 sm:p-2">
        @if($hasImg)
            <img src="{{ asset($imgPath) }}" alt="{{ $product['name'] }}"
                 class="max-w-full max-h-full object-contain group-hover:scale-105 transition-transform duration-500"
                 loading="lazy">
        @else
            <div class="text-center px-2">
                <div class="font-script text-lg text-brand-green/70">{{ $brand['name'] ?? '' }}</div>
                <div class="mt-1 font-display text-xs text-ink-soft">{{ $product['name'] }}</div>
            </div>
        @endif

        @if(!empty($product['badges']))
            <div class="absolute top-1.5 left-1.5 flex flex-col gap-1">
                @foreach($product['badges'] as $badge)
                    <span class="ribbon text-[9px] px-1.5 py-0.5">{{ $badge }}</span>
                @endforeach
            </div>
        @endif
    </div>

    <div class="mt-2.5 flex-1 flex flex-col">
        <div class="text-[10px] font-semibold uppercase tracking-widest text-brand-green-dark truncate leading-4 h-4">{{ $brand['name'] ?? '' }}</div>
        <h3 class="mt-0.5 font-display text-sm leading-tight text-ink line-clamp-2 min-h-[2.5em]">{{ $product['name'] }}</h3>

        @if(!empty($product['price']))
            <div class="mt-1.5 flex items-baseline gap-1">
                <span class="font-display text-base text-brand-red">${{ number_format($product['price'], 2) }}</span>
                <span class="text-[9px] uppercase tracking-wide text-ink-soft/60">est. retail</span>
            </div>
        @endif

        <div class="mt-auto pt-1.5 text-[10px] text-ink-soft/80 truncate">
            @if(!empty($product['weight']))
                <span class="font-semibold text-ink-soft">{{ $product['weight'] }}</span>
                <span class="opacity-40">·</span>
            @endif
            <span>{{ $product['origin'] }}</span>
        </div>
    </div>
</a>
