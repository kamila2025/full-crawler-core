<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.pages.about')
            ->layout('components.layouts.app', [
                'title' => '關於我們',
            ]);
    }
}
