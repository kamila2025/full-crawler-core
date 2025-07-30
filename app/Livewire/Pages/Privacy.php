<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Privacy extends Component
{
    public function render()
    {
        return view('livewire.pages.privacy')
            ->layout('components.layouts.app', [
                'title' => '隱私權政策',
            ]);
    }
}
