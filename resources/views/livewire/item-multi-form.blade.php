<div>

    @if ($step == 0)

    @livewire('item-form-nombre')
    @livewire('counter')

    <button class="btn btn-outline-primary" wire:click.prevent="nextStep">Seguir</button>
    @elseif($step == 1)
    @livewire('item-form-images')
    <div>
        {{-- COMIENZAN LAS IMAGENES --}}

        <label class="newbiz" for="image">
            <strong>
                Imagenes
            </strong>
            <small class="text-muted ">
                ({{ count($image) }} / 8)
            </small>
            <a class="text-muted" data-toggle="tooltip" data-placement="right" data-original-title="Seleccione todas las imagenes al mismo tiempo. " title="Seleccione todas las imagenes al mismo tiempo. ">

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                </svg>
            </a>
        </label>
        <div class='form-row' style="width: auto;">

            <div class="newbiz col">
                <div class="custom-file">

                    <input class="custom-file-input
                           @error('image.*') is-invalid @enderror" type="file" name="image[]" id="gallery-photo-add" wire:model="image" multiple>
                    <label class="custom-file-label text-muted" for="image[]" data-browse="Elegir">.Jpg, .Jpeg, .Png</label>

                    @if (count($image) > 8)
                    <div class="alert alert-danger" style="margin-top: 8px;">
                        Excede la cantidad de imagenes.
                    </div>
                    @endif

                </div>
            </div>

        </div>

        @error('image.*') <span class="error">{{ $message }}</span> @enderror
        <br>
        {{-- IMAGENES PREVIEW --}}

        <div wire:loading wire:target="image">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        @if ($image)

        <div class="row" style="width: auto;">
            @foreach($image as $photo)
            <div style=" margin-right: 8px; margin-top: 4px; position: relative; display: inline-block;" wire:key='{{ $loop->index }}'>

                <svg wire:click="remove({{ $loop->index }})" style="color:red; position: absolute;right: 0;top: 0;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>

                <div class="flex">

                    <img style="width: 100px; height:auto; max-height: 150px; " src="{{ $photo->temporaryUrl() }}">
                </div>

            </div>
            @endforeach
        </div>
        @endif

    </div>

    <button wire:click.prevent="nextStep">NEXT</button>
    <button wire:click.prevent="back">back</button>

    @elseif($step == 2)

    @livewire('counter')
    <button wire:click.prevent="end">NEXT</button>
    <button wire:click.prevent="back">back</button>

    @endif




</div>
