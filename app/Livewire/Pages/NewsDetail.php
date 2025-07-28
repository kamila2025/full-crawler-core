<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class NewsDetail extends Component
{
    public function render()
    {
        return view('livewire.pages.news-detail')
            ->layout('components.layouts.app', [
                'title' => '賽事新聞',
            ]);
    }
}
