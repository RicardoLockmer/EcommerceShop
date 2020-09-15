@extends('mainLayout')



@section('crearItem')
 
<div class="container" >
         
    {{-- NEW ITEM FORM START --}}
        <form action="/negocio/{{$store->nombreNegocio}}/nuevo-producto" method="POST" class="forms" enctype="multipart/form-data" >
        @csrf
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
            <div class="myForms" style="width: 35em; margin-left: 26%">
                    <div class="myFormData">
                <h1 class="label" style="font-size: 2em; text-transform: uppercase; color: #123C69;">
                    Agregar Producto
                </h1>

                <h3 style="font-size: 1.3em; text-transform: uppercase; color: #123C69;">
                    Información
                </h3>

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
            <div class="newbiz" style="margin: 3em 0 0 0;">
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
            <label for="myspec"><strong>Especificaciones<small class="text-muted">(Cuantas Especificaciones)</small></strong></label>
        </div>
    </div>
            <div class="row">
                <div class="newbiz col-3" style="margin: 0 0 1.5em 0;">
                    <div class="control">
                        
                    <input class="form-control @error('myspec') is-invalid @enderror" type="number" name="myspec" placeholder="ej. 4" value="{{old('myspec')}}">
                    </div>
                </div>
                <div class="newbiz col" style="margin: 0 0 1.5em 0; padding-left: 0;">
                    <span class="btn btn-outline-success"><strong>+</strong></span>
                </div>
        </div>
            <br>
    {{-- SUBMIT ITEM --}}
        <button type="submit" class="btn btn-outline-success">AGREGAR PRODUCTO</button>
                </div>
        </div>
    </form> {{-- END OF FORM --}}
</div>  
</div>

@endsection

@section('categoryOptions')

<script src="/scripts/categoryOptions.js"></script>

@endsection