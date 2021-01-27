<?php

namespace App\Http\Livewire;

use Auth;
use Livewire\Component;
use App\Models\User;
use App\Models\Tweet;

class Tweets extends Component
{
    public $tweets;
    public $getTweet;
    public User $user;
    protected $listeners = ['followUpdate','likeAdded'];
    function mount($user){
        $this->user = $user;
    }
    public function likeAdded(){
        $this->render();
    }
    public function followUpdate(){
        $this->render();
    }
    public function getTweets(){
        $this->tweets = $this->user->tweets()->withLikes()->latest()->get();
    }
    public function hydrate(){
        $this->getTweets();
    }
    public function toggleLike($id){
        foreach ($this->tweets as $tweet) {
            if($tweet->id == $id){
                $this->getTweet = $tweet;
            }
        }
        if($this->getTweet->isLikedBy(Auth::user())){
            $this->getTweet->removeLike(Auth::user());
            $this->emit('followUpdate');
            session()->flash('toggleLiked', 'Like removed added successfully.');
        }else {
            $this->getTweet->like(Auth::user());
            $this->emit('followUpdate');
            session()->flash('toggleLiked', 'Like added successfully.');
        }


    }
    public function render()
    {
        $this->getTweets();
        return view('livewire.tweets');
    }
}
