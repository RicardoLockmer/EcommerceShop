    {{-- ITEM SPECS --}}
    
    
    
    <div class="border-b-2 border-gray-200">
        <small>
            <strong class="text-2xl">
            Detalles - Caracteristicas - Palabras Clave
            </strong>
        </small>
    </div>

    <ul class="list-inside list-disc mt-4">
        <li class="text-gray-500 text-sm"> Agregar una tabla con las especificaciones del producto</li>
        <li class="text-gray-500 text-sm"> Agregar una lista de caracteristicas clave</li>
        
        
            
        <li class="text-gray-500 text-sm">Para mas Información de esta seccion visite la pagina de <a href="###" class="text-blue-500" target="_blank">Ayuda</a></li>
    </ul>

<!-- Tabla Especificaciones -->
   <div class="border-gray-400 border-b-2 my-4 pb-4 ">
   
        <div class="mb-4 block">
            <ul class=" " v-if="selectedType != 'N/A'">
                <li class="text-gray-800 text-md font-bold">Crear una Tabla de Especificaciones <span class="font-normal text-sm text-gray-400">(opcional)</span></li>
                
            </ul>
            <div class="text-gray-500 text-sm mb-4"> Ejemplo: Una <strong> Tabla </strong> para una Camisa - <strong> Material | 50% Algodón </strong></div>
            
        </div>

        <div  class="" >
            <div v-for="(spec, specIndex) in specs" class="flex ">
                <div class=" col-5 py-2 bg-gray-200 border-t border-b border-gray-400">
                    <div class="control">

                        <input v-model="spec.specName" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control myspecKey @error('myspec') is-invalid @enderror" type="text"  value="{{ old('myspec') }}" placeholder="Material">

                    </div>
                </div>
        
            <div class=" col-5 py-2  border-t border-b border-gray-400">
                <div class="control">

                    <input v-model="spec.specValue" 
                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control myspecVal @error('myspec') is-invalid @enderror" 
                        type="text" 
                         
                        value="{{ old('myspec') }}" placeholder="50% Algodón">
                </div>
                <span style="position: absolute; top:5px; right: -40px;" v-if="specIndex != 0" class="btn btn-outline-danger" @click="deleteDetalle(specIndex)">
                    x
                </span>
            </div>           
        </div>
        <span @click="addSpec" class="cursor-pointer justify-center my-4 py-2 px-4  text-md font-bold rounded-xl  text-gray-700 bg-grey-500 flex items-center w-3/6 shadow-md hover:bg-gray-300 hover:border-gray-400 border-l border-b border-r border-t border-gray-400  add">
                <strong>Agregar otra fila</strong>
            </span>
   </div>
   </div>

   <!-- CARACTERISTICAS CLAVE -->
   <div class="border-gray-400 border-b-2 mb-4 pb-4">
   
        <div class="mb-4 ">
            <ul class=" flex" v-if="selectedType != 'N/A'">
                <li class="text-gray-800 text-md font-bold">Crear caracteristicas clave <span class="font-normal text-sm text-gray-400">(opcional)</span></li>
            </ul>
            <div class="text-gray-500 text-sm mb-4">Ejemplo: <strong>Caracteristicas clave</strong> de una Camisa - <strong> <span> Un corte clásico y una tela de algodón suave hacen que esta polo sea ideal para la oficina o el fin de semana.</span> </strong> </div>
            
        </div>

        <div  class="" >
        <div v-for="(feature, KFindex) in keyFeatures" class="flex ">
            <ul class="list-oiutside list-disc  w-5/6 ">
                <li>
                    <div class=" w-5/6 ">
                        <div class="relative">
                            <textarea v-model="feature.feature" oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control char-textarea mb-2'" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control char-textarea mb-2" data-length="0"  maxlength="250" ></textarea>
                    <span v-if="KFindex != 0" style="position: absolute; top:5px; right: -40px;" class="btn btn-outline-danger" @click="deleteFeature(KFindex)">
                        x
                    </span>
                            
                        </div>     
                    </div>       
                </li>
            </ul>
        </div>                
       
        </div>
        <span @click="addFeature" class="cursor-pointer justify-center my-4 py-2 px-4  text-md font-bold rounded-xl  text-gray-700 bg-grey-500 flex items-center w-3/6 shadow-md hover:bg-gray-300 hover:border-gray-400 border-l border-b border-r border-t border-gray-400 add">
                <strong>Agregar otra caracteristica</strong>
            </span>
    </div>         