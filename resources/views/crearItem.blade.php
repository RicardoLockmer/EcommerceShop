@extends('mainLayout')



@section('crearItem')
 
<div class="container" >
         
    {{-- NEW ITEM FORM START --}}
        <form action="/negocio/{{$store->nombreNegocio}}/nuevo-producto" method="POST" class="forms" enctype="multipart/form-data" >
        @csrf
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>
            Parece que hay un problema!
        </strong>
           {{$errors->first()}}
        </div>

@endif
        @error('*')
            <div id="errores">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        Parece que falto algo!
                    </strong>
                        Revisa que todos los campos estén llenos.
                     
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
            </div>
        @enderror

    {{-- TITULO DEL FORMULARIO --}}
            <h1 class="myFormTitle" style="text-align: center">
                {{$store->nombreNegocio}}
            </h1>
            <div class="myForms" style="width: 35em; margin-left: 26%; border: 2px solid #007bff">
                    <div class="myFormData">
                        <div>
                            <span style="font-size: 26px;"> <strong>NUEVO PRODUCTO</strong></span> 
                            <strong>
                                
                                <a 
                                    class="text-muted" 
                                    data-toggle="tooltip" 
                                    data-placement="right" 
                                    title="Información Protegida">
                            <svg  
                                style="margin:0 0 0 0; font-size: 28px;"
                                width="1em" 
                                height="1em" 
                                viewBox="0 0 16 16" 
                                class="bi bi-shield-plus align-text-bottom text-primary" 
                                fill="currentColor" 
                                xmlns="http://www.w3.org/2000/svg">
                                <path 
                                    fill-rule="evenodd" 
                                    d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                                <path 
                                    fill-rule="evenodd" 
                                    d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                                </a>
                            </strong>
                        </div>
        <br>
    {{-- EXTRA --}}
            <input type="text" value="{{$store->store_id}}" name="store_id" hidden>
            <input type="text" value="{{$store->nombreNegocio}}" name="store_name" hidden>
            <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
    {{-- NOMBRE DEL PRODUCTO --}}
            <div>
                <div class="newbiz" style="margin: 0 0 0 0;">
                
                    <label class="" for="nombre"><strong>Nombre Producto</strong></label>
                        <div class="control">
                            <input class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" type="text" placeholder="Nombre del Producto" value="{{old('nombre')}}">
                        </div>    
                </div>
            </div>
               
            
        <br> 
    {{-- IMAGENES 1-2 --}}
    <label class="" for="nombre"><strong>Imagenes</strong></label>
        <div class='form-row' style="width: auto;">

            <div class="newbiz col">
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image') is-invalid @enderror" 
                        type="file" 
                        name="image" 
                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image" data-browse="Elegir">Imagen 1*</label>
                    
 
                </div>
            </div>
            <div class="newbiz col">            
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image2') is-invalid @enderror" 
                        type="file" 
                        name="image2" 
                        onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image2" data-browse="Elegir">Imagen 2*</label>
                    

                </div>
            </div>
        </div>
    {{-- IMAGEN 3-4 --}}
        <div class='form-row' style="width: auto;">

            <div class="newbiz col">
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image3') is-invalid @enderror" 
                        type="file" 
                        name="image3" 
                        onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image3" data-browse="Elegir">Imagen 3*</label>
                    

                </div>
            </div>
            <div class="newbiz col">            
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image4') is-invalid @enderror" 
                        type="file" 
                        name="image4" 
                        onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image4" data-browse="Elegir">Imagen 4</label>
                    

                </div>
            </div>
        </div>
    {{-- IMAGEN 5 - 6 --}}
        <div class='form-row' style="width: auto;">

            <div class="newbiz col">
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image5') is-invalid @enderror" 
                        type="file" 
                        name="image5" 
                        onchange="document.getElementById('image5').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image5" data-browse="Elegir">Imagen 5</label>
                    

                </div>
            </div>
            <div class="newbiz col">            
                <div class="custom-file">
                    <input 
                        class="custom-file-input 
                        @error('image6') is-invalid @enderror" 
                        type="file" 
                        name="image6" 
                        onchange="document.getElementById('image6').src = window.URL.createObjectURL(this.files[0])" 
                    >
                    <label class="custom-file-label" for="image6" data-browse="Elegir">Imagen 6</label>
                    

                </div>
            </div>
        </div>
        <br>
    {{-- IMAGENES PREVIEW --}}
        <div class="form-row ">
            <span class="file-name col centerMyImages" style='height:100px; width: 70px; text-align:center;'>
                <img id="image" style='height:90px;' />
            </span>
            <span class="file-name col centerMyImages" style='height:100px; text-align:center;'>
                <img id="image2" style='height:90px;' />
            </span>
            <span class="file-name col centerMyImages" style='height:100px; text-align:center;'>
                <img id="image3" style='height:90px;' />
            </span>
            <span class="file-name col centerMyImages" style='height:100px; text-align:center;'>
                <img id="image4" style='height:90px;' />
            </span>
            <span class="file-name col centerMyImages" style='height:100px; text-align:center;'>
                <img id="image5" style='height:90px;' />
            </span>
            <span class="file-name col centerMyImages" style='height:100px; text-align:center;'>
                <img id="image6" style='height:90px;' />
            </span>
        </div>
    {{-- DESCRIPCION --}}
        <div class="newbiz" style="margin: 0 0 0 0;">
                
                    <div class="control">
                        <label class="label" for="descripcion"><strong>Descripción</strong></label>
                            <textarea class="textarea form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" type="text" placeholder="Describa su Producto" value="{{old('descripcion')}}" ></textarea>
                        </div>    
        </div>     
        <br>
    {{-- COLORES - CATEORIA - PRECIO - CANTIDAD --}}
        <div class="select" id="app">
        <div class='row' style="width: auto;">
    {{-- PRODUCT BRAND --}}
        <div class="newbiz col" style="margin: 0 0 0 0;">
            <div class="control">
                <label class="label" for="marca">
                  <strong>  Marca </strong>
                </label>
                <input 
                    class="form-control @error('marca') is-invalid @enderror" 
                    name="marca" 
                    id="marca" 
                    type="text" 
                    placeholder="Marca del Producto" 
                    value="{{old('marca')}}">
            </div>
        </div>

    {{-- COLOR --}}
            <div id="colors" class="newbiz col" style="margin: 0 0 0 0;">
                <div class="control">
                    <label  for="color">
                        <strong> Color</strong>
                    </label>
                    
                    <div class="select">
                    <select name="color" class="custom-select @error('color') is-invalid @enderror" onchange="otherColor(this.options[this.selectedIndex].value)">
                        <option disabled selected value>--</option>
                            <option value="Rojo">Rojo</option>
                            <option value="Verde">Verde</option>
                            <option value="Azul">Azul</option>
                            <option value="Amarillo">Amarillo</option>
                            <option value="Negro">Negro</option>
                            <option value="Blanco">Blanco</option>
                            <option id="Otro">Otro</option>
                            
                        </select>
                        
                        <br>
                        
                        <div id="color" class="" style="margin: 1.3em 0 2em 0; width: 100%; ">
                        
                        </div>
                        
                        
                </div>
            </div> 
        </div>   
        </div>
    {{-- CATEGORIA --}}
        <div class='row' style="width: auto;">
            <div class="newbiz col" style="margin: 0 0 0 0;" id="category">
                <div class="control">
                    <label class="label" for="categoria">
                      <strong>  Categoría</strong>
                    </label>
                    
                    <select 
                        class="custom-select 
                        @error('categoria') is-invalid @enderror" 
                        onchange="otherCategoria(this.options[this.selectedIndex].value)"
                        v-model="selected"
                    >
                        <option disabled selected value>
                            --
                        </option>
                        
                        <option v-for="product in products" v-bind:value="{ id: product.id, text: product.name }">
                            @{{ product.id }}
                        </option>
                        <input type="hidden" name="categoria" :value="selected.id">
                    </select>
                    </div>
                </div>
        
    
            
    {{-- SUBCATEGORIA --}}
            
        <div class="newbiz col" style="margin: 0 0 0 0;" id="category">
                <div class="control">
                    <label class="label" for="categoria">
                      <strong>Subcategoría</strong>
                    </label>
                <select 
                    name="subcategoria" 
                    class="custom-select 
                    @error('subcategoria') is-invalid @enderror">
                        <option disabled selected value>
                            --
                        </option>
                    <option v-for='name in selected.text' v-bind:value="name">
                        @{{name}}
                    </option>
                </select>
            </div>
            </div>
        
         
            
            </div>
        </div>
        <br>
        
    {{-- PRECIO --}}
        <div class='row' style="width: auto;">
            <div class="newbiz col" style="margin: 0 0 0 0;">
                <div class="control">
                    <label class="label" for="precio">
                      <strong>  Precio </strong><small class="text-muted">(Colon Costarricense)</small>
                    </label>
                    <input 
                        class="form-control @error('precio') is-invalid @enderror" 
                        name="precio" 
                        id="precio" 
                        type="number"
                        min="100"
                        step="any" 
                        placeholder="&#8353; Colón Costarricense" 
                        value="{{old('precio')}}">
                </div>
            </div>
            
    {{-- CANTIDAD --}}
            <div class="newbiz col" style="margin: 0 0 0 0;">
                <div class="control">
                    <label class="label" for="cantidad">
                       <strong> Inventario </strong><small class="text-muted">(Cantidad)</small>
                    </label>
                    <input 
                        class="form-control @error('cantidad') is-invalid @enderror" 
                        name="cantidad" 
                        id="precio" 
                        type="number"
                        min="1"
                        placeholder="Cantidad" 
                        value="{{old('cantidad')}}">
                </div>
            </div>
        </div>
        <br>
    {{-- TAMAÑO --}}
            <div class="newbiz" style="margin: 0 0 0 0;">
                <label class="label" for="size"><strong>Tamaño/Medidas</strong></label>
                <div class="control ">
                    <div class="select">
                        <select name="size" id="size" class="custom-select @error('size') is-invalid @enderror">
                        <option disabled selected value>--</option>
                        <option value="otro" style="color: green;">Otro</option>
                        <option value="Pequeño (S)">Pequeño (S)</option>
                        <option value="Mediano (M)">Mediano (M)</option>
                        <option value="Grande (L)">Grande (L)</option>
                        <option value="Extra Grande (XL)">Extra Grande (XL)</option>
                        </select>
                    </div>
                </div>
               
            </div>
        
        <div id="OS" class="" style="margin: 1.3em 0 2em 0"></div>
        
    {{-- ITEM SPECS --}}
        <div class="form-row">
            <div class="newbiz col">
                <label for="myspec"><strong>Especificaciones</strong></label>
            </div>
        </div>
                <div class="row">
                    <div class="newbiz col-5" style="margin: 0 0 1.5em 0;">
                        <div class="control">
                            
                        <input class="form-control myspecKey @error('myspec') is-invalid @enderror" type="text" placeholder="ej. Modelo" value="{{old('myspec')}}">
                        
                        </div>
                    </div>
                    <span style="padding-top: 5px;">=></span>
                    <div class="newbiz col-5" style="margin: 0 0 1.5em 0;">
                        <div class="control">
                            
                        <input class="form-control myspecVal @error('myspec') is-invalid @enderror" type="text" placeholder="ej. Modelo 2020" value="{{old('myspec')}}">
                        </div>
                    </div>
                    <div class="newbiz col " style="margin: 0 0 1.5em 0; padding-left: 0;">
                        <span class="btn btn-outline-primary add"><strong>+</strong></span>
                    </div>
                   
                </div>

                <div class="myEsp " style="text-decoration: none;">
                </div>
        {{-- INFORMACION DEL SHIPPING --}}
                <br>
                <span style="font-size: 26px;"> <strong>Informacion de Envios</strong></span>
                <br>
                <br>
                <div>
                    <div class="newbiz" style="margin: 0 0 0 0;">
                    
                        <label class="" for="nombre"><strong>Empresa</strong></label>
                        <a 
                        class="text-muted" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="Nombre de la Empresa con la que envia el Paquete, para incluir mas de una seperarlas con coma ' , '">
                        <svg 
                            width="1em" 
                            height="1em" 
                            viewBox="0 0 16 16" 
                            class="bi bi-question-square" 
                            fill="currentColor" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path 
                                fill-rule="evenodd" 
                                d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path 
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                        </a>
                            <div class="control">
                                <input class="form-control @error('empresa') is-invalid @enderror" name="empresa" id="empresa" type="text" placeholder="Ej. Correos de Costa Rica" value="{{old('empresa')}}">
                            </div>    
                    </div>
                </div>
                <br>
                <div class='row' style="width: auto;">
                    <div class="newbiz col" style="margin: 0 0 0 0;">
                        <div class="control">
                            <label class="label" for="provincia">
                              <strong>  Provincias donde puede Enviar </strong>
                            </label>
                            <a 
                        class="text-muted" 
                        data-toggle="tooltip" 
                        data-placement="right" 
                        title="Lista de Provincias donde puede enviar el Paquete.">
                        <svg 
                            width="1em" 
                            height="1em" 
                            viewBox="0 0 16 16" 
                            class="bi bi-question-square" 
                            fill="currentColor" 
                            xmlns="http://www.w3.org/2000/svg">
                            <path 
                                fill-rule="evenodd" 
                                d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path 
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                        </svg>
                        </a>

                            <div class='row' style="width: auto;">
                                <div class="newbiz col">
                                    <label>
                                        <input type="checkbox" name="provincia[]" value="San José" checked="checked">
                                        <span class="checkmark"></span>
                                        San José
                                      </label>
                                      <br>
                                      <label>
                                        <input type="checkbox" name="provincia[]" value="Alajuela">
                                        <span class="checkmark"></span>
                                        Alajuela
                                      </label>
                                      <br>
                                      <label>
                                        <input type="checkbox" name="provincia[]" value="Cartago">
                                        <span class="checkmark"></span>
                                        Cartago
                                      </label>
                                      <br>
                                      
                                </div>
                                <div class="newbiz col">
                                    <label>
                                        <input type="checkbox" name="provincia[]" value="Heredia">
                                        <span class="checkmark"></span>
                                        Heredia
                                      </label>
                                      <br>
                                      <label>
                                        <input type="checkbox" name="provincia[]" value="Guanacaste">
                                        <span class="checkmark"></span>
                                        Guanacaste
                                      </label>
                                      <br>
                                      <label>
                                        <input type="checkbox" name="provincia[]" value="Puntarenas">
                                        <span class="checkmark"></span>
                                        Puntarenas
                                      </label>
                                      <br>
                                     
                                </div>
                                <div class="newbiz col">
                                    <label>
                                        <input type="checkbox" name="provincia[]" value="Limón">
                                        <span class="checkmark"></span>
                                        Limón
                                      </label>
                                      <br>
                                      
                                     
                                </div>
                            </div>
                            
                            
                          
                    </div>
                    </div>
                </div>
                    <br>
        
                
                <div class='row' style="width: auto;">
                    <div class="newbiz col" style="margin: 0 0 0 0;">
                        <div class="control">
                            <label class="label" for="peso">
                              <strong>  Peso </strong><small class="text-muted">(Kilogramos)</small>
                            </label>
                            <input 
                                class="form-control @error('peso') is-invalid @enderror" 
                                name="peso" 
                                id="peso" 
                                type="number"
                                
                                step="any" 
                                placeholder="Ej. 250" 
                                value="{{old('peso')}}">
                        </div>
                    </div>
                    
            {{-- dimensiones --}}
                    <div class="newbiz col" style="margin: 0 0 0 0;">
                        <div class="control">
                            <label class="label" for="dimensiones">
                               <strong> Dimensiones </strong><small class="text-muted">(centímetros)</small>
                            </label>
                            <a 
                class="text-muted" 
                data-toggle="tooltip" 
                data-placement="right" 
                title="Dimensiones del Paquete. Largo x Alto x Ancho">
                <svg 
                    width="1em" 
                    height="1em" 
                    viewBox="0 0 16 16" 
                    class="bi bi-question-square" 
                    fill="currentColor" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path 
                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
                </a>
                            <input 
                                class="form-control @error('dimensiones') is-invalid @enderror" 
                                name="dimensiones" 
                                placeholder="Ej. 25x10x15" 
                                value="{{old('dimensiones')}}">
                        </div>
                    </div>
                </div>
                <br>
                <div class='row' style="width: auto;">
                    <div class="newbiz col" style="margin: 0 0 0 0;">
                        <div class="control">
                            <label class="label" for="tiempoEntrega">
                              <strong>  Tiempo de Envio </strong><small class="text-muted">(Días)</small>
                            </label>
                            <a 
                class="text-muted" 
                data-toggle="tooltip" 
                data-placement="right" 
                title="Tiempo estimado en que se entrega el Paquete.">
                <svg 
                    width="1em" 
                    height="1em" 
                    viewBox="0 0 16 16" 
                    class="bi bi-question-square" 
                    fill="currentColor" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path 
                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
                </a>
                            <input 
                                class="form-control @error('tiempoEntrega') is-invalid @enderror" 
                                name="tiempoEntrega" 
                                id="tiempoEntrega" 
                                type="number"
                                min="1"
                                step="any" 
                                placeholder="Ej. 1" 
                                value="{{old('tiempoEntrega')}}">
                        </div>
                    </div>
                    
            {{-- PRECIO ENVIO --}}
                    <div class="newbiz col" style="margin: 0 0 0 0;">
                        <div class="control">
                            <label class="label" for="precioEnvio">
                               <strong> Precio de Envio <small class="text-muted">(Gratis = 0)</small> </strong>
                            </label>
                            <a 
                class="text-muted" 
                data-toggle="tooltip" 
                data-placement="right" 
                title="Si el Envio es Gratis indicar 0">
                <svg 
                    width="1em" 
                    height="1em" 
                    viewBox="0 0 16 16" 
                    class="bi bi-question-square" 
                    fill="currentColor" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path 
                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
                </a>
                            <input 
                                class="form-control @error('precioEnvio') is-invalid @enderror" 
                                name="precioEnvio"
                                type="number"
                                min="0" 
                                placeholder="Ej. 600" 
                                value="{{old('precioEnvio')}}">
                        </div>
                    </div>
                </div>
                <br>

                <br>
    {{-- SUBMIT ITEM --}}
        <button type="submit" class="btn btn-outline-primary">AGREGAR PRODUCTO</button>
                </div>
        </div>
    </form> {{-- END OF FORM --}}
