<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tweet;

class TweetShow extends Component
{
    public $tweetId;
    public function mount($tweetId){
        $this->tweetId = $tweetId;
    }
    public function render()
    {
        return view('livewire.tweet-show');
    }
}
