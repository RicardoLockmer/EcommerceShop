@extends('mainLayout')



@section('crearItem')
<div class="container" id="itemLayout">


    <div class="d-flex" style="margin-top: 14px;">

        <div class="col" style=" height:auto;  border-right: 2px dotted grey;">
            <form style="display:block!important; top:15px!important;" action="/negocio/{{$store->nombreNegocio}}/nuevo-producto" method="POST" class="" id="sticky" enctype="multipart/form-data">
                {{-- CSRF --}}
                @csrf
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        Parece que hay un problema!
                    </strong>
                    {{ $errors->first() }}
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
                {{-- EXTRA --}}
                <input type="text" value="{{ $store->store_id }}" name="store_id" hidden>
                <input type="text" value="{{ $store->nombreNegocio }}" name="store_name" hidden>
                <input type="text" value="{{ Auth::user()->id }}" name="user_id" hidden>

                {{-- FINAL CSRF Y EXTRA --}}
                {{-- FORM DATA COMIENZA --}}
                <div class="myFormData">
                    <div>
                        <span style="font-size: 26px;"> <strong>NUEVO PRODUCTO</strong></span>
                        <strong>

                            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Información Protegida">
                                <svg style="margin:0 0 0 0; font-size: 28px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus align-text-bottom text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                                    <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </a>
                        </strong>
                    </div>
                    <br>


                    {{-- TAB 1 --}}
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        @include('includeFiles/tab1')
                    </div>




                    {{-- TAB 2 --}}
                    <div style="width:auto;" class="tab">


                        @include('includeFiles/tab2')



                    </div>

                    <div class="tab">
                        @include('includeFiles/tab3')
                    </div>

                    <div class="tab">Login Info:
                        <p><input placeholder="Username..." oninput="this.className = ''"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''"></p>
                    </div>

                    <div class="tab">LAST TAB:
                        <p><input placeholder="Username..." oninput="this.className = ''"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''"></p>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-outline-primary">Anterior</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-outline-primary">Siguiente</button>
                            <button type="submit" id="subBtn" class="btn btn-outline-primary">Agregar</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
<br>
            </form>
        </div>


    </div>
    <div class="col " style="height: auto;   border-left: 2px dotted grey;">
        <div class="myFormData " style="margin-left: 0.3em!important;">

            {{-- vista previa titulo --}}
            <span style="font-size: 26px;"> <strong>Vista Previa</strong>
            <small>
            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Al agregar algo en el formulario se actualiza en la vista previa. Asi es como veria un comprador su producto">
        <svg style="margin:0 0 0 8px; font-size: 22px; padding-bottom: 5px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
