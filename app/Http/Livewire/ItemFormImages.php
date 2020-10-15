<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
class ItemFormImages extends Component
{
    use WithFileUploads;
    public $image = [];
    public $store;


    public function updatedImage()
    {
        $this->validate([

            'image.*' => 'image|max:1024', // 1MB Max
        ]);

    }
    public function remove($index) {
      array_splice($this->image, $index, 1);

    }

    public function render()
    {
        return view('livewire.item-form-images');
    }
}
