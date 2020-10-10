<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $counter = 0;
    public $words = '';
    public $max = 500;
    public function counter(){
      $this->counter =  strlen($this->words);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
