@extends('mainLayout')

@section('categorias')


<div class="flex mx-3 lg:space-x-10 space-y-10" >


    {{-- Filter Box --}}
    <div class="hidden lg:block lg:py-10 lg:pl-3" >
        <div class="">
            @for($i = 1; $i <= 8; $i++)
                <div>
                    <a class="text-blue-600 hover:text-yellow-500" style="font-size: 18px;color: rgb(0, 0, 0)!important;" href="">Filter {{$i}}</a>
                </div>
            @endfor
        </div>      
    </div>

    <div class="grid gap-2 grid-cols-2 lg:gap-6 lg:grid-cols-5 lg:px-10" >  
        @if(count($items) > 0)
            @foreach($items as $item)        
            <!-- ITEM BOX -->
    <div class="grid grid-rows-2 gap-2 p-2 rounded-md shadow-md border-r border-l">
        <!-- IMAGE BOX -->
        <div class="p-2 self-center" style="min-height: 160px;">
            <a href="/producto/{{$item->colors[0]->link}}">
                <img class="img-fluid object-contain card-img centerMyImages mt-2 lg:h-auto max-h-80 lg:max-h-96" src="{{Storage::URL('assetItems/'.$item->image)}}" alt="{{$item->nombre}}">
            </a>
        </div>

        
{{-- INFO BOX --}}
    <div class="p-2">
        <div class="" >
            <div class="">    
                <div class="">
                    <a href="/producto/{{$item->colors[0]->link}}" class="searchItem">
                        <h4 class="font-bold text-md lg:text-2xl " style="overflow:hidden; display:-webkit-box;-webkit-box-orient:vertical; -webkit-line-clamp:2;">
                            {{$item->nombre}} 
                        </h4>
                    </a>
                </div>
                {{-- PRECIO --}} 
                <div v-if="size.quantity > 0" class="text-red-400 w-full flex">
                    <div class="mr-1 font-bold">
                        HN&#76; 
                    </div>
                    <div>
                        {{number_format($item->sizes[0]->precio, 0, '.', ',')}}
                    </div>
                </div>
                {{-- STAR RATING LOOP --}}
                <div class="mb-2">
                    <small class="text-muted flex items-center " style="font-size: 14px; left:-18px;">
                        <div class="mr-2 flex">
                            @for($i = 0; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </small>
                </div>
                {{-- DESCRIPCION --}}
                <div class="text-gray-500 text-sm" >
                    <p class="" style="overflow: hidden;display:-webkit-box;-webkit-box-orient:vertical; -webkit-line-clamp:3;" >
                        {{$item->descripcion}}
                    </p>
                </div>
                {{-- VER MAS BUTTON --}}
                <div class="flex justify-center mt-2">
                    <div class="my-2">
                        <a href="/producto/{{$item->colors[0]->link}}" 
                            class="font-bold rounded-full text-white ">
                            <div class="items-center px-12 py-1 bg-red-500 rounded-full shadow-sm hover:shadow-md hover:bg-red-600">
                                {{ __('VER MAS') }}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div>
           

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