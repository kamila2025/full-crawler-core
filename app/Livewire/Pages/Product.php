<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.pages.product')
            ->layout('components.layouts.app', [
                'title' => '熱賣商品',
            ]);
    }
}
