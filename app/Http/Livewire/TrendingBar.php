<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TrendingBar extends Component
{
    protected $listeners = ['followUpdate'];
    public function followUpdate(){
        $this->render();
    }
    public function render()
    {
        return view('livewire.trending-bar');
    }
}
