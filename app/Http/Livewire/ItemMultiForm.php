<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemMultiForm extends Component
{
    public $step = 0;


    public function updatedStep()
    {
        $this->validate([

            'image.*' => 'image|max:1024', // 1MB Max
        ]);

    }
    public function nextStep(){
        $this->step++;
    }
    public function end(){
        dd(nombre);
    }


public function back(){
    $this->step--;
}

    public function render()
    {
        return view('livewire.item-multi-form');
    }
}
