@extends('layouts.app')

@section('title', 'Wholesale Inquiries — New Century Imports')
@section('meta_description', 'Stock NCI products in your shop, restaurant or distribution channel. Get a wholesale quote.')

@section('content')

<section class="bg-grain">
    <div class="container-x py-16 lg:py-20">
        <span class="pill">For retailers, restaurants &amp; distributors</span>
        <h1 class="mt-5 font-display text-3xl sm:text-4xl lg:text-6xl text-ink text-balance">Stock the world's pantry <em class="text-brand-red font-script not-italic">on your shelf</em>.</h1>
        <p class="mt-4 max-w-2xl text-base sm:text-lg text-ink-soft">
            Tell us what you're looking for — categories, volumes, delivery cadence —
            and our procurement team will follow up with a quote and product sheet within two business days.
        </p>
    </div>
</section>

<section class="container-x py-12 lg:py-16 grid lg:grid-cols-12 gap-10">
    <div class="lg:col-span-7">
        <div class="rounded-3xl bg-white ring-1 ring-sand p-8 lg:p-10">
            <h2 class="font-display text-2xl text-ink mb-6">Request a wholesale quote</h2>
            <x-inquiry-form type="wholesale" :showCompany="true" :showProduct="true" cta="Send wholesale inquiry"/>
        </div>
    </div>

    <aside class="lg:col-span-5 space-y-6">
        <div class="rounded-2xl bg-brand-green-deep text-cream p-8">
            <h3 class="font-display text-2xl text-brand-gold">What we ship</h3>
            <ul class="mt-4 space-y-3 text-sm">
                <li>✓ LCL and FCL sea freight, air freight</li>
                <li>✓ Consolidated cargo through trusted partners</li>
                <li>✓ Full FDA / USDA / U.S. customs documentation</li>
                <li>✓ Private-label opportunities (our Tembo line)</li>
                <li>✓ Custom packaging and labeling coordination</li>
            </ul>
        </div>

        <div class="rounded-2xl bg-white ring-1 ring-sand p-8">
            <h3 class="font-display text-xl text-ink">Prefer to chat?</h3>
            <p class="mt-2 text-sm text-ink-soft">Reach our procurement team directly.</p>
            <div class="mt-4 space-y-2 text-sm">
                <a href="tel:+19132279959" class="block link-underline text-brand-green font-semibold">+1 (913) 227-9959 (USA)</a>
                <a href="tel:+254724512396" class="block link-underline text-brand-green font-semibold">+254 724 512-396 (Kenya)</a>
                <a href="mailto:newcenturyimports@gmail.com" class="block link-underline text-brand-green">newcenturyimports@gmail.com</a>
            </div>
        </div>
    </aside>
</section>

@endsection
