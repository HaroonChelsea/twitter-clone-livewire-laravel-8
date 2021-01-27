<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Tweet;
use App\Exceptions\InvalidOrderException;
use Livewire\Component;

class AddTweet extends Component
{
    public $tweetBody;
    public $notify=false;

    public function store(){
        $validatedTweet = $this->validate([
            'tweetBody' => ['required','max:255']
        ]);
        $notify = true;
        try {
            Tweet::create([
                'user_id' => Auth::user()->id,
                'body'=> $validatedTweet['tweetBody']
            ]);
            $this->emit('tweetAdded');
            session()->flash('message', 'Tweet added successfully.');

        } catch (InvalidOrderException $e) {
            session()->flash('errorMessage', 'Something went wrong!');
        }
        $this->resetTweet();
    }
    public function hideNotiy(){
        $this->notify = false;
    }
    public function resetTweet(){
        $this->reset('tweetBody');
    }
    public function render()
    {
        return view('livewire.add-tweet');
    }
}
