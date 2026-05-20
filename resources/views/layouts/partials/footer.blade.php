<footer class="mt-24 bg-brand-green-deep text-cream">
    <div class="kente-divider"></div>

    <div class="container-x py-16 grid gap-12 lg:grid-cols-12">

        {{-- Brand block --}}
        <div class="lg:col-span-4">
            <img src="{{ asset('images/brand/logo-global-market.svg') }}"
                 alt="Global Market by New Century Imports"
                 class="h-14 w-auto bg-cream rounded-lg p-2 inline-block">

            <p class="mt-6 text-sm text-cream/80 leading-relaxed max-w-sm">
                A world pantry curated by <strong class="text-white">New Century Imports Inc.</strong> —
                family-owned in Overland Park, Kansas since 2005. Bringing the flavors of Africa,
                the Caribbean, South America and Europe to American kitchens.
            </p>

            <div class="mt-6 flex items-center gap-3 text-xs text-cream/70">
                <span class="pill bg-cream/10 text-cream ring-cream/20">FDA compliant</span>
                <span class="pill bg-cream/10 text-cream ring-cream/20">USDA compliant</span>
                <span class="pill bg-cream/10 text-cream ring-cream/20">Est. 2005</span>
            </div>
        </div>

        {{-- Shop links --}}
        <div class="lg:col-span-2">
            <h4 class="font-display text-lg text-brand-gold mb-4">Shop</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('shop.index') }}" class="hover:text-brand-gold">All products</a></li>
                <li><a href="{{ route('shop.brand', 'tembo') }}" class="hover:text-brand-gold">Tembo (Own brand)</a></li>
                <li><a href="{{ route('shop.category', 'teas-beverages') }}" class="hover:text-brand-gold">Teas &amp; Beverages</a></li>
                <li><a href="{{ route('shop.category', 'spices-seasonings') }}" class="hover:text-brand-gold">Spices</a></li>
                <li><a href="{{ route('shop.category', 'grains-flours') }}" class="hover:text-brand-gold">Grains &amp; Flours</a></li>
                <li><a href="{{ route('shop.category', 'canned-goods') }}" class="hover:text-brand-gold">Canned goods</a></li>
            </ul>
        </div>

        {{-- Company --}}
        <div class="lg:col-span-2">
            <h4 class="font-display text-lg text-brand-gold mb-4">Company</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('our-story') }}" class="hover:text-brand-gold">Our story</a></li>
                <li><a href="{{ route('wholesale') }}" class="hover:text-brand-gold">Wholesale</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-brand-gold">Contact</a></li>
                <li><a href="{{ route('inquire') }}" class="hover:text-brand-gold">Request a quote</a></li>
            </ul>
        </div>

        {{-- Contact --}}
        <div class="lg:col-span-4">
            <h4 class="font-display text-lg text-brand-gold mb-4">Visit us</h4>
            <div class="space-y-4 text-sm">
                <div>
                    <div class="font-semibold text-white">Global Market — Retail Store</div>
                    <div class="text-cream/80">9930 W 87th Street<br>Overland Park, KS 66212</div>
                </div>
                <div>
                    <div class="font-semibold text-white">NCI Headquarters</div>
                    <div class="text-cream/80">9926 W 87th Street, Overland Park, KS<br>
                        <a href="tel:+19132279959" class="hover:text-brand-gold">+1 (913) 227-9959</a></div>
                </div>
                <div>
                    <div class="font-semibold text-white">Wichita branch</div>
                    <div class="text-cream/80">2120 N. Woodlawn St., Ste. 314<br>Wichita, KS 67208</div>
                </div>
                <div>
                    <a href="mailto:newcenturyimports@gmail.com" class="link-underline hover:text-brand-gold">
                        newcenturyimports@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-cream/10">
        <div class="container-x py-5 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-cream/60">
            <div>&copy; {{ date('Y') }} New Century Imports Inc. All rights reserved.</div>
            <div class="flex items-center gap-4">
                <span>Quality · Value · Satisfaction</span>
            </div>
        </div>
    </div>
</footer>
