<div class="newbiz" style="margin: 20px 0 0 0;">

    <div class="control">
        <label class="label" for="descripcion">
            <strong>
                Descripción
            </strong>
        </label>

        <textarea class="textarea form-control
            @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" type="text" placeholder="Describa su Producto" maxlength="{{ $max }}" value="{{ old('descripcion') }}" wire:keyup="counter" wire:model="words">

        </textarea>
        <p class="text-muted">{{ $counter }}/ {{ $max }}</p>
    </div>
</div>
<br>
