    <div class="border-b-2 border-gray-200">
        <small >
            <strong class="text-2xl">
                Información Basica
            </strong>
        </small>
    </div>
    <div class="flex items-center mt-4" style="">
    
        {{-- NOMBRE PRODUCTO --}}
        <strong>
            Nombre Producto* 
        </strong>
        <a class="text-muted flex ml-2 " data-toggle="tooltip" data-placement="right" title="Nombre de su producto">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
            </svg>
        </a> 
    </div>
    <small class="text-gray-500 text-md">Maximo 250 caracteres</small>
    <p class="mt-2 mb-3">
    <input v-model="nombre"  oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control'"  class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control"  maxlength="250">
    <small class="text-gray-500 text-md">Ejemplo: Apple Watch SE (GPS, 40mm) </small>
    </p>

{{-- FINAL NOMBRE --}}

{{-- MARCA --}}
    <div class="flex items-center my-2" style="">
        {{-- NOMBRE PRODUCTO --}}
        <strong>
            Marca*
        </strong>
        <a class="text-muted ml-2" data-toggle="tooltip" data-placement="right" title="Marca del producto">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
            </svg>
        </a>
    </div>

    <p class="mt-2 mb-3">
    <input v-model="marca" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control" oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control'"   maxlength="20">
    <small class="text-gray-500 text-md">Ejemplo: Apple</small>
    </p>



{{-- FINAL MARCA --}}

{{-- DESCRIPCION --}}
    <div class="flex items-center mt-2">
        <strong>
            Descripción*
        </strong>
        <a class="text-muted ml-2" data-toggle="tooltip" data-placement="right" title="Describa su producto">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
            </svg>
        </a>
    </div>
    <small class="text-gray-500 text-md">Descripción del producto que desea vender</small>
    <div class="mt-2 mb-3">
    <textarea v-model="descripcion" oninput="this.className = 'focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control char-textarea mt-2'" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2 sm:text-sm border-gray-300 rounded-md shadow-sm form-control char-textarea mt-2" style="width: 100%; "  id="textarea" data-length=0  maxlength="450" ></textarea>
    <small class="text-muted"><span class="char-count myCount mb-2">0</span>/450 </small>
    </div>

                  
    <div class="select" style="margin-top: 8px;">
                        
                        

                        {{-- CATEGORIA --}}
                        <div class='row' style="width: auto;">
                            <div class="newbiz col" style="margin: 0 0 0 0;" id="category">
                                <div class="control">
                                    <label class="label" for="categoria">
                                        <strong> Categoría</strong>
                                    </label>

                                    <select v-model="selectedCategory" oninput="this.className = 'mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control'" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('categoria') is-invalid @enderror " >
                                        <option disabled selected value>
                                            --
                                        </option> 

                                        <option v-for="product in products" v-bind:value="{ id: product.id, text: product.name }">
                                            @{{ product.id }}
                                        </option>
                                        <input type="hidden" :value="selectedCategory.id">
                                    </select>
                                    <small class="text-gray-500 text-md">Ejemplo: Electronica</small>
                                </div>
                            </div>



                            {{-- SUBCATEGORIA --}}

                            <div class="newbiz col" style="margin: 0 0 0 0;" id="category">
                                <div class="control">
                                    <label class="label" for="categoria">
                                        <strong>Subcategoría</strong>
                                    </label>

                                    <select v-model="selectedSubCategory" oninput="this.className = 'mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control'" class="mt-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control
                                    @error('subcategoria') is-invalid @enderror">
                                        <option disabled selected value>
                                            --
                                        </option>
                                        <option v-for='name in selectedCategory.text' v-bind:value="name" >
                                            @{{ name }}
                                        </option>
                                    </select>
                                    <small class="text-gray-500 text-md">Ejemplo: Accesorios</small>
                                </div>
                            </div>



                        </div>
    </div>
          
                
