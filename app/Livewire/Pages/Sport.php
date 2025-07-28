<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\SportMatch;

class Sport extends Component
{
    public $matches;

    public function mount()
    {
        $this->matches = SportMatch::orderBy('match_time')->get();
    }

    public function render()
    {
        return view('livewire.pages.sport')
            ->layout('components.layouts.app', [
                'title' => '所有賽事',
            ]);
    }
}
