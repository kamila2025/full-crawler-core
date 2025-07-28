<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class SportDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.sport-detail')
            ->layout('components.layouts.app', [
                'title' => '賽事詳情',
            ]);
    }
}
