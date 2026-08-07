<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// require __DIR__ . '/auth.php';

Route::get('/', [FrontController::class, 'index'])->name('front.index');

// Standalone pages
Route::get('/about',   [FrontController::class, 'about'])->name('front.about');
Route::get('/services',[FrontController::class, 'services'])->name('front.services');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('front.gallery');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');

// Fleet
Route::get('/fleet',        [FrontController::class, 'fleetList'])->name('front.fleet.index');
Route::get('/fleet/{id}',   [FrontController::class, 'fleetShow'])->name('front.fleet.show');

// Blog
Route::get('/blog',           [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog/load-more', [FrontController::class, 'blogLoadMore'])->name('front.blog.loadMore');
Route::get('/blog/{slug}',    [FrontController::class, 'blogShow'])->name('front.blog.show')
    ->where('slug', '^(?!load-more)[a-z0-9\-]+$');

// Form
Route::post('/postRequest',  [FrontController::class, 'postRequest'])->name('postRequest');

// Sitemap
Route::get('/sitemap.xml',   [SitemapController::class, 'index'])->name('sitemap');
