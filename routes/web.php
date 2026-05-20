<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/',                       [CatalogController::class, 'home'])->name('home');

Route::get('/shop',                   [CatalogController::class, 'shop'])->name('shop.index');
Route::get('/shop/category/{slug}',   [CatalogController::class, 'category'])->name('shop.category');
Route::get('/shop/brand/{slug}',      [CatalogController::class, 'brand'])->name('shop.brand');
Route::get('/product/{slug}',         [CatalogController::class, 'product'])->name('product.show');

Route::view('/our-story', 'pages.our-story')->name('our-story');

Route::get('/wholesale',              [InquiryController::class, 'showWholesale'])->name('wholesale');
Route::get('/contact',                [InquiryController::class, 'showContact'])->name('contact');
Route::get('/inquire/{product?}',     [InquiryController::class, 'showInquire'])->name('inquire');
Route::post('/inquire',               [InquiryController::class, 'submit'])->name('inquire.submit');
Route::get('/thanks',                 [InquiryController::class, 'thanks'])->name('inquire.thanks');
