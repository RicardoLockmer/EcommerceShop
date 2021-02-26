<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemFormStep1 extends Component
{
    //NOMBRE
    public $nameCounter = 0;
    public $nameWords = '';
    public $nameMax = 90;
    public $counter = 0;
    public $words = '';
    public $max = 500;
    public function nameCounter(){
      $this->nameCounter =  strlen($this->nameWords);
    }
    //DESCRIPCION

    public function counter(){
      $this->counter =  strlen($this->words);
    }

    public function render()
    {
        return view('livewire.item-form-step1');
    }
}
