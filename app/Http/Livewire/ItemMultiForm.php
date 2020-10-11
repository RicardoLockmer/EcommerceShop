<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemMultiForm extends Component
{

    public $step = 0;


    public function nextStep(){
        $this->step++;
    }

    public function back(){
    $this->step--;
    }

    public function render()
    {
        return view('livewire.item-multi-form');
    }
}
