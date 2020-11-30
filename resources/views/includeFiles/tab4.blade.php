{{-- ITEM SPECS --}}
<label class="newbiz row" for="image" style="margin: 0 0 1.5em 0; padding-left: 0;">
    <h4>
        <strong>
            Detalles del Producto
        </strong>
    </h4>
    <small class="text-muted">Agregar detalles y/o especificaciones de su producto </small>

</label>

<button v-if="tutorial" class="btn btn-danger btn-sm" @click="quitarVideo">Ocultar Video</button>
<button v-if="!tutorial"class="btn btn-primary btn-sm " @click="quitarVideo"><strong>Ver Video</strong></button>
 <video v-if="tutorial" style="margin-top: -5px;" width="420" height="200" controls>
  <source src="{{ Storage::URL('videos/detallesTemp.mp4') }}" type="video/mp4">
  
Your browser does not support the video tag.
</video>  
<br><br>
                <div class="newbiz col " style="margin: 0 0 1.5em 0; padding-left: 0;">
                        <span @click="addSpec" class="btn btn-warning btn-sm add"><strong>Agregar mas detalles/espcificaciones +</strong></span>
                    </div>
                <div v-for="(spec, specIndex) in specs" class="row">
                    <div class="newbiz col-5" style="margin: 0 0 1.5em 0;">
                        <div class="control">

                            <input v-model="spec.specName" class="form-control myspecKey @error('myspec') is-invalid @enderror" type="text" placeholder="ej. Modelo" value="{{ old('myspec') }}">

                        </div>
                    </div>
                    <span style="padding-top: 5px;">=></span>
                    <div class="newbiz col-5" style="margin: 0 0 1.5em 0;">
                        <div class="control">

                            <input v-model="spec.specValue" class="form-control myspecVal @error('myspec') is-invalid @enderror" type="text" placeholder="ej. Modelo 2020" value="{{ old('myspec') }}">
                        </div>
                        <span style="position: absolute; top:0px; right: -40px;" v-if="specIndex != 0" class="btn btn-outline-danger" @click="deleteDetalle(specIndex)">
                            x
                        </span>
                    </div>
                        
                </div>
                    

             