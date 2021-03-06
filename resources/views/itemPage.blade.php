@extends('mainLayout')

{{-- BUYING ITEM PAGE --}}

@section('thisItem')
<div class="container bg-white mt-4"  >
    <div class=" grid grid-cols-1 md:grid-cols-5 lg:grid-cols-12 shadow-md rounded-md p-4">
        <div class="col-start-3 md:col-span-2 md:col-start-1 lg:col-start-2 lg:col-end-5 lg:w-full lg:ml-10 mb-4">
            <div class="w-full h-full">
                <a  id="sticky">
                    <img class="mainImage object-contain object-scale-down w-full" src="{{ Storage::URL('assetItems/'.$item->image)}}" id="image" alt="{{$item->nombre}}">
                </a>
            </div>
        </div>
        <div class="col-start-1 col-span-5 md:col-start-3 md:ml-6 md:col-end-6 lg:col-start-6 lg:col-span-5 lg:mx-2 lg:ml-4 lg:pl-4 ">
            <div id="DTpageUp" v-cloak>
                <input type="text" id="Item" value="{{$item->colors[0]->id}}" hidden>
                
                <article style="margin: 0 0 1em 0;">
                <h1 class="font-bold" style="font-size:28px;">
                    @{{item.nombre}}
                </h1>
                <p style="margin: 0 0 0 0;">
                    <small class="text-muted text-base">
                        <strong>
                            @{{item.marca}}
                        </strong>
                    </small>
                </p>
                
                {{-- RATINGS --}}
                <div class="">
                    <small class="text-muted flex items-center" style="font-size: 14px; left:-18px;">
                        <div class="mr-2 flex">
                            @for($i = 0; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            @endfor
                        </div>
                        (1099) rese??as
                    </small>
                    <small class="text-muted flex items-center" style="font-size: 14px; left:-18px;">
                        <div class="mr-2 flex">
                            @for($i = 0; $i <= 5; $i++)
                                @if($i <= 3 )
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                @endif
                            @endfor
                        </div>
                        (999) rese??as
                    </small>
                </div>


                <div v-if="item.descripcion" class="content">
                    <details class="mt-4 py-2 border-b rounde-md" open>
                    <summary class="px-2 font-bold">Descripci??n</summary>
                    <p class="mb-4 mt-4 px-2 hidden lg:block font-bold text-gray-600 text-md text-sm">@{{item.descripcion}}</p>
                    </details>
                </div>
                <div v-if="item.keyFeatures" class="content">
                    <details class="mt-2 mb-4 py-2 border-b rounde-md">
                    <summary class="px-2 font-bold">Caracter??stica</summary>
                    <ul class="list-disc list-inside my-4">
                        @foreach(json_decode($item->keyFeatures) as $feature)
                            <li class="font-bold text-gray-600 text-sm"> 
                                    {{$feature->feature}}
                            </li>                                 
                        @endforeach
                    </ul>
                    </details>
                </div>
                <div>
                    <div v-if="colors.length > 0" class="mb-3" >
                        
                            <span for="provincia" >
                                <strong> {{ $item->tipoVariante }}: </strong>
                            </span>
                            
                                <div  id="Items" class="flex space-x-5 p-2">
                                    <img v-for="(img, index) in item.colors" :class="(index == 0) ? 'h-16 py-2 px-4 hover:shadow-lg shadow-md hover:border-yellow-300 rounded-full border-2 cursor-pointer border-yellow-500' : 'h-16 py-2 px-4 hover:shadow-lg shadow-md hover:border-yellow-300 rounded-full border-2 cursor-pointer'" :id="img.id" v-on:click="updateItem" :src="imgPreUrl + img.colorImages[0]"  alt="">
                                    
                                </div>
                     
                     
                            
                      
                    </div>
                    <div class="mb-3">
                        <div>
                            <span style=" margin-top: 15px;">
                                <strong>Tama??o: </strong>
                            </span>
                            <div class="text-muted" v-if="!sizes">
                                <small>
                                    Seleccione un {{ $item->tipoVariante }}
                                </small> 
                            </div>
                            <div id="Sizes" class="flex space-x-5 py-2">
                                
                                <div v-for="size in sizes" :id="size.id" v-on:click="updateSelectedSize($event)" :class="(size.quantity > 0) ? 'w-auto hover:shadow-lg shadow-md hover:border-yellow-300 border-2 cursor-pointer grid justify-items-center rounded-full mx-2' : 'w-auto border-2 cursor-not-allowed bg-gray-200 grid content-center rounded-full mx-2'">
                                    <span :class="(size.quantity > 0) ? 'font-bold px-4 mt-1 mx-2' : 'font-bold px-4 mx-2 w-full'">
                                        @{{size.size}}
                                    </span>
                                    <div v-if="size.quantity > 0" class="font-bold mb-1 text-green-500 px-4">
                                       &#76; @{{size.precio.toLocaleString()}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
                
                
                <div>
                    <span style=" margin-top: 15px;">
                        <strong>
                            Cantidad:
                        </strong>
                    </span>
                    <div v-if="qty > 0" id="QTY" class="flex space-x-5 p-2">
                        <div  v-for="index in qty" :id="index" class=" w-auto hover:shadow-lg shadow-md hover:border-yellow-300 border-2 cursor-pointer rounded-full  font-bold"> 
                            <div class="Quantity px-4" v-if="qty >= index" v-on:click="updateSelectedQTY($event)">
                                @{{index}}
                            </div> 
                        </div>
                    </div>
                    <div v-else class="mx-2">
                        <div v-if="qty <= 0" class="w-auto py-2 px-4 mx-2 font-bold text-red-500">
                            Lo sentimos el {{ $item->tipoVariante }} o Tama??o se encuentra Agotado.
                        </div>
                    </div>
                </div>
               
                <div id="ENVI" class="my-4 text-sm md:text-base lg:text-base">
                    <p class="card-text flex" >
                        <svg width="1.5em" 
                            height="1.5em"
                            class="mr-2"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>

                @if (Auth::check()) 

                    @if($selectedAddress != NULL){{-- SHIPPING ADDRESS EXISTS --}}

                        @if(in_array($selectedAddress->canton, $provinciasEnvio))
                            
                            <small>
                                <strong class="text-green-500"> 
                                    Si se env??a a {{$selectedAddress->canton}}
                                </strong>
                            </small>
                           </p>
                          
                                <small class="text-muted">
                                    El paquete llega entre
                                    <strong>
                                        {{$startDate}} - {{$endDate}}
                                    </strong>
                                </small>
                            </p>

                            {{-- <p>
                                <small class="text-muted">
                                    El paquete se env??a por
                                    <strong>
                                        {{$shipping->empresa}}
                                    </strong>
                                </small>
                            </p> --}}
                            
                        @else
                            <small>
                            <strong class="text-red-600 mr-2"> No se Env??a a {{$selectedAddress->provincia}} </strong>
                            </small> <small class="ml-2"> <a class="text-blue-600" href="/perfil/{{Auth::user()->name}}/direcciones">Cambiar Direcci??n</a></small>
                            <p>
                            <small class="text-muted">
                                Lo sentimos, este producto no se puede enviar a su direcci??n.
                                </small>
                            </p>

                          

                        @endif

                @else {{-- ENDING IF SHIPPING ADDRESS EXISTS / ELSE NO SHIPPING ADDRESS FOUND --}}

                    <small class="text-muted">
                            Para mas informaci??n de Envio
                        <a href="/perfil/{{$user->name}}/direcciones" class="text-blue-600 hover:text-yellow-500">
                            Seleccione una Direcci??n
                        </a>
                        
                    </small>
                    
                @endif

            @else

            <small class="text-muted text-base">
                    Para mas informaci??n de Envio
                <a href="{{route('login')}}" class="text-blue-600 hover:text-yellow-500">
                    Iniciar Sesi??n
                </a>
            </small>
               

            @endif
            <div class="grid justify-center my-4 border border-gray-200 hover:bg-gray-100 rounded-full py-2 px-3 shadow-md">
                <a href="/negocio/compras/{{$item->store->store_id}}" class="text-gray-700  text-sm font-bold ">
                    Ver productos de {{$item->store->nombreNegocio}}
                </a>
            </div>



    <div class="flex justify-end space-x-3">
        @include('BuyingCartButtons')
    </div>

</div>
</div>
   
    
            
    <div class="myFirstSectionInner scroll mb-10" 
        style="border-top: 1px solid grey; border-bottom: 1px solid grey; height: 7em;">
        <div class="flex nowrap" style=" padding: 15px 0 15px 0;">
            <div class="flex nowrap">
                
                @foreach ($item->colors as $color)
                            
                    @foreach(json_decode($color->colorImages) as $image)
                        @if($image != NULL)
                                
                            <img id="subimage" class="sectionImage subimage cursor-pointer" src="{{ Storage::URL('assetItems/'.$image) }}" alt="{{$item->nombre}}">
          
                        @endif
                    @endforeach
            
                @endforeach

            </div>
        </div>
    </div>

    
                </div>
            </div>
            <div class="container grid grid-rows-1 mt-4 py-4  border-t border-gray-200 shadow-md" >
                <div class=" grid grid-cols-1 md:grid-cols-6 lg:grid-cols-10 content-start" >
        
                    <div class="grid grid-cols-1 mb-4 md:col-span-3 lg:col-span-5 col-start-1 col-span-4  justify-self-start">
                        <div class="">
                            <h3 class="font-bold text-2xl">
                             {{$item->nombre}}
                            </h3>
                            <p class="mt-4 md:mt-0">
                                {{$item->descripcion}}
                            </p>
                        </div>
                    @if(json_decode($item->specs))
                        
                            <div class="">
                                <table class=" my-5 shadow-md w-full">
        
                                    @foreach(json_decode($item->specs) as $value)
                                        <tr
                                            style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197);border-top: 1px solid rgb(197, 197, 197); ">
                                            <td class="px-3 py-2" 
                                                style="background-color:rgba(236, 236, 236, 0.507); padding: 5px 5px; 5px 7px;width: 180px;"> 
                                                    <strong>
                                                        {{$value->specName}}
                                                    </strong>
                                                </td>
                                            <td class="px-3 py-2"
                                                style="padding: 5px 0 5px 7px; width: 200px;"> 
                                                    {{$value->specValue}}
                                            </td>
                                        </tr>
        
                                    @endforeach
        
                                </table>
                            </div>
                                
                            
                            
                            @endif
                            @if(json_decode($item->keyFeatures) != 'null')
                            <ul class="list-disc list-inside my-4">
                                @foreach(json_decode($item->keyFeatures) as $feature)
                                    <li class=""> 
                                        
                                            {{$feature->feature}}
                                        
                                    </li>                                 
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    <div class=" mb-4 md:col-span-3 lg:col-start-8 lg:col-span-4 ">
                            <div class="">
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
        
                
            
            </div>
        </div>
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

{{-- <script type="text/javascript">
    var evt = new Event()
    m = new Magnifier(evt);
    m.attach({
        largeWrapper: 'preview'
        , thumb: '#thumb'
        , mode: 'outside'
        , zoom: 2
        , zoomable: false
    })

</script> --}}
<script type="text/javascript">
    $('img').click(function() {

        var image = $(this).attr('src');

        $('.mainImage').attr("src", image);
        $('#thumb-large').attr("src", image);

    })

</script>

<script src="/scripts/itemPage.js"></script>

@endsection
 {{-- @section('clock')
<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 1, 2022 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "D " + hours + "H "
  + minutes + "M " + seconds + "s";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

@endsection --}}