<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemFormNombre extends Component
{

    public $nameCounter = 0;
    public $nameWords;
    public $nameMax = 90;

    public function nameCounter(){
      $this->nameCounter =  strlen($this->nameWords);

    }


    public function render()
    {
        return view('livewire.item-form-nombre');
    }
}
