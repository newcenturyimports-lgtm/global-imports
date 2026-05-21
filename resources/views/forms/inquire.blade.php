@extends('layouts.app')

@section('title', 'Request a quote — Global Market')

@section('content')

<section class="bg-grain">
    <div class="container-x py-16 lg:py-20">
        <span class="pill">Product inquiry</span>
        <h1 class="mt-5 font-display text-3xl sm:text-4xl lg:text-6xl text-ink text-balance">Request a <em class="text-brand-red font-script not-italic">quote</em>.</h1>
        <p class="mt-4 max-w-2xl text-base sm:text-lg text-ink-soft">
            Looking for a specific product, a case quantity or a custom order?
            Drop us the details and we'll respond within one business day.
        </p>
    </div>
</section>

<section class="container-x py-12 lg:py-16 grid lg:grid-cols-12 gap-10">
    <div class="lg:col-span-7">
        <div class="rounded-3xl bg-white ring-1 ring-sand p-8 lg:p-10">
            @if($product)
                <div class="mb-6 flex items-center gap-4 p-4 rounded-2xl bg-cream ring-1 ring-sand">
                    <div class="w-16 h-16 rounded-xl bg-white ring-1 ring-sand flex items-center justify-center overflow-hidden shrink-0">
                        @if(file_exists(public_path('images/products/'.$product['image'])))
                            <img src="{{ asset('images/products/'.$product['image']) }}" class="w-full h-full object-contain" alt="">
                        @else
                            <span class="font-script text-brand-green text-lg">{{ substr($product['name'], 0, 1) }}</span>
                        @endif
                    </div>
                    <div>
                        <div class="text-xs uppercase tracking-widest text-brand-green-dark">Asking about</div>
                        <div class="font-display text-lg">{{ $product['name'] }}</div>
                    </div>
                </div>
            @endif

            <h2 class="font-display text-2xl text-ink mb-6">Your request</h2>
            <x-inquiry-form type="retail" :showProduct="true" :product="$product" cta="Send inquiry"/>
        </div>
    </div>

    <aside class="lg:col-span-5">
        <div class="sticky top-32 rounded-2xl bg-brand-green-deep text-cream p-8">
            <h3 class="font-display text-2xl text-brand-gold">What happens next</h3>
            <ol class="mt-4 space-y-3 text-sm">
                <li><strong class="text-white">1.</strong> Our team reviews your request the same business day.</li>
                <li><strong class="text-white">2.</strong> We confirm availability and quote (including any wholesale tier).</li>
                <li><strong class="text-white">3.</strong> Pickup at Global Market or arrange delivery.</li>
            </ol>
            <div class="mt-6 pt-6 border-t border-cream/15 text-sm">
                Prefer the phone? <a href="tel:+19132279959" class="text-brand-gold link-underline">+1 (913) 227-9959</a>
            </div>
        </div>
    </aside>
</section>

@endsection
