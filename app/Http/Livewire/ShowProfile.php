<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
class ShowProfile extends Component
{
    public User $user;
    protected $listeners = ['followUpdate'];
    public function mount($user){
        $this->user = $user;
    }
    public function followUpdate(){
        $this->render();
    }
    public function render()
    {
        return view('livewire.show-profile');
    }
}
