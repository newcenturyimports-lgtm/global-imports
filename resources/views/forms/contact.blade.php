@extends('layouts.app')

@section('title', 'Contact — Global Market & New Century Imports')

@section('content')

<section class="bg-grain">
    <div class="container-x py-16 lg:py-20">
        <span class="pill">Say hello</span>
        <h1 class="mt-5 font-display text-3xl sm:text-4xl lg:text-6xl text-ink text-balance">We'd love to hear <em class="text-brand-red font-script not-italic">from you</em>.</h1>
        <p class="mt-4 max-w-2xl text-base sm:text-lg text-ink-soft">
            Visit our Overland Park storefront, call any of our offices, or drop us a note —
            we'll get back to you within one business day.
        </p>
    </div>
</section>

<section class="container-x py-12 lg:py-16 grid lg:grid-cols-12 gap-10">
    <div class="lg:col-span-7">
        <div class="rounded-3xl bg-white ring-1 ring-sand p-8 lg:p-10">
            <h2 class="font-display text-2xl text-ink mb-6">Send us a message</h2>
            <x-inquiry-form type="contact" cta="Send message"/>
        </div>
    </div>

    <aside class="lg:col-span-5 space-y-6">
        <div class="rounded-2xl bg-white ring-1 ring-sand overflow-hidden">
            <iframe
                src="https://www.google.com/maps?q=9930+W+87th+St,+Overland+Park,+KS+66212&output=embed"
                width="100%" height="280" style="border:0;" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="Global Market location"></iframe>
            <div class="p-6">
                <div class="text-xs font-semibold uppercase tracking-widest text-brand-red">Retail store</div>
                <div class="font-display text-xl text-ink mt-1">Global Market</div>
                <p class="text-sm text-ink-soft mt-1">9930 W 87th Street<br>Overland Park, KS 66212</p>
                <p class="text-sm text-ink-soft mt-2">Mon–Sat &middot; 9 am – 8 pm</p>
            </div>
        </div>

        <div class="rounded-2xl bg-brand-green-deep text-cream p-8">
            <h3 class="font-display text-xl text-brand-gold">Other locations</h3>
            <div class="mt-4 space-y-4 text-sm">
                <div>
                    <div class="font-semibold text-white">NCI HQ — Overland Park</div>
                    <div class="text-cream/80">9926 W 87th St, Overland Park, KS 66212</div>
                    <a href="tel:+19132279959" class="hover:text-brand-gold">+1 (913) 227-9959</a>
                </div>
                <div>
                    <div class="font-semibold text-white">Wichita branch</div>
                    <div class="text-cream/80">2120 N. Woodlawn St. Ste. 314, Wichita, KS 67208</div>
                </div>
                <div>
                    <div class="font-semibold text-white">Kenya office</div>
                    <div class="text-cream/80">PO Box 6070-80200, Malindi</div>
                    <a href="tel:+254724512396" class="hover:text-brand-gold">+254 724 512-396</a>
                </div>
                <div>
                    <a href="mailto:newcenturyimports@gmail.com" class="link-underline hover:text-brand-gold">newcenturyimports@gmail.com</a>
                </div>
            </div>
        </div>
    </aside>
</section>

@endsection