</small>
    </span>
            {{-- START --}}
            <div class="row" style="margin-top: 26px;">


                <div style="width: 125px; height:auto; max-height: 850px; margin-bottom: 15px; margin-left: 1em;">


                    <div v-if="image">
                        <img style="width: 125px; height:auto;" :src="image" />
                        <button class="btn btn-outline-danger btn-sm btn-block" @click="removeImage">Quitar</button>
                    </div>



                </div>
                

                {{-- COLUMNA DEL INFO --}}
                <div class="col flex" style="margin-left: 20px;">

                    <div style="position:absolute; top: 0; left: -12px;">
                        @for($i = 1; $i <= 5; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg><br>
                            @endfor

                    </div>
                   
                    <article style="margin: 0 0 1em 0;">

                        <h1 style="font-size: 28px;margin-bottom: 0;">
                            @{{ nombre }}
                        </h1>
                        <p style="margin: 0 0 0 0;">
                            <small class="text-muted">
                                <strong>
                                    @{{ marca }}
                                </strong>
                            </small>
                        </p>
                        <small>
                            <a href="###">
                                Ver mas productos de {{ $store->nombreNegocio }}
                            </a>
                        </small>
                        <br>

                        <div>
                            <small class="text-muted" style="font-size: 14px; left:-18px;">
                                (1099) reseñas
                            </small>

                        </div>

                        <p class="subtitle" style="color: rgba(36, 36, 36, 0.829); font-size: 21px; margin-bottom: 0;">
                            &#8353; @{{ selectedSize.precio }}
                            <small style="font-size: 14px;" class="text-muted">
                                (no incluye iva)
                            </small>
                            <small style="font-size: 13px;">
                                <a href="##">
                                    Detalles
                                </a>
                            </small>
                        </p>

                        {{-- @if($item->shipping->precioEnvio > 0) --}}

                        {{-- <small class="text-muted">
                        Precio de Envió +
                        <strong>
                            &#8353; {{number_format($item->shipping->precioEnvio, 0, '.', ',')}}
                        </strong>
                        </small> --}}

                        {{-- @else --}}

                        <small class="text-muted">
                            Envió
                            <strong>
                                Gratis
                            </strong>
                        </small>

                        {{-- @endif --}}

                        <br>
                        <br>

                        <div class="content">

                            <div class="textarea" style="white-space: pre-line;">@{{ descripcion }}</div>
                            <br>


                            <div style="display: inline;">

                                <span for="provincia" class="">
                                    <strong> Color: </strong>
                                </span>

                                <span>
                                    <select style=" height: 35px; padding: 0 0 0 .75rem;" class="custom-select col-4" name="color" id="color" v-model="selected">

                                        {{-- @foreach ($colores as $color) --}}
                                        <option v-for="variante in variantes" v-bind:value="{ color: variante.color, size: variante.sizes, images: variante.variantImages }"> @{{ variante.color }}</option>

                                        {{-- @endforeach --}}



                                    </select>
                                </span>
                            </div>
                            <br>
                            <br>
                            <div style="display: inline;">

                                <span for="provincia" class="">
                                    <strong> Tamaño: </strong>
                                </span>

                                <span>
                                    <select v-model="selectedSize" style="height: 35px; padding: 0 0 0 .75rem;" class="custom-select col-4" name="tamano" id="color">


                                        <option v-for="value in selected.size" v-bind:value="{ tamano: value.tamano, precio: value.precio, cantidad: value.cantidad }">@{{ value.tamano }} @{{ value.unidad }}</option>




                                    </select>
                                </span>
                            </div>
                            <br>
                                
                            <br>
                           

                            {{-- INFO PARA ENVIOS --}}
                            <div id="ENVI">

                                <p class="card-text" style="position: aboslute; bottom:0; right:0;">

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                    </svg>

                                    {{-- @if (Auth::check())  --}}
                                    {{-- USER LOGGED IN --}}

                                    {{-- @if($selectedAddress != NULL) --}}
                                    {{-- SHIPPING ADDRESS EXISTS --}}

                                    {{-- @if(in_array($selectedAddress->provincia, $provinciasEnvio)) --}}
                                    <small>
                                        <strong style="color: seagreen"> Si se envía a ENVIA PROVINCIA</strong>
                                    </small>
                                    <p>
                                        <small class="text-muted">
                                            El paquete llega entre
                                            <strong>
                                                FECHA INICIO - FECHA FINAL
                                            </strong>
                                        </small>
                                    </p>

                                    <p>
                                        <small class="text-muted">
                                            El paquete se envía por
                                            <strong>
                                                CORREOS DE CR
                                            </strong>
                                        </small>
                                    </p>
                            </div>
                        </div>
                        {{-- @else --}}
                        {{-- <small>
                        <strong style="color:rgb(145, 7, 7)"> No se Envía a {{$selectedAddress->provincia}} </strong>
                        </small><small><a href="/perfil/{{Auth::user()->name}}/direcciones"> - Cambiar Dirección</a></small>
                        <p>
                            <small class="text-muted">
                                Lo sentimos, este producto no se puede enviar a su dirección.
                            </small>
                        </p> --}}



                </div>
            </div>
        </div>
        {{-- @endif --}}

        {{-- @else  --}}
        {{-- ENDING IF SHIPPING ADDRESS EXISTS / ELSE NO SHIPPING ADDRESS FOUND --}}

        {{-- <small class="text-muted">
                <a href="/perfil/{{$user->name}}/direcciones">
        Seleccione una Dirección
        </a>
        </small>



    </div>
</div>


@endif --}}

{{-- @else

            <small class="text-muted">
                <a href="{{route('login')}}">Seleccione una Dirección</a>
</small>
</div>
</div>
@endif --}}

{{-- final de Shipping Address --}}

<div v-if="variantes"  class="myFirstSectionInner scrolled"  style="margin-left: 33% ;border-top: 1px solid grey; border-bottom: 1px solid grey; height: auto; width: 350px!important;scrollbar-width: initial;">
    <div class="container is-fluid" style=" padding: 15px 0 15px 0;">
        <div class="noWrap">
            {{-- IMAGE 1 --}}
            
            <span v-for="(variante, imageIndex) in variantes">
                <img v-for="image in variante.imageListed" id="subimage" class="sectionImage subimage" :src="image" alt="##" style="width: 100px; height: auto; max-height:200px; object-fit: scale-down; padding-top: 5%"> 
            </span>
       
           

            
        </div>
        <br>

    </div>
</div>
{{-- COMIENZO FECHA DE ENTREGA --}}


</div>

<br>


{{-- ENDING --}}

</div>
{{-- ENDING PREVIEW DATA --}}
<br>
</div>
</div>
@endsection

@section('categoryOptions')

{{-- crearItemLogic Controla el Tab 2 de imagenes y variaciones --}}
<script src="/scripts/crearItemLogic.js"></script>

{{-- crearItemTabControl controla los tabs en Multi-Step form para crear item page --}}
<script src="/scripts/crearItemTabControl.js"></script>

{{-- wordCount cuenta la cantidad de letras en text area Tab 1 crear item page --}}
<script src="/scripts/wordCount.js"></script>




@endsection
