@extends('layouts.app')

@section('title', 'Global Market — World Pantry in Overland Park, Kansas')

@section('content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden bg-grain">
    <div class="container-x py-16 lg:py-24 grid lg:grid-cols-12 gap-10 items-center">
        <div class="lg:col-span-6 animate-fade-up">
            <span class="pill">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-red animate-pulse"></span>
                Family-owned since 2005
            </span>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-[1.05] text-balance text-ink">
                The world's <em class="text-brand-red not-italic font-script text-5xl sm:text-6xl md:text-7xl lg:text-8xl">pantry</em>,
                imported to <span class="text-brand-green">Kansas.</span>
            </h1>

            <p class="mt-6 max-w-xl text-lg text-ink-soft text-pretty">
                African, Caribbean, South American and European groceries — sourced direct,
                stocked weekly, and proudly shared from our shelves to your kitchen.
            </p>

            <div class="mt-8 flex flex-wrap items-center gap-4">
                <a href="{{ route('shop.index') }}" class="btn-primary">
                    Browse the catalog
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </a>
                <a href="{{ route('wholesale') }}" class="btn-ghost">Wholesale inquiries</a>
            </div>

            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-xs font-semibold uppercase tracking-widest text-ink-soft/70">
                <span class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> FDA &amp; USDA compliant</span>
                <span class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-red"></span> Kansas + Kenya offices</span>
                <span class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span> {{ $productCount }}+ products</span>
            </div>
        </div>

        {{-- Hero visual --}}
        <div class="lg:col-span-6 relative">
            <div class="relative rounded-3xl bg-gradient-to-br from-brand-green via-brand-green-dark to-brand-green-deep p-6 lg:p-8 shadow-card-hover overflow-hidden">
                <div class="absolute inset-0 opacity-25 bg-[radial-gradient(circle_at_top_right,_#F5C518,_transparent_60%)]"></div>

                <div class="relative aspect-[4/5] rounded-2xl bg-cream shadow-card-hover overflow-hidden flex items-center justify-center">
                    @if(file_exists(public_path('images/lifestyle/hero.jpg')))
                        <img src="{{ asset('images/lifestyle/hero.jpg') }}" alt="A Global Market product family"
                             class="absolute inset-0 w-full h-full object-cover">
                    @else
                        <div class="text-center px-8">
                            <img src="{{ asset('images/brand/cart-mark.svg') }}" class="w-20 h-20 mx-auto mb-6 opacity-50" alt="">
                            <p class="font-script text-3xl text-brand-green">Hero photo</p>
                            <p class="text-xs text-ink-soft mt-2">Drop your hero shot at<br><code>public/images/lifestyle/hero.jpg</code></p>
                        </div>
                    @endif
                </div>

                <div class="kente-diamonds mt-5 rounded-full opacity-90"></div>
            </div>

            <div class="hidden md:block absolute -left-6 bottom-10 bg-white rounded-2xl shadow-card-hover p-4 max-w-[220px]">
                <div class="ribbon mb-2">House brand</div>
                <p class="font-display text-lg leading-tight">Tembo Jasmine Rice</p>
                <p class="text-xs text-ink-soft mt-1">Premium 5 lb grain</p>
            </div>
        </div>
    </div>
</section>

{{-- ============ TRUST STRIP ============ --}}
<section class="bg-brand-green-deep text-cream py-6">
    <div class="container-x flex flex-wrap items-center justify-around gap-6 text-sm">
        <div class="flex items-center gap-3"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#F5C518" stroke-width="2"><path d="M12 22s8-7 8-13a8 8 0 1 0-16 0c0 6 8 13 8 13z"/><circle cx="12" cy="9" r="3"/></svg> Direct-sourced from origin</div>
        <div class="flex items-center gap-3"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#F5C518" stroke-width="2"><path d="M3 12h4l3-9 4 18 3-9h4"/></svg> Weekly fresh shipments</div>
        <div class="flex items-center gap-3"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#F5C518" stroke-width="2"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/></svg> Retail &amp; wholesale</div>
        <div class="flex items-center gap-3"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#F5C518" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18"/></svg> Africa · Caribbean · S. America · Europe</div>
    </div>
</section>

{{-- ============ FEATURED PRODUCTS ============ --}}
<section class="container-x py-20 lg:py-28">
    <div class="flex items-end justify-between gap-6 mb-10">
        <div>
            <span class="pill">Pantry picks</span>
            <h2 class="mt-4 font-display text-4xl sm:text-5xl text-ink">Stocked &amp; loved this week.</h2>
        </div>
        <a href="{{ route('shop.index') }}" class="hidden sm:inline-flex link-underline font-semibold text-brand-green">See all {{ $productCount }} products →</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
        @foreach($featured->take(8) as $product)
            <x-product-card :product="$product"/>
        @endforeach
    </div>
</section>

{{-- ============ TEMBO SPOTLIGHT ============ --}}
<section class="relative bg-brand-green-deep text-cream overflow-hidden">
    <div class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_bottom_left,_#F5C518,_transparent_55%)]"></div>
    <div class="kente-divider"></div>

    <div class="container-x py-20 lg:py-28 grid lg:grid-cols-12 gap-12 items-center relative">
        <div class="lg:col-span-7">
            <span class="pill !bg-brand-gold !text-ink !ring-brand-gold/40">House brand</span>
            <h2 class="mt-5 font-script text-5xl sm:text-6xl lg:text-7xl text-brand-gold">Tembo</h2>
            <p class="mt-3 font-display text-2xl sm:text-3xl lg:text-4xl text-balance">Our own line, milled and packed for the American kitchen.</p>
            <p class="mt-5 max-w-xl text-cream/85">
                Tembo is the brand we put our family name behind. Black beans, jasmine rice, uji,
                farina, white corn meal — staples sourced from trusted growers and packed to a
                single standard: quality at its best.
            </p>
            <a href="{{ route('shop.brand', 'tembo') }}" class="mt-7 btn bg-brand-gold text-ink hover:bg-brand-gold-dark inline-flex">
                Explore the Tembo line
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>

        <div class="lg:col-span-5 grid grid-cols-2 gap-4">
            @foreach(collect(config('catalog.products'))->where('brand', 'tembo')->take(4) as $p)
                <a href="{{ route('product.show', $p['slug']) }}" class="group block bg-cream rounded-2xl p-4 hover:-translate-y-1 transition-transform">
                    <div class="aspect-square rounded-xl bg-white flex items-center justify-center text-center p-3">
                        @if(file_exists(public_path('images/products/'.$p['image'])))
                            <img src="{{ asset('images/products/'.$p['image']) }}" class="w-full h-full object-contain" alt="{{ $p['name'] }}">
                        @else
                            <span class="font-script text-2xl text-brand-green">Tembo</span>
                        @endif
                    </div>
                    <div class="mt-3 font-display text-sm text-ink leading-tight">{{ str_replace('Tembo · ', '', str_replace('Tembo ', '', $p['name'])) }}</div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="kente-divider"></div>
</section>

{{-- ============ CATEGORIES ============ --}}
<section class="container-x py-20 lg:py-28">
    <div class="text-center max-w-2xl mx-auto">
        <span class="pill">Shop by category</span>
        <h2 class="mt-5 font-display text-4xl lg:text-5xl text-ink">Pantry, organized.</h2>
        <p class="mt-3 text-ink-soft">From staples to specialty — every shelf at Global Market, browseable from here.</p>
    </div>

    <div class="mt-12 grid grid-cols-2 lg:grid-cols-5 gap-5">
        @foreach($categories as $cat)
            @php $count = collect(config('catalog.products'))->where('category', $cat['slug'])->count(); @endphp
            <a href="{{ route('shop.category', $cat['slug']) }}"
               class="group relative overflow-hidden rounded-2xl bg-white ring-1 ring-sand p-6 hover:-translate-y-1 hover:shadow-card-hover hover:ring-brand-green/30 transition-all">
                <div class="w-12 h-12 rounded-xl bg-brand-green/10 text-brand-green-dark flex items-center justify-center mb-4">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg>
                </div>
                <h3 class="font-display text-xl text-ink">{{ $cat['name'] }}</h3>
                <p class="mt-2 text-xs text-ink-soft">{{ $cat['blurb'] }}</p>
                <div class="mt-4 text-xs font-semibold text-brand-red">{{ $count }} {{ \Illuminate\Support\Str::plural('product', $count) }} →</div>
            </a>
        @endforeach
    </div>
</section>

{{-- ============ BRAND STRIP ============ --}}
<section class="bg-cream border-y border-sand">
    <div class="container-x py-12">
        <div class="text-center mb-8">
            <span class="pill">Brands we carry</span>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-ink-soft">
            @foreach($brands as $brand)
                <a href="{{ route('shop.brand', $brand['slug']) }}"
                   class="font-display text-xl lg:text-2xl hover:text-brand-green transition-colors {{ ($brand['house'] ?? false) ? 'text-brand-red font-script text-3xl lg:text-4xl' : '' }}">
                    {{ $brand['name'] }}
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ STORY / WHOLESALE CTA ============ --}}
<section class="container-x py-20 lg:py-28 grid lg:grid-cols-2 gap-10">
    <div class="rounded-3xl bg-white ring-1 ring-sand p-10 lg:p-14 relative overflow-hidden">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-red/10 rounded-full"></div>
        <span class="pill">Our story</span>
        <h3 class="mt-5 font-display text-3xl lg:text-4xl text-ink">A family business, two continents.</h3>
        <p class="mt-4 text-ink-soft">
            NCI was founded by Irene Waithithu Waithaka in Overland Park, Kansas in 2005. Twenty years on,
            we still source the way we started — direct from the growers, blenders and millers we trust by name.
        </p>
        <a href="{{ route('our-story') }}" class="mt-7 btn-secondary inline-flex">Read the story</a>
    </div>

    <div class="rounded-3xl bg-brand-red text-white p-10 lg:p-14 relative overflow-hidden">
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-gold/30 rounded-full"></div>
        <span class="pill !bg-white/20 !text-white !ring-white/30">For retailers &amp; restaurants</span>
        <h3 class="mt-5 font-display text-3xl lg:text-4xl">Stock the world's pantry on your shelf.</h3>
        <p class="mt-4 text-white/90">
            We ship LCL, FCL and consolidated cargo. FDA, USDA and customs documentation are handled in-house.
            Tell us what you need.
        </p>
        <a href="{{ route('wholesale') }}" class="mt-7 btn bg-white text-brand-red hover:bg-cream inline-flex">Request wholesale quote</a>
    </div>
</section>

@endsection
