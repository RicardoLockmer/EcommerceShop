@extends('mainLayout')

@section('categorias')


<div class="grid my-4 lg:grid-cols-12 " >



    <div class="hidden lg:block md:block col-start-1 col-span-1 h-screen block h-auto " >
        <div class="sticky top-10">
            
            @for($i = 1; $i <= 8; $i++)
                <a class="block text-blue-600 hover:text-yellow-500" style="font-size: 18px;color: rgb(0, 0, 0)!important; margin: 0.5em 0 0.5em 0.5em!important;" href="">Filter {{$i}}</a>
            @endfor
            
        </div>    
        
    </div>

        <div class="grid grid-cols-12 lg:grid-cols-12 col-start-2 col-span-10 mb-4 " >
    <div class="grid col-start-1 col-span-12 h-28  bg-yellow-200 bg-opacity-40 sm:mt-0 lg:-mt-1/2  justify-items-center relative " style="z-index:5;">
                <p class="font-bold text-gray-600">Muy Pronto...</p>
                    <p id="demo" class=" justify-center font-bold text-2xl lg:text-6xl text-gray-600" ></p>
                </div>
           
        
            @if(count($items) > 0)
                @foreach($items as $item)
                    @foreach($item->colors as $colors)
                <!-- ITEM BOX -->
            <div class="grid grid-cols-4 p-1 grid-rows-1 my-2  col-span-6 md:grid-cols-6 md:my-4 lg:pb-4 border-solid border-gray-200  lg:col-span-4 lg:grid-cols-8 mx-1 lg:mx-4 lg:mb-4  shadow-md ">

                <!-- IMAGE BOX -->
                <div class="grid col-start-1 row-span-1  col-span-6 md:col-span-3 lg:col-start-2 lg:col-span-6 centerMyImages " style="min-height: 160px;">
                    <a href="/producto/{{$colors->link}}">
                        @foreach(json_decode($colors->colorImages) as $ColorImage)

                            <img class="img-fluid object-contain card-img centerMyImages mt-2 lg:h-auto max-h-80 lg:max-h-96" src="{{Storage::URL('assetItems/'.$ColorImage)}}" alt="{{$item->nombre}}">
                        @break
                        @endforeach
                    </a>
                </div>
  
            
            <div class="grid grid-col-12 grid-rows-1 my-2 lg:grid-cols-8 col-span-3 px-2 lg:col-span-8">


                <div class="col-span-9 md:pl-4 max-h-72 lg:col-span-8 lg:items-end" >


                    <a href="/producto/{{$colors->link}}" class="searchItem  lg:items-end">
                        <h4 class="font-bold  text-md lg:text-2xl w-36 md:w-40 lg:w-full " style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                            {{$item->nombre}} {{ $colors->color }}
                        </h4>
                    </a>
                    <div class=" col-span-9  max-h-72 lg:col-span-6 h-24">
                        <a href="###" class="searchItem">
                            <h4 class="text-gray-400 text-sm lg:text-base">
                            <strong>{{$item->marca}}</strong>  
                            </h4>
                        </a>
                        {{-- STAR RATING LOOP --}}
                        <!-- @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            @endfor -->
                        {{-- PRECIO --}}
                        <div class="">
                            <p class="font-bold text-green-700" style=" font-size: 16px; font-family:Arial, Helvetica, sans-serif;">
                                <span> &#8353; </span>{{number_format($colors->size[0]->precio, 0, '.', ',')}}
                            </p>
                        </div>
                        
                        
                      
                        {{-- DESCRIPCION --}}
                        <div class="text-gray-400 " >
                            <p class="" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical; -webkit-line-clamp: 3;" >
                                {{$item->descripcion}}
                            </p>
                        </div>

                        {{-- SHIPS TO PART --}}
                       
                        <!-- <p class="card-text" style="position: aboslute; bottom:0; right:0;">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                                <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />

                            </svg>
                            <small class="text-muted">
                                Envió a todo Costa Rica.
                            </small>
                        </p> -->
                        <!-- @include('ShipLogic') -->



                    </div>
            <div class=" grid mt-4 justify-items-center">
                <div class="grid  w-full lg:w-1/2 border-red-400">
                    
                    <a href="/producto/{{$colors->link}}" 
                        class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        
                            
                        </span>
                        {{ __('Ver Mas') }}
                    </a>
                </div>
            </div>
            </div>
        </div>
        
    </div>
           

    @endforeach
    @endforeach
@else
<p class="textmuted" style="text-align:center;">Lo sentimos aun no tenemos productos en esta categoria!</p>

@endif
           
</div>
</div>
                    </div>
                    </div>
                    </div>
                   
                  

@endsection


@section('clock')
<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 1, 2021 09:00:00").getTime();

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

@endsection