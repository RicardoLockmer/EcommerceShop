<div class="border-b-2 border-gray-200">
    <strong class="text-2xl">
        Información de Envio
    </strong>
</div>
<ul class="list-inside list-disc mt-4">
    
    <li class="text-gray-500 text-sm">Incluir donde puede enviar el paquete, precio de envio y tiempo de entrega </li>
    <li class="text-gray-500 text-sm">Ejemplo: <strong>Tegucigalpa | Envio Gratis | 2 Dias</strong> </li>
    <li class="text-gray-500 text-sm">Para mas Información de esta seccion visite la pagina de <a href="###" class="text-blue-500" target="_blank">Ayuda</a></li>
</ul>

{{-- <div class="my-4 ">
    <div class="w-full" >

        <div class="flex items-center text-sm font-medium text-gray-700 " for="nombre" >
                <strong class="text-base my-2 mr-2">
                Empresa de Envio
                </strong>
                <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Nombre de la Empresa con la que envia el Paquete.">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                    </svg>
                </a>
        </div>
                    
        
        <div class="w-2/6">
            <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" oninput="this.className ='focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control' "  id="empresa" v-model="empresaEnvios" type="text">
        </div>
    </div>
</div> --}}

<div class="flex space-x-2 my-4">
    
    <span v-on:click="usePreset" :class="(isPreset) ? 'bg-green-400 border w-1/2 rounded-full centerMyImages p-2 cursor-pointer shadow-sm text-white font-bold' : 'border border-gray-300 font-bold text-gray-600 w-1/2 rounded-full centerMyImages p-2 cursor-pointer shadow-sm hover:bg-gray-200 bg-white'">
        Usar Envios Preestablecidos
    </span>
</div>

{{-- USE PRESETS --}}
<div v-if="isPreset">
    <div v-if="presets.length > 0" class="grid grid-cols-3 gap-4" >
        <div v-for="(preset, index) in presets" class="border-3 border-red-400">
            <div :class="(index == selectedPresetIndex) ? 'bg-green-400 rounded-md shadow-md p-2 cursor-pointer': 'rounded-md shadow-md border-2 p-2 hover:bg-green-200 cursor-pointer'" @click="showPresetInfos(index)">
                <div class="font-bold" :id="index">
                   @{{index}} @{{preset.preset_name}}
                </div>
                {{-- <div :id="index"> 
                    <div v-if="presets.visible" >
                        <div class="text-sm" v-for="city in preset.allowed_cities">
                            @{{city.provincia}} 
                            <small class="text-muted">Entrega @{{city.tiempoEntrega}} dias | Envio &#76;@{{city.precioEnvio}} </small>
                        </div>
                    </div>
                </div> --}}
            </div>
            
        </div>
    </div>
</div>
<div v-if="isPresetSelected => 0" class="border-t-2 border-gray-600 w-full my-5 py-2 ">
    <div v-for="presetCities in showSelectedPreset.allowed_cities">
        <div class="my-2 border-b">
            @{{presetCities.provincia}} 
            <small class="text-muted">Entrega @{{presetCities.tiempoEntrega}} dias | Envio &#76;@{{presetCities.precioEnvio}} </small>
        </div>
    </div>
    
</div>

index - @{{selectedPresetIndex}}
show preset - @{{showSelectedPreset}}

<div v-if="!isPreset" class='w-full' >
    <div class="w-full" >
        <div class="w-full">
            <div class="flex items-center text-sm font-medium text-gray-700" for="provincia">
                <strong class="text-base my-2 mr-2"> 
                    Seleccione donde puede enviar su producto
                </strong>
                <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Lista de Provincias donde puede enviar el Paquete.">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                    </svg>
                </a>
            </div>
     
    
    
    
    <div class="border-b border-gray-300">
        <div :class="(allCRChecked)? 'flex items-center  my-2' : ' flex items-center  my-4'" >
            <input style="width: 20px"
            class="mr-2" type="checkbox" id="CR" value="CR"   @click="AllCR">
            <div class="text-gray-700 font-bold text-sm" for="CR" style=" ">Se envia a todo Honduras</div>
        </div> 
        <div v-if="allCRChecked" :class="(todoGratis)? '  flex items-center mb-4 ' : 'flex items-center  mb-4  '" >
            <input  style="width: 20px"
            class="mr-2" type="checkbox" id="Gratis" value="Gratis"   @click="EnvioGratis">
            <div class="text-gray-700 font-bold text-sm" for="Gratis"  >Envio Gratis a todo Honduras</div>
      
        </div>
    </div>


    <div v-for="(provincia, index) in provincias" :class="(SelectedProv.includes(provincia.provincia))? 'border-b border-gray-300 ' : 'border-b border-gray-300 ' ">

            <div :class="(SelectedProv.includes(provincia.provincia))? '  flex items-center  my-4  ' : ' flex items-center  my-4  '" >
            <!-- CHECKBOXes -->
            <input 
            v-model="SelectedProv"
            style="width: 20px"
            class="mr-2" 
            type="checkbox" 
            :id="provincia.provincia" 
            :value="provincia.provincia">

            <div  class="w-full text-gray-700 font-bold text-sm" 
                    :for="provincia.provincia">
                        @{{provincia.provincia}}
            </div>

        </div>

        <!-- ENVIO GRATIS -->
        <div v-if="SelectedProv.includes(provincia.provincia)" class=" items-center  my-4 flex" >
                
                <div class="flex" >
                    <div v-if="!provincia.gratis">
                        <small> <strong>Precio del envio</strong> </small>

                        <input v-model="provincia.precioEnvio"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-5/6 pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" oninput="this.className ='focus:ring-indigo-500 focus:border-indigo-500 block w-5/6 pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control' " type="number">
                    </div>
                    <div class="">
                        <small> <strong>Tiempo de Entrega</strong> </small>
                        <input v-model="provincia.tiempoEntrega" class="focus:ring-indigo-500 focus:border-indigo-500 block w-5/6 pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" oninput="this.className ='focus:ring-indigo-500 focus:border-indigo-500 block w-5/6 pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control' " type="number" placeholder="Dias" min="1"  required>
                    </div>
                </div>
                <div class="flex items-center">
                    <input class="mr-2" style="width:20px;" type="checkbox" v-model="provincia.gratis"  >
                    <div class="text-gray-700 font-bold" ><small class="text-gray-700 font-bold">Envio Gratis</small> </div>

                </div>
         
            </div>    
            
        </div>
        
        <span v-on:click="savePreset" :class="(saveNewPreset) ? 'bg-green-400 border w-1/2 rounded-full centerMyImages p-2 cursor-pointer shadow-sm text-white font-bold mt-5' : 'border border-gray-300 font-bold text-gray-600 w-1/2 rounded-full centerMyImages p-2 cursor-pointer shadow-sm hover:bg-gray-200 bg-white mt-5'">
            Guardar
        </span>
        <div v-if="saveNewPreset" class="my-3">
            <input v-model="presetName" type="text" placeholder="nombre de la preselección" class="w-1/3 rounded-md shadow-sm p-2">
        </div>
        
        <p class="text-muted text-sm">Guardar como preestablecido para futuros productos</p>
   


    </div>
</div>

</div>