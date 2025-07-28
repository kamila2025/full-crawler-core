<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pages\Home::class)->name('home');
Route::get('/terms', App\Livewire\Pages\Terms::class)->name('terms');
Route::get('/privacy', App\Livewire\Pages\Privacy::class)->name('privacy');

Route::get('/login', App\Livewire\Pages\Login::class)->name('login');
Route::get('/register', App\Livewire\Pages\Register::class)->name('register');

Route::get('/logout', function () {
    auth('member')->logout();

    return redirect()->to(route('home'));
})->name('logout');
