<!-- <div class="my-4">
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
    </div> -->
    <div class="border-b-2 border-gray-200">
        <small>
            <strong class="text-2xl">
                Tamaños - Inventario - Precio
            </strong>
        </small>
    </div>
    <ul class="list-inside list-disc mt-4">
        <li class="text-gray-500 text-sm"> Agregar los diferentes tamaños del producto de acuerdo a sus variaciones</li>
        
        <li class="text-gray-500 text-sm">Ejemplo: Una Camisa Roja puede tener tamaño <strong>Pequeño, Mediano y Grande</strong> </li>
        <li class="text-gray-500 text-sm">El Precio <strong>no debe incluir</strong> Impuestos o Costos de Envio</li>
        <li class="text-gray-500 text-sm">El Precio debe ser <strong>por Unidad</strong></li>    
        <li class="text-gray-500 text-sm">Para mas Información de esta seccion visite la pagina de <a href="###" class="text-blue-500" target="_blank">Ayuda</a></li>
    </ul>

<div  class="mt-4" v-for="(variante, mainIndex) in variantes">
    

                <div class="font-bold mb-2">
                   @{{ mainIndex+1 }}. @{{ variante.color }}
                </div>
        
           
                <span class="cursor-pointer justify-center w-full my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500"  style="margin-bottom:15px;margin-top:15px;"   @click="addSize(mainIndex)">    
                    Agregar Otro Tamaño +    
                </span>
           
                
    
    
    <!-- <span class="btn btn-dark" style="margin-bottom:15px;margin-top:15px;" @click="addSize(mainIndex)">Agregar Otro Tamaño +</span> -->
    <div v-for="(size, index) in variante.sizes" class="grid grid-cols-12 border-b-2" >
    

        <div class="col-span-12 grid grid-cols-11 lg:grid-cols-12 gap-3 py-4" style="">


            <div class="col-span-3" style="" id="UNITSIZE" >
                            
                <small class="flex items-center text-sm font-medium text-gray-700">
                    <strong>
                        Tamaño
                    </strong>
                        <a v-if="index == 0" class="text-muted ml-2" title="Tamaño del producto en este color" data-toggle="tooltip" data-placement="right" data-original-title="Tamaño del producto en este color" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </a>
                </small>
                <input v-model="variante.sizes[index].tamano" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control size @error('size[]') is-invalid @enderror" type="text">         
            </div>
                

        

            <div class="col-span-3 lg:col-span-2" style="">
                        <small class="flex items-center text-sm font-medium text-gray-700">
                            <strong>
                                Inventario
                            </strong>
                            <a v-if="index == 0" class="text-muted ml-2" title="Cantidad en Inventario de esta Variante" data-toggle="tooltip" data-placement="right" data-original-title="Cantidad en inventario de este color/tamaño" >
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                            </a>
                        </small>
                        <input 
                            v-model="variante.sizes[index].cantidad" 
                            type="number"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control cantidad @error('cantidad[]') is-invalid @enderror col" 
                            type="text" >
                        </div>
            <div class="col-span-4 lg:col-span-3" style="">

                
                    <small for="price" class="flex items-center text-sm font-medium text-gray-700">
                        <strong>
                            Precio
                        </strong>
                        <a v-if="index == 0" class="text-muted ml-2" title="Precio del Producto por Unidad" data-toggle="tooltip" data-placement="right" data-original-title="Precio de este color/tamaño" >
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                            </svg>
                        </a>    
                    </small>
                    <div class="relative rounded-md shadow-sm">
                        <div  class="absolute  pl-3 flex items-center pointer-events-none">
                            <span class="pt-2 text-gray-500 sm:text-sm">
                                &#8353;
                            </span>
                        </div>
                        <input type="text"  v-model="variante.sizes[index].precio"  name="price" id="price" class="@error('price') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-6 sm:text-sm border-gray-300 rounded-md form-control" placeholder="0.00">
                        <div :class="(vistaPrevia)? 'hidden' : 'absolute inset-y-0 right-0 flex items-center'">
                            <label for="currency" class="sr-only border-l-4">Moneda</label>
                                <select id="moneda" name="moneda" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-2 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                    <option>
                                        CRC
                                    </option>
                                
                                </select>
                        
                        </div>
                    </div>
                
                <!-- <input v-model="variante.sizes[index].precio" placeholder="Precio" class="form-control size @error('size[]') is-invalid @enderror col" type="text" > -->
            
            </div>
            <div class="content-end mt-auto">
                <span style="" v-if="index != 0" class="btn btn-outline-danger font-bold" @click="deleteSize(mainIndex, index)">
                    x
                </span>
            </div>
        </div>
    </div>
</div>
<br>