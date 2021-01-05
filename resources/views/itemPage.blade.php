@extends('mainLayout')

{{-- BUYING ITEM PAGE --}}

@section('thisItem')

<div class="container  grid grid-cols-1 mt-4"  >
    <div class=" grid grid-cols-1 md:grid-cols-5 lg:grid-cols-8">

        <div class="col-start-2 md:col-span-2 md:col-start-1 lg:col-start-1 lg:col-span-3 mb-4" >

            <a class="magnifier-thumb-wrapper" id="sticky">
                @foreach(json_decode($searchedItem->colorImages) as $variante)
                    <img class="img-thumbnail mainImage " 
                             
                            data-toggle="magnify" id="thumb" 
                            data-magnify-src="{{ Storage::URL('assetItems/'.$variante) }}" 
                            src="{{ Storage::URL('assetItems/'.$variante)}}" 
                            alt="{{$item->nombre}}">
                @break  
                @endforeach
            </a>

 
        </div>
    
   
    
        <!-- <div class="magnifier-preview" id="preview"></div> -->

        
    <div class="col-start-1 col-span-5 md:col-start-3 md:ml-6 md:col-end-6 lg:col-start-4 lg:col-end-8 lg:mx-2 lg:ml-4 lg:pl-4 " >
        <div id="DTpageUp" v-cloak>
            

            <article style="margin: 0 0 1em 0;">

                <h1 class="font-bold" style="font-size:28px;">
                    {{$item->nombre}}
                </h1>
                <p style="margin: 0 0 0 0;">
                    <small class="text-muted">
                        <strong>
                            {{$item->marca}}
                        </strong>
                    </small>
                </p>
                <small>
                    <a href="/negocio/compras/{{$item->store->store_id}}" class="text-blue-600 hover:text-yellow-500">
                        Ver productos de {{$item->store->nombreNegocio}}
                    </a>
                </small>
                <br>
                <div>
                    <small class="text-muted" style="font-size: 14px; left:-18px;">
                        (1099) reseñas
                    </small>

                </div>

                <p v-if="!price" class="subtitle" style="color: rgba(36, 36, 36, 0.829); font-size: 21px; margin-bottom: 0;">    
                    &#8353; {{number_format($searchedItem->size[0]->precio, 0, '.', ',')}}
             
                    <small style="font-size: 14px;" class="text-muted">
                     (no incluye iva)
                    </small>
                    <small style="font-size: 13px;">
                        <a href="##" class="text-blue-600 hover:text-yellow-500">
                            Detalles
                        </a>
                    </small>
                </p>
                <p v-else class="subtitle" style="color: rgba(36, 36, 36, 0.829); font-size: 21px; margin-bottom: 0;">                    
                    &#8353; @{{ price }}
                    <small style="font-size: 14px;" class="text-muted">
                        (no incluye iva)
                    </small>
                    <small style="font-size: 13px;">
                        <a href="##">
                            Detalles
                        </a>
                    </small>
                </p>

                @if($shipping)
                    @if($shipping->precioEnvio > 0)

                        <small class="text-muted">
                            Precio de Envió +
                            <strong>
                                &#8353; {{number_format($shipping->precioEnvio, 0, '.', ',')}}
                            </strong>
                        </small>
                    @else
                        <small class="text-muted">
                            Envió
                            <strong>
                                Gratis
                            </strong>
                        </small>
                    @endif
                @endif
                <br>
                

                <div class="content">
                    <p class="mb-4 hidden lg:block">{{$item->descripcion}}</p>
                    <div class="mb-3" >
                    
                        @if(count($item->colors) > 1)

                            <span for="provincia" >
                                <strong> {{ $item->tipoVariante }}: </strong>
                            </span>

                            <span>
                                <select 
                                    onchange="top.location.href = this.options[this.selectedIndex].value" 
                                    style="height: 35px; padding: 0 0 0 .75rem; width: 280px;" 
                                    class="custom-select col-3" 
                                    name="color" 
                                    id="color">
                                    
                                    <option value="{{$searchedItem->color}}"selected style="background-color: #0003;">
                                        {{ucfirst($searchedItem->color)}}
                                    </option>

                                    @foreach ($item->colors as $color)
                                        @if($searchedItem->color != ucfirst($color->color))
                                            <a href="#">
                                            <option  value="{{ url  ('producto/'.$color->link)  }}">
                                                {{ucfirst($color->color)}}
                                            </option>
                                            </a>
                                        @endif
                                    @endforeach
                                </select>
                            </span>
                        
                        @else 
                        
                            @if(trim($item->tipoVariante) != "NoAplica")
                                <span for="provincia" class="">
                                    <strong> {{ $item->tipoVariante }}: </strong> {{ $searchedItem->color }} 
                                </span>
                            
                            @endif

                        @endif
                  
                      
                    </div>
       
                    <div class="mb-3">
                        @if(count($searchedItem->size) > 1)
                            
                            <span>
                                <span style=" margin-top: 15px;"><strong>Tamaño:</strong></span>
                                    
                                    <select 
                                        @change="updateItem($event)" 
                                        class="custom-select col-3" 
                                        name="color" 
                                        id="color">
                                            
                                            @foreach ($searchedItem->size as $size)
                                                
                                                <option value="{{$size->id}}">
                                                    {{$size->size}}
                                                </option>
                                            
                                            @endforeach

                                        </select>
                                    </span>
                           
                                
                                    
                        @else
                            @if(trim($searchedItem->size[0]->size) != "NoAplica")
                                <span style="margin-top: 15px;">
                                    <strong>
                                        Tamaño:
                                    </strong>
                                        {{ strtoupper($searchedItem->size[0]->size) }}
                                </span>

                                
                    
                      
                            @endif

                        @endif
                    </div>
                </div>
                @if($searchedItem->size[0]->quantity <= 0)
                    <p v-if="qty <= 0" style="color: red;">
                        Lo sentimos el {{  $item->tipoVariante }} o Tamaño se encuentra Agotado.
                    </p>
                @endif

                @if($searchedItem->size[0]->quantity > 0)
                    <div style="display: inline;">
                        <span>
                            <span style=" margin-top: 15px;">
                                <strong>
                                    Cantidad:
                                </strong>
                            </span>
                            <select v-model="selectedQty" 
                                style="height: 35px; padding: 0 0 0 .75rem; width: calc(100% + 25px); min-width: 80px;" class="custom-select col-3" 
                                name="color" 
                                id="qty">
                                    
                                @for ($i = 1; $i <= $searchedItem->size[0]->quantity; $i++)
                                
                                    <option value="{{$i}}">
                                        {{$i}}
                                    </option>
                                    
                                @endfor

                            </select>
                        </span>
                    </div>
                @else
                    <div v-if='qty > 0' style="display: inline;">
                        <span>
                            <span style=" margin-top: 15px;">
                                <strong>
                                Cantidad:
                                </strong>
                            </span>
                    
                            <select v-model="selectedQty" 
                                style="height: 35px; padding: 0 0 0 .75rem; width: calc(100% + 25px); min-width: 80px" class="custom-select col-3" 
                                name="color"
                                max="20" 
                                id="color">

                                <option v-for="x in qty">
                                    @{{x}}
                                </option>
                            </select>
                        </span>
                    </div>
                @endif
                   <br>

                    
                <div id="ENVI" class="my-4 text-sm md:text-base lg:text-base">
                    <p class="card-text flex" >
                        <svg width="1.4em" 
                            height="1.4em" 
                            viewBox="0 0 16 16" 
                            class="bi bi-box-seam text-muted mr-2" 
                            fill="currentColor" 
                            xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                        </svg>

                @if (Auth::check()) 

                    @if($selectedAddress != NULL){{-- SHIPPING ADDRESS EXISTS --}}

                        @if(in_array($selectedAddress->provincia, $provinciasEnvio))
                            <p>
                            <small>
                                <strong style="color: seagreen"> 
                                    Si se envía a {{$selectedAddress->provincia}}
                                </strong>
                            </small>
                            </p>
                            <p>
                                <small class="text-muted">
                                    El paquete llega entre
                                    <strong>
                                        {{$startDate}} - {{$endDate}}
                                    </strong>
                                </small>
                            </p>

                            <p>
                                <small class="text-muted">
                                    El paquete se envía por
                                    <strong>
                                        {{$shipping->empresa}}
                                    </strong>
                                </small>
                            </p>
                            
                        @else
                            <small>
                            <strong style="color:rgb(145, 7, 7)"> No se Envía a {{$selectedAddress->provincia}} </strong>
                            </small><small><a href="/perfil/{{Auth::user()->name}}/direcciones"> - Cambiar Dirección</a></small>
                            <p>
                            <small class="text-muted">
                                Lo sentimos, este producto no se puede enviar a su dirección.
                                </small>
                            </p>

                          

                        @endif

                @else {{-- ENDING IF SHIPPING ADDRESS EXISTS / ELSE NO SHIPPING ADDRESS FOUND --}}

                    <small class="text-muted">
                            Para mas información de Envio
                        <a href="/perfil/{{$user->name}}/direcciones" class="text-blue-600 hover:text-yellow-500">
                            Seleccione una Dirección
                        </a>
                        
                    </small>
                    
                @endif

            @else

            <small class="text-muted text-base">
                    Para mas información de Envio
                <a href="{{route('login')}}" class="text-blue-600 hover:text-yellow-500">
                    Iniciar Sesión
                </a>
            </small>
               

            @endif
       



    <div style="text-align: right;">
        @include('BuyingCartButtons')
    </div>

