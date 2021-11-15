<!-- <label class="newbiz" for="image"> -->
    <!-- <h4>
        <strong>
            Variaciones del producto
        </strong>
    </h4> -->
 
<!-- </label><br> -->


<div class='grid grid-cols-1' >
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
            <source src="{{ Storage::URL('videos/temp02.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
    </div> -->

        <div class="" style="">
            <div class="" >
            <div class="border-b-2 border-gray-200">
                    <small>
                        <strong class="text-2xl">
                           Variantes - Imagenes
                        </strong>
                    </small>
            </div>
                        <ul class="list-inside list-disc mt-4">
                            <li class="text-gray-500 text-sm"> Tipo de Archivo permitido: <strong>.jpg, .jpeg, .png o .gif</strong> </li>
                            <li class="text-gray-500 text-sm"> Tamaño Maximo: <strong>4 MB</strong></li>
                            <li class="text-gray-500 text-sm"> El producto debe ocupar el <strong>90%</strong> de la imagen</li>
                            <li class="text-gray-500 text-sm"><strong>La imagen principal</strong> se recomienda tenga fondo blanco</li>
                            <li class="text-gray-500 text-sm"> Las imagenes deben mostrar solo el producto 
                            <li class="text-gray-500 text-sm"> <strong>No debe incluir texto, promociones, decoraciones, logos o marcas de agua</strong></li>
                            <li class="text-gray-500 text-sm">Para mas Información de esta seccion visite la pagina de <a href="###" class="text-blue-500" target="_blank">Ayuda</a></li>
                        </ul>
                <div class="grid grid-cols-12 flex items-center mt-4     h-52">
                    
                        <label for="MIMG" style="margin-bottom:0;" :class="(image) ? 'border-2 cursor-pointer shadow-sm h-36   lg:col-span-6 bg-green-400 mr-1 flex grid grid-cols-1  border-green-500 p-6 items-center place-items-center  w-2/3' : 'border-2 shadow-md rounded-md hover:bg-gray-300  cursor-pointer h-36 flex grid grid-cols-1 lg:col-span-6 p-6 bg-white items-center   border-gray-300 place-items-center  w-2/3  ' " >
                      
                            <svg  width="2em" height="2em" viewBox="0 0 16 16" class="self-center place-self-center bi bi-upload justify-self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                            </svg>
                        <p class="font-bold">Imagen Principal*</p>
                        
                        </label>
                        
        
                                <div v-if="image" class="flex items-center col-start-7 col-span-5  " >
                                    <img class="w-auto max-h-44 object-contain  border"  :src="image" id="MainImage"  />
                                    <!-- <button class="group cursor-pointer relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-400 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" @click="removeImage">Quitar</button> -->
                                </div>
                    
              
                    
                    <input  @change="onFileChange" id="MIMG" ref="mainImage" type="file" class="custom-file-input"  required hidden>
            </div>
            <small v-if="myImageError" class=" flex text-sm text-red-500 ">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                       <small class="ml-2 font-bold self-center">
                            @{{myImageError}}
                       </small> 
                    </small>
            <div class="flex items-center pt-2 mt-2 border-t-2 border-gray-300" style="">
        {{-- NOMBRE PRODUCTO --}}
        <strong>
            Tipo de Variante
        </strong>
        <a class="text-muted ml-2" data-toggle="tooltip" data-placement="right" title="Como puede variar su producto">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
            </svg>
        </a>
    </div>
    <small class="text-gray-500 text-md">Elija como puede variar su producto</small>
            <select v-model="selectedType" @change="controlVariante" id="size" class="my-2 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control" required>
                <option disabled selected value>--</option>
                <option value="Color">Color</option>
                <option value="Sabor">Sabor</option>
                <option value="Olor">Olor</option>
                <option value="Estilo">Estilo</option>
                <option value="Figura">Figura</option>
                <option value="Material">Material</option>
                <option value="Memoria">Memoria</option>
                <option value="Textura">Textura</option>
                <option value="Tipo">Tipo</option>
                <option value="Año">Año</option>
                <option value="Modelo">Modelo</option>
                <option value="Diseño">Diseño</option>
                <option value="Dimensiones">Dimensiones</option>
                <option value="N/A">No Aplica</option>
                <option value="otro">Otro</option>
                                    
                <!-- <option class="dropdown-item" value=""></option> -->
                                    
            </select>
            
            
                                    
            <div v-if="selectedType == 'otro'">
                
                <input type="text" 
                    v-model="otro"
                    max="25" 
                    placeholder="Escriba su Variante Aqui" 
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" 
                    id="" 
                    required>

            </div>
            <ul class="">
            <li class="text-gray-500 text-sm">Ejemplo: Una Camisa puede variar en <strong>Color</strong> / La Comida para Mascotas puede variar en <strong>Sabor</strong></li>
            
            </ul>
           
            
        </div>
