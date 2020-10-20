<label class="newbiz" for="image">
    <h4>
        <strong>
            Tamaños
        </strong>
    </h4>

</label>

{{-- VARIACION COLORES TAMANOS QTY IMG --}}



<div style=" position:relative; border-bottom: 1px solid grey" class="form-row" v-for="(variante, mainIndex) in variantes">
    <div class="">

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
            <div class="control">
                <strong>

                    @{{ mainIndex+1 }}. @{{ variante.color }}
                </strong>
                <span class="btn btn-dark" style="margin-bottom:15px;margin-top:15px; margin-left:12px;" @click="addSize(mainIndex)">Agregar Otro Tamaño +</span>
            </div>
        </div>
    </div>
    <!-- <span class="btn btn-dark" style="margin-bottom:15px;margin-top:15px;" @click="addSize(mainIndex)">Agregar Otro Tamaño +</span> -->
    <div v-for="(size, index) in variante.sizes" style=" position:relative; display:flex; flex-wrap:wrap;"  >
    

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">

            <div class="control">
                <small>
                    <strong>
                        Tamaño
                    </strong>

                </small>

                <input v-model="variante.sizes[index].tamano" style="width: 100px;" placeholder="Tamaño" class="form-control size @error('size[]') is-invalid @enderror" type="text" name="size[]" value="{{ old('size') }}">
            </div>

        </div>

        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">
            <div class="control">
                <small>
                    <strong>

                        Cantidad
                    </strong>

                </small>
                <input v-model="variante.sizes[index].cantidad" style="width: 100px;" placeholder="Cantidad" class="form-control cantidad @error('cantidad[]') is-invalid @enderror" type="text" name="cantidad[]" value="{{ old('cantidad') }}">
            </div>
        </div>
        <div class="newbiz " style="margin: 0 0 1.5em 0; margin-right: 8px; ">

        <div class="control">
            <small>
                <strong>
                    Precio
                </strong>

            </small>

            <input v-model="variante.sizes[index].precio" style="width: 100px;" placeholder="Tamaño" class="form-control size @error('size[]') is-invalid @enderror" type="text" name="size[]" value="{{ old('precio') }}">
            <span style="position: absolute; top:26px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger" @click="deleteSize(mainIndex, index)">
                        x
                    </span>
        </div>
      
    </div>
    </div>
</div>
<br>