</div>
</div>
    <br>

    <div class="myFirstSectionInner scroll" 
        style="border-top: 1px solid grey; border-bottom: 1px solid grey; height: 7em;">
        <div class="flex flex-nowrap" style=" padding: 15px 0 15px 0;">
            <div class="flex flex-nowrap">
                
                @foreach ($item->colors as $color)
                        @foreach(json_decode($color->colorImages) as $image)
                            @if($image != NULL)
                            <img id="subimage" class="sectionImage subimage" src="{{ Storage::URL('assetItems/'.$image) }}" alt="{{$item->nombre}}">
                            @endif
                        @endforeach
                @endforeach

            </div>
            <br>

        </div>
    </div>

    <br>
    </div>
    </div>
    
{{-- FINAL DE BUY CART BUTTONS --}}
   
    </div>
    </div>

    <div class="container grid grid-rows-1 mt-4 py-4 shadow-sm  " >
        <div class=" grid grid-cols-1 md:grid-cols-6 lg:grid-cols-10 content-start" >

            @if(json_decode($item->specs) != 'null')
                <div class="grid grid-cols-1 mb-4 md:col-span-3 lg:col-span-3 col-start-1 col-span-4  justify-self-start">
                    <div class="pt-10">
                        <h3 class="font-bold">
                        Mas sobre el producto {{$item->nombre}}
                        </h3>
                        <p class="mt-4 md:mt-0">
                            {{$item->descripcion}}
                        </p>
                    </div>
                
                    <div>
                        <table class="mt-4 px-4">

                            @foreach(json_decode($item->specs) as $value)
                                <tr 
                                    style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197);border-top: 1px solid rgb(197, 197, 197); ">
                                    <td 
                                        style="background-color:rgba(236, 236, 236, 0.507); padding: 5px 5px; 5px 7px;width: 180px;"> 
                                            <strong>
                                                {{$value->specName}}
                                            </strong>
                                        </td>
                                    <td 
                                        style="padding: 5px 0 5px 7px; width: 200px;"> 
                                            {{$value->specValue}}
                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                        
                </div>
        
                <div class="col-span-3 lg:col-span-4  centerMyImages p-4 md:p-4">
                    <img class="centerMyImages" src="{{ Storage::URL('assetItems/'.$item->image)}}" >
                </div>
                <div class=" mb-4 md:col-span-3 lg:col-start-8 lg:col-span-4 ">
                    <div class="pt-10">
                        <h3 class="font-bold">
                        Comentarios
                        </h3>
                        <p class="mt-4 md:mt-0">
                            COMENTARIOS DEL PRODUCTO
                        </p>
                        
                    </div>
                    <div >
                        <div class="my-4">
                            <p>Persona con Comentario #2</p>
                            <p><small class="text-gray-600">Comentario #2</small></p>
                        </div>
                        <div class="my-4">
                            <p>Persona con Comentario #3</p>
                            <p><small class="text-gray-600">Comentario #3</small></p>
                        </div>
                        <div class="my-4">
                            <p>Persona con Comentario #4</p>
                            <p><small class="text-gray-600">Comentario #4</small></p>
                        </div>
                        <div class="my-4">
                            <p>Persona con Comentario #5</p>
                            <p><small class="text-gray-600">Comentario #5</small></p>
                        </div>
                    </div>

                    
                        
                </div>

            </div>
                            
                        
       
            @endif


        
    
