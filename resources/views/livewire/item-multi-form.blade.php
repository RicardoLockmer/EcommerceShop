<div>

    @if ($step == 0)

    @livewire('item-form-nombre')
    <button wire:click.prevent="nextStep">NEXT</button>
    @elseif($step == 1)

    @livewire('item-form-images')

    <button wire:click.prevent="nextStep">NEXT</button>
    <button wire:click.prevent="back">back</button>

    @elseif($step == 2)

    @livewire('counter')
    <button wire:click.prevent="end">NEXT</button>
    <button wire:click.prevent="back">back</button>

    @endif




</div>
