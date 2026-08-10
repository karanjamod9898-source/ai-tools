<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OnlineToolController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->middleware('admin')
    ->name('admin.dashboard');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/tool/{id}', [ToolController::class, 'showById'])->name('tool.show');
Route::resource('categories', CategoryController::class)->only(['index', 'show']);
Route::resource('tools', ToolController::class)->only(['index', 'show']);
Route::resource('online-tools', OnlineToolController::class)->only(['index', 'show']);
Route::resource('blog', BlogController::class)->only(['index', 'show']);

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');

// Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// 

// Contact Page
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact Form Submit
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 


Route::resource('newsletter', NewsletterController::class)->only(['store']);
Route::resource('reviews', ReviewController::class)->only(['store']);
Route::resource('favorites', FavoriteController::class)->only(['store', 'destroy']);

Route::fallback(function () {
    return redirect()->route('home');
})->name('fallback');