</div>
</div>

<div class=" form-row " style=" border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 3em 0 0 0.5em">

    <div class="content">

        <div class="col" style="margin: 3em 0 0 0.5em">
            <h3>Mas de lo mismo... Falta arreglar</h1>
                <div class="myFirstSection " style="border: none!important;">
                    <p class="div"> MASSSSSS</p>
                    <div class="myFirstSectionInner scroll" style="margin-top: 5px;">
                        <div class="container is-fluid">
                            <div class="noWrap">

                                @foreach($moreItems as $moreitem)
                                <div class="myCards">
                                    <div class="card-block" style="margin-right: 28px;">

                                        <a href="{{$moreitem->id}}"><img class="sectionImage2 " src="{{ Storage::URL('assetItems/'.$moreitem->image) }}" alt=""></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>

</div>
</div>

@endsection

@section('magnifier')

<script type="text/javascript">
    var evt = new Event()
    m = new Magnifier(evt);
    m.attach({
        largeWrapper: 'preview'
        , thumb: '.mainImage'
        , mode: 'outside'
        , zoom: 2
        , zoomable: false
    })

</script>
<script type="text/javascript">
    $('img').mouseenter(function() {

        var image = $(this).attr('src');

        $('.mainImage').attr("src", image);
        $('#thumb-large').attr("src", image);

    })

</script>
<script src="/scripts/itemPage.js"></script>

@endsection