</div>  
</div>

@endsection

@section('categoryOptions')



<script type="text/javascript">
var counter = 0;
    $('.add').on('click', function (){
        var addVar = $('.myspecKey').val();
        var addVal = $('.myspecVal').val();
        
        if (addVar) {
            $('.myEsp').append('<div class="row " id="'+counter+'"><div class="newbiz col-5" style="margin: 0 0 1.5em 0;"><div class="control"><input class="form-control" type="text" placeholder="'+addVar+'" disabled></div></div><span style="padding-top: 5px;">=></span><div class="newbiz col-5" style="margin: 0 0 1.5em 0;"><div class="control"><input class="form-control " type="text" name="Specs['+addVar+']" value="'+addVal+'" disabled></div></div><div onclick="remove('+counter+')" class="newbiz col" style="margin: 0 0 1.5em 0; padding-left: 0;"><span class="btn remove" style="color:red;"><strong>X</strong></span></div><input type="text" placeholder="'+addVar+'" hidden><input type="text" name="Specs['+addVar+']" value="'+addVal+'" hidden>');
           counter++
        
        } else {
            alert('Agregar Nombre para la Especificacion del Producto');
        }
    })

    
    
</script>
<script type="text/javascript">
function remove(id) {
    document.getElementById(id).remove();
}

    
</script>

@endsection