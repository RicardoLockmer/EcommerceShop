@extends('mainLayout')

@section('mainSearch')

<div class="container">

    <div>
Resultados de 
@foreach($search as $sitem)
    ...{{ $sitem }} 
    @endforeach
    

    <div class="grid grid-cols-3 gap-4" >
        @foreach($items as $item)
            
            <div class="grid grid-cols-2 py-4 shadow-sm border rounded-md">

                {{-- FOTO DEL ITEM --}}

                <div class="px-4" >
                    <a href="/producto/{{$item->colors[0]->link}}">
                   
                        <img class="centerMyImages max-w-1/2" src="{{Storage::URL('assetItems/'.$item->image)}}" alt="{{$item->nombre}}">
                       
                    </a>
                </div>
                {{-- ITEM NAME --}}
                <div class="px-4">
                    <div class="" >
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
                        <p class="text-gray-400" style="white-space: wrap; overflow: hidden; text-overflow: ellipsis; overflow: hidden;display:-webkit-box;-webkit-box-orient:vertical; -webkit-line-clamp:3;">
                            {{$item->descripcion}}
                        </p>
                    </div>
                    <div class="flex justify-start mt-4 ">
                        <a href="/producto/{{$item->colors[0]->link}}" class="rounded-l-full rounded-r-full bg-red-500 hover:bg-red-600 shadow-md py-1 px-5 text-white font-bold">VER MAS</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br>
        
        


    </div>

</div>

@endsection
