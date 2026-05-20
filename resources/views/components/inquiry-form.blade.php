@props([
    'type'        => 'contact',
    'showCompany' => false,
    'showProduct' => false,
    'product'     => null,
    'cta'         => 'Send message',
])

<form method="POST" action="{{ route('inquire.submit') }}" class="space-y-4">
    @csrf

    <input type="hidden" name="type" value="{{ $type }}">
    {{-- honeypot --}}
    <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden">

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Name</label>
            <input type="text" name="name" required value="{{ old('name') }}"
                   class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Email</label>
            <input type="email" name="email" required value="{{ old('email') }}"
                   class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
        </div>
    </div>

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Phone <span class="opacity-50">(optional)</span></label>
            <input type="tel" name="phone" value="{{ old('phone') }}"
                   class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
        </div>
        @if($showCompany)
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Company / Store</label>
                <input type="text" name="company" value="{{ old('company') }}"
                       class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
            </div>
        @endif
    </div>

    @if($showProduct)
        <div class="grid sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Product of interest</label>
                <input type="text" name="product" value="{{ old('product', $product['name'] ?? '') }}"
                       class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Quantity / Volume</label>
                <input type="text" name="quantity" placeholder="e.g. 10 cases / 1 pallet" value="{{ old('quantity') }}"
                       class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">
            </div>
        </div>
    @endif

    <div>
        <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Message</label>
        <textarea name="message" rows="5" required
                  class="w-full rounded-xl border-sand focus:border-brand-green focus:ring-brand-green/30">{{ old('message') }}</textarea>
    </div>

    @if ($errors->any())
        <div class="rounded-xl bg-brand-red/10 ring-1 ring-brand-red/30 text-brand-red-dark text-sm p-4">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
        </div>
    @endif

    <button type="submit" class="btn-primary w-full sm:w-auto">{{ $cta }}</button>
</form>
