<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CatalogController extends Controller
{
    public function home()
    {
        return view('home', [
            'featured' => $this->products()->filter(fn ($p) => $p['featured'] ?? false)->values(),
            'brands'   => $this->brands(),
            'categories' => $this->categories(),
            'productCount' => $this->products()->count(),
        ]);
    }

    public function shop(Request $request)
    {
        $products = $this->products();

        if ($brand = $request->get('brand')) {
            $products = $products->where('brand', $brand);
        }
        if ($category = $request->get('category')) {
            $products = $products->where('category', $category);
        }
        if ($origin = $request->get('origin')) {
            $products = $products->filter(fn ($p) => str_contains(strtolower($p['origin']), strtolower($origin)));
        }
        if ($q = $request->get('q')) {
            $products = $products->filter(fn ($p) =>
                str_contains(strtolower($p['name']), strtolower($q))
                || str_contains(strtolower($p['short'] ?? ''), strtolower($q))
            );
        }

        return view('shop.index', [
            'products' => $products->values(),
            'brands' => $this->brands(),
            'categories' => $this->categories(),
            'filters' => $request->only(['brand', 'category', 'origin', 'q']),
        ]);
    }

    public function category(string $slug)
    {
        $category = $this->categories()->firstWhere('slug', $slug);
        abort_unless($category, 404);

        return view('shop.category', [
            'category' => $category,
            'products' => $this->products()->where('category', $slug)->values(),
        ]);
    }

    public function brand(string $slug)
    {
        $brand = $this->brands()->firstWhere('slug', $slug);
        abort_unless($brand, 404);

        return view('shop.brand', [
            'brand' => $brand,
            'products' => $this->products()->where('brand', $slug)->values(),
        ]);
    }

    public function product(string $slug)
    {
        $product = $this->products()->firstWhere('slug', $slug);
        abort_unless($product, 404);

        $brand = $this->brands()->firstWhere('slug', $product['brand']);
        $category = $this->categories()->firstWhere('slug', $product['category']);

        $related = $this->products()
            ->where('slug', '!=', $slug)
            ->where('category', $product['category'])
            ->take(4)
            ->values();

        return view('product.show', compact('product', 'brand', 'category', 'related'));
    }

    /* ============== helpers ============== */

    protected function products(): Collection
    {
        return collect(config('catalog.products'));
    }

    protected function brands(): Collection
    {
        return collect(config('catalog.brands'));
    }

    protected function categories(): Collection
    {
        return collect(config('catalog.categories'));
    }
}
