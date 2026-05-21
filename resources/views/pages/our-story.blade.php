@extends('layouts.app')

@section('title', 'Our Story — New Century Imports Inc.')
@section('meta_description', 'Family-owned in Overland Park, Kansas since 2005. The story of New Century Imports and Global Market.')

@section('content')

<section class="bg-grain">
    <div class="container-x py-20 lg:py-28 grid lg:grid-cols-12 gap-10 items-end">
        <div class="lg:col-span-7">
            <span class="pill">Est. 2005</span>
            <h1 class="mt-5 font-display text-3xl sm:text-4xl lg:text-7xl text-balance text-ink">A family business, <em class="text-brand-red font-script not-italic">two continents</em>.</h1>
            <p class="mt-5 text-base sm:text-lg text-ink-soft max-w-2xl">
                Twenty years ago, Irene Waithithu Waithaka opened the doors to New Century Imports
                in Overland Park, Kansas — with a simple promise to source the groceries her
                community missed from home. Two decades on, we're still doing exactly that, only
                from a much bigger pantry.
            </p>
        </div>
        <div class="lg:col-span-5 text-sm text-ink-soft space-y-1">
            <p><strong class="text-ink">Founded</strong> &middot; 2005, Overland Park, Kansas</p>
            <p><strong class="text-ink">Proprietor</strong> &middot; Irene Waithithu Waithaka</p>
            <p><strong class="text-ink">Procurement</strong> &middot; Eng. David Mburu Waithaka, Kenya</p>
            <p><strong class="text-ink">Marketing</strong> &middot; Yasmin Mugure, Nairobi</p>
        </div>
    </div>
</section>

<section class="container-x py-16 lg:py-24 grid lg:grid-cols-12 gap-12">
    <div class="lg:col-span-8 prose prose-lg max-w-none text-ink-soft">
        <h2 class="font-display text-ink">What we do</h2>
        <p>
            New Century Imports Inc. (NCI) sources, imports and distributes high-quality grocery,
            specialty and ethnic fast-moving consumer goods from Africa, the Caribbean, South America
            and Europe — into the North American market. We serve a diverse and growing customer base
            through our retail storefront (<strong class="text-ink">Global Market</strong>) and
            wholesale partners across Kansas and beyond.
        </p>

        <h2 class="font-display text-ink mt-12">Vision</h2>
        <p>To be the leading gateway for African and global FMCG brands entering the North American market — through efficient, reliable and culturally inclusive distribution systems.</p>

        <h2 class="font-display text-ink mt-12">Mission</h2>
        <p>To connect global manufacturers with U.S. consumers by offering trustworthy importation services, strong supply-chain compliance, and dependable distribution networks that support product visibility and long-term market growth.</p>

        <h2 class="font-display text-ink mt-12">Operations</h2>
        <ul>
            <li>Product importation (air freight, sea freight LCL &amp; FCL, consolidated cargo, third-party agents)</li>
            <li>Inventory management and last-mile distribution</li>
            <li>Customs clearance support &amp; documentation</li>
            <li>Packaging and labeling coordination</li>
            <li>FDA, USDA and U.S. customs compliance</li>
        </ul>

        <h2 class="font-display text-ink mt-12">Categories we import</h2>
        <ul>
            <li>Processed foods and grains</li>
            <li>Beverages — tea, coffee, juices, malt drinks</li>
            <li>Spices, herbs and seasonings</li>
            <li>Packaged consumer goods</li>
            <li>Specialty cultural foods</li>
        </ul>

        <h2 class="font-display text-ink mt-12">Key suppliers</h2>
        <p>We work directly with reputable global manufacturers including
            Spice World Ltd., Abdiker Wholesalers Ltd., Ketepa Tea, Dormans Coffee, Unga Ltd.,
            Weetabix Ltd, and Royco — among others.</p>
    </div>

    <aside class="lg:col-span-4">
        <div class="sticky top-32 space-y-6">
            <div class="rounded-2xl bg-brand-green-deep text-cream p-8">
                <div class="font-script text-3xl text-brand-gold">Core values</div>
                <ul class="mt-4 space-y-2 text-sm">
                    <li class="flex gap-2"><span class="text-brand-gold">●</span> Transparency</li>
                    <li class="flex gap-2"><span class="text-brand-gold">●</span> Quality assurance</li>
                    <li class="flex gap-2"><span class="text-brand-gold">●</span> Professionalism</li>
                    <li class="flex gap-2"><span class="text-brand-gold">●</span> Supplier &amp; customer loyalty</li>
                    <li class="flex gap-2"><span class="text-brand-gold">●</span> Cultural integration</li>
                </ul>
            </div>

            <div class="rounded-2xl bg-white ring-1 ring-sand p-8">
                <h4 class="font-display text-xl text-ink">Visit Global Market</h4>
                <p class="mt-2 text-sm text-ink-soft">9930 W 87th St<br>Overland Park, KS 66212</p>
                <a href="tel:+19132279959" class="mt-4 link-underline text-brand-green font-semibold text-sm inline-block">+1 (913) 227-9959</a>
                <a href="{{ route('contact') }}" class="mt-4 btn-secondary w-full block text-center">Get directions</a>
            </div>
        </div>
    </aside>
</section>

@endsection
