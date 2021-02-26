<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemPreview extends Component
{

    public $nombre;

    public function render()
    {
        return view('livewire.item-preview', ['nombre'=>$this->nombre]);
    }
}
