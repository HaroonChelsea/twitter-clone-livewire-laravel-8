<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;

class DarkMode extends Component
{
    public $on=false;
    public function mount(Request $request){
        if($request->session()->get('darkMode')){
            $this->on = $request->session()->get('darkMode');
        }else {
            $request->session()->put('darkMode', $this->on);
        }
    }
    public function toggleMode(Request $request){
        $this->on = !$this->on;
        $request->session()->put('darkMode', $this->on);
        return redirect()->to('/home');
    }
    public function render()
    {
        return view('livewire.dark-mode');
    }
}
