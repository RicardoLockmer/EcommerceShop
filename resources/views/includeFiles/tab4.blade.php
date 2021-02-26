{{-- ITEM SPECS --}}
    <div class=" block" for="image" >
        <h4>
            <strong>
                Detalles del Producto
            </strong>
        </h4>
    
        <small class="text-muted">Agregar detalles y/o especificaciones de su producto </small>

    </div>

    <div class="my-4">
        <button v-if="tutorial" class="btn btn-danger btn-sm" @click="quitarVideo">
            Ocultar Video
        </button>
        <button v-if="!tutorial"class="btn btn-primary btn-sm " @click="quitarVideo">
            <strong>
                Ver Video
            </strong>
        </button>
        <video v-if="tutorial" style="margin-top: -5px;" width="430" height="200" controls>
            <source src="{{ Storage::URL('videos/tamanoTemp.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
    </div>
    <div class=" col " style="margin: 0 0 1.5em 0; padding-left: 0;">
        <span @click="addSpec" class=" group cursor-pointer relative lg:w-2/3 flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 add">
            <strong>Agregar mas detalles/espcificaciones </strong>
        </span>
    </div>
    <div  class="grid grid-cols-1 " >
    <div v-for="(spec, specIndex) in specs" class="flex ">
        <div class=" col-5 py-2 bg-gray-200 border-t border-b border-gray-400">
            <div class="control">

                <input v-model="spec.specName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control myspecKey @error('myspec') is-invalid @enderror" type="text" placeholder="ej. Modelo" value="{{ old('myspec') }}">

            </div>
        </div>
      
        <div class=" col-5 py-2  border-t border-b border-gray-400">
            <div class="control">

                <input v-model="spec.specValue" 
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control myspecVal @error('myspec') is-invalid @enderror" 
                    type="text" 
                    placeholder="ej. Modelo 2020" 
                    value="{{ old('myspec') }}">
            </div>
            <span style="position: absolute; top:5px; right: -40px;" v-if="specIndex != 0" class="btn btn-outline-danger" @click="deleteDetalle(specIndex)">
                x
            </span>
        </div>           
    </div>
                    
</div>
             