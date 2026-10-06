<form method="GET" action="{{ route('shop.index') }}" class="space-y-5">
    <div>
        <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Search</label>
        <input type="search" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="e.g. tomato paste, masala, tea…"
               class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
    </div>
    <div>
        <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Brand</label>
        <select name="brand" class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
            <option value="">All brands</option>
            @foreach($brands as $b)
                <option value="{{ $b['slug'] }}" @selected(($filters['brand'] ?? '') === $b['slug'])>{{ $b['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="block text-xs font-semibold uppercase tracking-wider text-ink-soft mb-1.5">Category</label>
        <select name="category" class="w-full rounded-full border-sand focus:border-brand-green focus:ring-brand-green/30 text-sm">
            <option value="">All categories</option>
            @foreach($categories as $c)
                <option value="{{ $c['slug'] }}" @selected(($filters['category'] ?? '') === $c['slug'])>{{ $c['name'] }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex gap-2">
        <button type="submit" class="btn-primary flex-1 !px-4">Filter</button>
        @if(array_filter($filters))
            <a href="{{ route('shop.index') }}" class="btn-ghost !px-3" title="Clear filters">×</a>
        @endif
    </div>
</form>