</div>

            <ul class="mb-2" v-if="selectedType != 'N/A'">
            <li class="text-gray-500 text-sm">Para agregar mas variantes del mismo producto dar click en <strong> Agregar Otro + </strong></li>
            <li class="text-gray-500 text-sm">La primera imagen seleccionada de cada <strong> @{{selectedType}} </strong> sera la imagen primaria</li>
            </ul>         
            

<div  v-if="selectedType" class="grid grid-cols-12 border-b-2 border-gray-300 pb-4 mt-4" v-for="(variante, index) in variantes">

        
        <div v-if="selectedType == 'otro'" class="col-span-6 lg:col-span-3 " >
            <div class="">

                <small>
                    <strong>

                    @{{ index+1 }}.  @{{ otro }}
                    </strong>

                </small>
                <input  v-model="variante.color" oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control'" type="text"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control">

            </div>
        </div>
        <div v-else-if="selectedType != 'N/A'" class="col-span-6 lg:col-span-3 " >
            
            <div class="">

                <small>
                    <strong>

                    @{{ index+1 }}.  @{{ selectedType }}*
                    </strong>
                               
                </small>
                <input  v-model="variante.color" oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control'"  type="text"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control">

            </div>
        </div>
        <div v-else class="col-span-6 lg:col-span-3">
        
            <div class="">

            <small>
                <strong class="text-gray-300">

                No Aplica
                </strong>

            </small>
            
            <input disabled type="text" v-model="selectedType" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md  form-control disabled">

       
        </div>
        </div>
        
            <!-- add file box -->
        <div class="ml-2  col-span-6 lg:col-span-3 " >
            
            <div class="custom-file">
                <small>
                    <strong>
                        Imagenes*
                    </strong>

                </small>
                <div>
                    <label  :class="(variantes[index].verified) ? 'focus:ring-indigo-500 cursor-pointer focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control bg-green-200 ' : 'focus:ring-indigo-500 focus:border-indigo-500 cursor-pointer block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control content-center'"  v-bind:for="index" v-bind:key="index">  
                        <svg style="vertical-align: baseline;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload pt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>
                    </label>
                </span>
              
                    <input @change="createImages($event, index)" v-bind:id="index" ref="ListImage" type="file" class="custom-file-input" multiple required hidden>
                    <span style="position: absolute; top:22px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger font-bold" @click="deleteFind(index)">
                        x
                    </span>   
                </div>
                
                <small v-if="variante.myImagesError" class=" flex text-sm text-red-500">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                       <small class="ml-2 font-bold self-center">
                            @{{variante.myImagesError}}
                       </small> 
                    </small>
                </div>
            </div>
            <div v-if="variantes[index].myImagesError == ''"  class=" col-auto col-span-8 lg:col-span-8 flex overflow-auto scrolling-touch gap-2 h-auto mt-3 border-l-4 object-contain"  >
                <img v-for="image in variantes[index].imageListed" id="subimage" class=" w-auto max-h-28 object-contain border" :src="image" alt="##" > 
            </div>
            
            
        </div>
<div class="border-b-2 border-gray-300">
    <span  
                class="cursor-pointer justify-center my-4 py-2 px-4  text-md font-bold rounded-xl  text-gray-700 bg-grey-500 flex items-center w-3/6 shadow-md hover:bg-gray-300 hover:border-gray-400 border-l border-b border-r border-t border-gray-400 " v-if="selectedType != 'N/A'" 
                style="margin-bottom:15px;margin-top:15px;" 
                @click="addFind">
                        
                            
                <span v-if="selectedType == 'otro'">
                    Agregar Otro @{{ otro }} +
                </span>
                <span v-else-if="selectedType == 'N/A'">
                    Agregar mas imagenes +
                </span>
                <span v-else>
                    Agregar Otro @{{ selectedType }} +
                </span>

            </span>
</div>
</div>
