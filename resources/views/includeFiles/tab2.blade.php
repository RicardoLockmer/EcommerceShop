<label class="newbiz" for="image">
    <h4>
        <strong>
            Variaciones del producto
        </strong>
    </h4>
 
</label><br>


<div class='grid grid-cols-1' >
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
            <source src="{{ Storage::URL('videos/temp02.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>  
    </div>

        <div class="grid" style="">
            <div class="" >
                    <small>
                        <strong class="text-xl">
                            Imagen Principal <br>
                            <small class="text-gray-400 text-sm">Tipo de Archivo permitido: .jpg, .jpeg y .png</small>
                        </strong>
                    </small>
                <div class="">
                    <div class="w-2/3 lg:w-1/2 flex"> 
                        <label for="MIMG" :class="(image) ? 'border-2 h-32 w-32 bg-green-200 mr-1 flex grid grid-cols-1 border-2 border-gray-300 p-6 items-center place-items-center shadow-md w-2/3 my-4' : 'border-2 h-32 w-32 flex grid grid-cols-1  p-6  items-center border-b-2 border-r border-gray-300 place-items-center shadow-md w-2/3 my-4' " >
                      
                            <svg  width="2em" height="2em" viewBox="0 0 16 16" class="self-center place-self-center bi bi-upload justify-self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                            </svg>
                        
                        </label>
                        <div v-if="!vistaPrevia"  class=" w-32 h-32 ">
        
                                <div v-if="image" class="mt-4 ml-4 grid" >
                                    <img class=" w-auto max-h-32 justify-self-center"  :src="image" />
                                    <button class="group cursor-pointer relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-400 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" @click="removeImage">Quitar</button>
                                </div>
                        </div>
                    </div>  
                    <small v-if="myImageError" class=" flex text-sm text-red-500">
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                       <small class="ml-2 font-bold self-center">
                            @{{myImageError}}
                       </small> 
                    </small>
                    <input  @change="onFileChange" id="MIMG" ref="mainImage" type="file" class="custom-file-input"  required hidden>
            </div>

            <div class="flex items-center my-2" style="">
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
            <select v-model="selectedType"  id="size" class=" my-2 focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control" required>
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
                <option value="NoAplica">No Aplica</option>
                <option value="otro">Otro</option>
                                    
                <!-- <option class="dropdown-item" value=""></option> -->
                                    
            </select>
            <br>
            
            <div v-if="selectedType == 'otro'">
                
                <input type="text" 
                    v-model="otro" 
                    placeholder="Escriba su Variante Aqui" 
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-1/3 pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" 
                    id="" 
                    required>

            </div>

            <span  
                class="group cursor-pointer relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" v-if="selectedType" 
                style="margin-bottom:15px;margin-top:15px;" 
                @click="addFind">
                        
                            
                <span v-if="selectedType == 'otro'">
                    Agregar Otro @{{ otro }} +
                </span>
                <span v-else-if="selectedType == 'NoAplica'">
                    Agregar mas imagenes +
                </span>
                <span v-else>
                    Agregar Otro @{{ selectedType }} +
                </span>

            </span>

        </div>
</div>


<div  v-if="selectedType" class="grid grid-cols-12 border-b-2 border-gray-300 pb-4" v-for="(variante, index) in variantes">

        
        <div v-if="selectedType == 'otro'" class="col-span-4 " >
            <div class="">

                <small>
                    <strong>

                    @{{ index+1 }}.  @{{ otro }}
                    </strong>

                </small>
                <input  v-model="variante.color" type="text"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control">

            </div>
        </div>
        <div v-else-if="selectedType != 'NoAplica'" class="col-span-4  " >
            <div class="">

                <small>
                    <strong>

                    @{{ index+1 }}.  @{{ selectedType }}
                    </strong>
                               
                </small>
                <input  v-model="variante.color"  type="text"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control">

            </div>
        </div>
        <div v-else class="col-span-4  ">
        
            <div class="">

            <small>
                <strong class="text-gray-300">

                No Aplica
                </strong>

            </small>
            
            <input disabled type="text"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md  form-control disabled">

        </div>
        
        </div>
        
            <!-- add file box -->
        <div class="ml-2  col-span-3 lg:col-span-3 " >
            <div class="custom-file">
                <small>
                    <strong>

                        Imagenes
                    </strong>

                </small>
                <div>

                    <label  :class="(variantes[index].imageListed.length > 0) ? 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control bg-green-200 ' : 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control content-center'"  v-bind:for="index" v-bind:key="index">
                    


                        <svg style="vertical-align: baseline;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload pt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>

                    </label>
                    
                
                </span>
                    <input  @change="createImages($event, index)" v-bind:id="index" ref="listImage" type="file" class="custom-file-input" multiple required hidden>
                    <span style="position: absolute; top:22px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger" @click="deleteFind(index)">
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
        <div v-if="!vistaPrevia" class=" col-auto col-span-8 lg:col-span-8 flex overflow-auto scrolling-touch  h-auto mt-3 border-l-4"  >
            <img v-for="image in variantes[index].imageListed" id="subimage" class="col-auto w-28 h-auto" :src="image" alt="##" > 
        </div>

    </div>


</div>
