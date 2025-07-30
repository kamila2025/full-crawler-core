<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home')
            ->layout('components.layouts.app', [
                'title' => '首頁',
            ]);
    }
}
