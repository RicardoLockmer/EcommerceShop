<div style="position: absolute; right: 135px; top: 95px; z-index: 5;">
<button v-if="vistaPrevia" class="btn btn-danger btn-sm" @click="quitarVistaPrevia" style="float:right;">Ocultar Vista Previa</button>
<button v-if="!vistaPrevia" class="btn btn-primary btn-sm" @click="quitarVistaPrevia" style="float:right;">Ver Vista Previa</button>
</div>
<div v-if="vistaPrevia" class="col " style="height: auto;   border-left: 2px dotted grey;">
        <div class="myFormData " style="margin-left: 0.6em!important;">

            {{-- vista previa titulo --}}
            <span style="font-size: 26px;"> <strong>Vista Previa</strong> 
            <small>
            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Al agregar algo en el formulario se actualiza en la vista previa. ">
        <svg style="margin:0 0 0 8px; font-size: 22px; padding-bottom: 5px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>

</small>

    </span> <br>
<small class="text-muted">Asi es como veria un comprador su producto</small>
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
                            &#8353;  
                            <strong  style="color:red;">
                                [Varia a la direccion del comprador]
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
                                    <strong> @{{ selectedType }}: </strong>
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
                            <div style="display: inline;" >

                                <span for="provincia" class="" >
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
                                        <strong style="color: seagreen"> Si se envía a <span v-for="provincia in SelectedProv"> - @{{provincia}} </span></strong>
                                    </small>
                                    <p>
                                        <small class="text-muted">
                                            El paquete llega entre
                                            <strong style="color:red;">
                                               [ Fecha Actual + Tiempo de Entrega ] - [ Fecha de Hoy + Tiempo de Entrega + Tiempo de Entrega ]
                                               
                                            </strong>
                                        </small>
                                    </p>

                                    <p>
                                        <small class="text-muted">
                                            El paquete se envía por
                                            <strong>
                                                @{{ empresaEnvios }}
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
<br>
<div class="form-row " style="border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 0 0 0 0.5em">

    <div class="content">

        <div class="col" style="margin: 3em 0 0 0.5em">

            <table>
                <h2>Detalles de @{{nombre}}</h2><br>
                
                <p >
                    @{{ descripcion }}
                </p>
                <br>

                
                <tr v-for="spec in specs" style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197);border-top: 1px solid rgb(197, 197, 197);">
                    <td style="background-color:rgba(236, 236, 236, 0.507); padding: 5px 5px; 5px 7px;width: 180px;"> @{{ spec.specName}}<strong></strong></td>
                    <td style="padding: 5px 0 5px 7px; width: 200px;"> @{{spec.specValue}}</td>
                </tr>

                

            </table>
        </div>

    </div>

</div>

<br>