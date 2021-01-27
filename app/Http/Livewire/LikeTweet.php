<?php

namespace App\Http\Livewire;

use Auth;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
use Livewire\Component;

class LikeTweet extends Component
{
    public $tweet,$tweetLike;
    public function mount($tweet,$tweetLike){
        $this->tweet = $tweet;
        $this->tweetLike = $tweetLike;
    }
    public function toggleLike(){
        if($this->tweet->isLikedBy(Auth::user())){
            $this->tweet->removeLike(Auth::user());
            $this->emit('updateTweets');
        }else {
            $this->tweet->like(Auth::user());
            $this->emit('updateTweets');
        }
    }
    public function render()
    {
        return view('livewire.like-tweet');
    }
}
