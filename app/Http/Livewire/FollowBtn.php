<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\User;
use Livewire\Component;

class FollowBtn extends Component
{
    public $status;
    public User $user;
    public function hydrate(){
        $this->render();
    }
    function mount($status,$user){
        $this->status = $status;
        $this->user = $user;
    }
    public function toggleFollow(){
        Auth::user()->toggleFollow($this->user);
        $this->emit('followUpdate');
    }
    public function render()
    {
        return view('livewire.follow-btn');
    }
}
