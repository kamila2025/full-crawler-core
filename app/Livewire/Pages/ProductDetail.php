<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class ProductDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.product-detail')
            ->layout('components.layouts.app', [
                'title' => '熱賣商品',
            ]);
    }
}
