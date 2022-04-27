@extends('mainLayout')

@section('mainSearch')

<div class="container">

    <div style="margin: 2.3em 0 0 0; border-bottom: 2px solid rgba(184, 184, 184, 0.384) ">
Resultados de 
@foreach($search as $sitem)
    ...{{ $sitem }} 
    @endforeach
    

        @foreach($items as $item)
            
        <div class="card mb-3" style="padding: 1em 1em 1em 1em;box-shadow:none; border-radius: 0; border-top: 2px solid rgba(184, 184, 184, 0.384)!important;">
            <div class="row no-gutters">

                {{-- FOTO DEL ITEM --}}

                <div class="col-md-2 centerMyImages" style="min-height: 160px; margin: 0 1.5em 0 1.5em; max-height: auto">
                    <a href="/producto/{{$item->colors[0]->link}}">
                   
                        <img class="img-fluid card-img centerMyImages" style="max-height: 50%!important;" src="{{Storage::URL('assetItems/'.$item->image)}}" alt="{{$item->nombre}}">
                       
                    </a>
                </div>
                {{-- ITEM NAME --}}
                <div class="col-md-8">
                    <div class="card-body" style="padding: 0 0 0 1em;">
                        <a href="/producto/{{$item->colors[0]->link}}" class="searchItem">
                            <div class="text-2xl font-bold text-gray-700" style="margin-bottom: 0!important;">
                                {{$item->nombre}} 
                            </div>
                        </a>

                        {{-- STAR RATING LOOP --}}
                        <div class="flex space-x-2 mt-2">
                            @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                @endfor
                        </div>
                            {{-- PRECIO --}}
                            <div class="text-red-400 w-full flex">
                                <div class="mr-1 font-bold">
                                    HN&#76; 
                                </div>
                                <div>
                                    {{number_format($item->sizes[0]->precio, 0, '.', ',')}}
                                </div>
                            </div>
                            {{-- DESCRIPCION --}}
                            <p class="text-gray-400" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                {{$item->descripcion}}
                            </p>

                            {{-- SHIPS TO PART --}}


                        

                    </div>
                </div>
                <a style="position: absolute; bottom: 15px; right:25px;" href="/producto/{{$item->colors[0]->link}}" class="btn btn-dark">Ver Mas</a>
            </div>
        </div>
    @endforeach

        <br>
        
        


    </div>

</div>

@endsection
