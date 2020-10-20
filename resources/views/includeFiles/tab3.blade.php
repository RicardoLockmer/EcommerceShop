<label class="newbiz" for="image">
    <h4>
        <strong>
            Tamaño, Cantidad y Precio
        </strong>
    </h4>

</label>

{{-- VARIACION COLORES TAMANOS QTY IMG --}}



<div style=" position:relative;" v-for="(variante, index) in variantes">
    <div class="row">

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
            <div class="control">
                <strong>

                    @{{ index+1 }}. @{{ variante.color }}
                </strong>
            </div>
        </div>
    </div>
    <span class="btn btn-dark" style="margin-bottom:15px;margin-top:15px;" @click="addSize(index)">Agregar Otro Tamaño +</span>
    <div v-for="(size, index) in variante.sizes" class="row" style="margin: -15px 0 1.5em 0; margin-right: 8px; ">


        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">

            <div class="control">
                <small>
                    <strong>
                        Tamaño
                    </strong>

                </small>

                <input v-model="variante.sizes[index]" style="width: 100px;" placeholder="Tamaño" class="form-control size @error('size[]') is-invalid @enderror" type="text" name="size[]" value="{{ old('size') }}">
            </div>

        </div>

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
            <div class="control">
                <small>
                    <strong>

                        Cantidad
                    </strong>

                </small>
                <input style="width: 100px;" placeholder="Cantidad" class="form-control cantidad @error('cantidad[]') is-invalid @enderror" type="text" name="cantidad[]" value="{{ old('cantidad') }}">
            </div>
        </div>

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
            <div class="custom-file">

                <div>






                    <span style="position: absolute; top:26px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger" @click="deleteFind(index)">
                        x
                    </span>

                </div>
            </div>
            @{{ $data }}
        </div>
    </div>
</div>
