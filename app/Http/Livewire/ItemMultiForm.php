<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
class ItemMultiForm extends Component
{
    use WithFileUploads;
    public $step = 0;
    public $image = [];


    public function updatedImage()
    {
        $this->validate([

            'image.*' => 'image|max:1024', // 1MB Max
        ]);

    }
    public function remove($index) {
      array_splice($this->image, $index, 1);

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
