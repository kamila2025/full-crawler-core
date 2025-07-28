<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class News extends Component
{
    public function render()
    {
        return view('livewire.pages.news')
            ->layout('components.layouts.app', [
                'title' => '最新公告',
            ]);
    }
}
