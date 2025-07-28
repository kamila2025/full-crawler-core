<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pages\Home::class)->name('home');
//Route::get('/contact', App\Livewire\Pages\Contact::class)->name('contact');
Route::get('/terms', App\Livewire\Pages\Terms::class)->name('terms');
Route::get('/privacy', App\Livewire\Pages\Privacy::class)->name('privacy');

Route::get('/sports', App\Livewire\Pages\Sport::class)->name('sport');
Route::get('/sports/{sport}', App\Livewire\Pages\SportDetail::class)->name('sport-detail');

Route::get('/products', App\Livewire\Pages\Product::class)->name('product');
Route::get('/products/{product}', App\Livewire\Pages\ProductDetail::class)->name('product-detail');

Route::get('/login', App\Livewire\Pages\Login::class)->name('login');
Route::get('/register', App\Livewire\Pages\Register::class)->name('register');

Route::get('/logout', function () {
    auth('member')->logout();

    return redirect()->to(route('home'));
})->name('logout');
