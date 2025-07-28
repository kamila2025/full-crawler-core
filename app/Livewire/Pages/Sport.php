<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\SportMatch;

class Sport extends Component
{
    public function render()
    {
        return view('livewire.pages.sport')
            ->layout('components.layouts.app', [
                'title' => '歷史數據',
            ]);
    }
}
