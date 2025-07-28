<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Pages\Home::class);
Route::get('/terms', App\Livewire\Pages\Terms::class);
Route::get('/privacy', App\Livewire\Pages\Privacy::class);

