@extends('mainLayout')

@section('categorias')

<!-- @if($misCategorias == 'Hombre' || $misCategorias == 'Mujer' || $misCategorias == 'Niños') -->
<!-- <div>
    
        <div class="carousel-inner " style="width:100%!important;height: 100vh!important; overflow: hidden;">
            <div class="carousel-item active " style="width:100%!important;height: 100vh!important;">
                <img style=" overflow: hidden;width:100%!important; height: 100vh!important;" class="mainPageImageTop" src="/dummy/{{ $misCategorias }}.jpg" alt="First slide">
            </div>
            
        </div>    
</div> -->
<!-- @else
<div>
    
        <div class="carousel-inner " style="width:100%!important;height: 100vh!important; overflow: hidden;">
            <div class="carousel-item active " style="width:100%!important;height: 100vh!important;">
                <img style=" overflow: hidden; width:100%!important; height: 100vh!important;" class="mainPageImageTop" src="/dummy/Hogar.jpg" alt="First slide">
            </div>
            
        </div>    
</div>
@endif -->
<div class="grid my-4 lg:grid-cols-8" >



<div class="hidden lg:block md:block col-start-1 col-span-1 h-screen block h-auto" >
    <div class="sticky top-10">
        <ul >
        @for($i = 1; $i <= 8; $i++)
            <a class="nav-link" style="font-size: 18px;color: rgb(0, 0, 0)!important; margin: 0.5em 0 0.5em 0.5em!important;" href="">Filter {{$i}}</a>
        @endfor
        </ul>
    </div>    
    
</div>
<div class="grid grid-cols-6 lg:grid-cols-8 col-start-2 col-span-7 my-4 " >
    <div class="col-span-6 mb-4 mx-4">
        <h1><strong>Comprando para {{$misCategorias}}</strong> </h1>
        
       
    </div>
    
@if(count($items) > 0)
    @foreach($items as $item)
        @foreach($item->colors as $colors)
    
    <div class="grid grid-cols-1 col-span-6 md:grid-cols-6 lg:col-span-8 lg:grid-cols-6 lg:grid-cols-8 mx-4 mb-4 shadow-md py-4">
        

            {{-- FOTO DEL ITEM --}}

            <div class="col-start-1 col-span-1 md:col-span-3 lg:col-span-2 lg:col-span-2 centerMyImages" style="min-height: 160px; margin: 0 1.5em 0 1.5em; max-height: auto">
                <a href="/producto/{{$colors->link}}">
                @foreach(json_decode($colors->colorImages) as $ColorImage)
                    <img class="img-fluid card-img centerMyImages" style="max-height: 50%!important;" src="{{Storage::URL('assetItems/'.$ColorImage)}}" alt="{{$item->nombre}}">
                @break
                @endforeach
                </a>
            </div>
            {{-- ITEM NAME --}}
            <div class="grid grid-cols-8 col-span-3 lg:col-span-5">
                <div class="col-span-7 ml-2 mt-4" style="padding: 0 0 0 1em;">
                    <a href="/producto/{{$colors->link}}" class="searchItem">
                        <h4 class="card-title" style="margin-bottom: 0!important;">
                            {{$item->nombre}} {{ $colors->color }}
                        </h4>
                    </a>

                    {{-- STAR RATING LOOP --}}
                    @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        @endfor
                        {{-- PRECIO --}}
                        <p class="card-text" style=" font-size: 16px; font-family:Arial, Helvetica, sans-serif;">
                            <small> &#8353; </small>{{number_format($colors->size[0]->precio, 0, '.', ',')}}
                        </p>
                        
                        
                      
                        {{-- DESCRIPCION --}}
                        <p class="card-text"  style="height: 70px;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{$item->descripcion}}
                        </p>

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
            <a href="/producto/{{$colors->link}}" class="col-start-3 col-span-4 lg:col-start-7 lg:col-span-1  btn btn-dark">Ver Mas</a>
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
