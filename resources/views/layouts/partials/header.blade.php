<header x-data="{ open: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 8)"
        :class="scrolled ? 'shadow-card backdrop-blur' : ''"
        class="sticky top-0 z-40 bg-cream/95 transition-shadow">
    <div class="container-x flex items-center justify-between py-4 lg:py-5">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center shrink-0" aria-label="Global Market — Home">
            <img src="{{ asset('images/brand/logo-global-market.svg') }}"
                 alt="Global Market by New Century Imports"
                 class="h-12 lg:h-14 w-auto">
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden lg:flex items-center gap-8 text-[14px] font-semibold uppercase tracking-wider text-ink-soft">
            <a href="{{ route('home') }}" class="hover:text-brand-green {{ request()->routeIs('home') ? 'text-brand-green' : '' }}">Home</a>
            <a href="{{ route('shop.index') }}" class="hover:text-brand-green {{ request()->routeIs('shop.*') ? 'text-brand-green' : '' }}">Shop</a>
            <a href="{{ route('shop.brand', 'tembo') }}" class="hover:text-brand-green">Tembo</a>
            <a href="{{ route('our-story') }}" class="hover:text-brand-green {{ request()->routeIs('our-story') ? 'text-brand-green' : '' }}">Our Story</a>
            <a href="{{ route('wholesale') }}" class="hover:text-brand-green {{ request()->routeIs('wholesale') ? 'text-brand-green' : '' }}">Wholesale</a>
            <a href="{{ route('contact') }}" class="hover:text-brand-green {{ request()->routeIs('contact') ? 'text-brand-green' : '' }}">Contact</a>
        </nav>

        {{-- Right side CTA + mobile toggle --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('inquire') }}" class="hidden lg:inline-flex btn-primary py-2.5 px-5 text-xs">
                Request a quote
            </a>

            <button @click="open = !open" type="button"
                    class="lg:hidden inline-flex items-center justify-center w-10 h-10 rounded-full bg-brand-green text-white"
                    aria-label="Open menu" :aria-expanded="open">
                <svg x-show="!open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="4" y1="7" x2="20" y2="7"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="17" x2="20" y2="17"/></svg>
                <svg x-show="open" x-cloak width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="6" y1="6" x2="18" y2="18"/><line x1="6" y1="18" x2="18" y2="6"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile nav --}}
    <div x-show="open" x-cloak x-transition class="lg:hidden border-t border-sand bg-cream">
        <nav class="container-x py-4 flex flex-col text-base font-semibold">
            <a href="{{ route('home') }}" class="py-3 border-b border-sand">Home</a>
            <a href="{{ route('shop.index') }}" class="py-3 border-b border-sand">Shop</a>
            <a href="{{ route('shop.brand', 'tembo') }}" class="py-3 border-b border-sand">Tembo</a>
            <a href="{{ route('our-story') }}" class="py-3 border-b border-sand">Our Story</a>
            <a href="{{ route('wholesale') }}" class="py-3 border-b border-sand">Wholesale</a>
            <a href="{{ route('contact') }}" class="py-3 border-b border-sand">Contact</a>
            <a href="{{ route('inquire') }}" class="mt-4 btn-primary">Request a quote</a>
        </nav>
    </div>

    {{-- Kente accent strip under header --}}
    <div class="kente-divider"></div>
</header>
