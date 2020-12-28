@extends('mainLayout')

@section('topItems')

<div class='container'>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-8 lg:pt-10 place-items-center">

        <a class="border-2 border-solid font-bold hover:bg-gray-500 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages "  href="/negocio/{{$store->nombreNegocio}}/nuevo-producto">
            Agregar Producto
        </a>

        <a href="/negocio/{{$store->nombreNegocio}}/editar" class=' border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages ' >
            Editar Información
        </a>

        <a class='border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative md:col-start-1 md:col-span-2 shadow-md tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white h-16 w-80 md:w-96 lg:w-80 lg:h-20 centerMyImages' href="/negocio/{{$store->nombreNegocio}}/productos/">
            Productos
        </a>

    </div>
</div>

@endsection

@section('thisItem')




<br>
<div class="container mt-10 grid grid-cols-1" >
    <div class="mb-4 shadow-md ">
        <div class=" grid grid-cols-1 lg:grid-cols-6" style="">


            <div class="centerMyImages  lg:col-start-2 lg:col-span-2" style="padding-left: 3em;">
                <img class="card-img h-auto w-auto"  src="{{ Storage::URL('assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
            </div>

            <div class="grid px-4  lg:grid-cols-4 lg:col-start-4 lg:col-end-6">
                <article class="space-y-2 my-4 col-span-4">

                    <h1 class="font-bold" style="font-size: 28px; margin-bottom: 0;">
                        {{$item->nombre}}
                    </h1>

                   
                        <small class="text-muted">
                            <strong>
                                {{$item->marca}}
                            </strong>
                        </small>
                   
                    <div class="grid grid-cols-5 gap-1 w-16">
                     @for($i = 1; $i < 6; $i++) 
                    <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill flex" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                        @endfor
                    </div>
                   

                        

                        <div class="card-text space-y-2">
                            <p>{{$item->descripcion}}</p>
                            <p><strong>Categoría:</strong> {{$item->categoria}}</p>
                            <p><strong>Subcategoría:</strong> {{$item->subcategoria}}</p>
                            
                        

                           
                        </div>
                        <p class="text-sm"><a class="text-sm" href="###">Reporte</a><span> | </span><a class="text-sm" href="###">Inventario</a><span> | </span><a class="text-sm" href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}" >Editar</a></p>
                    <form action="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}" method="POST" class="grid grid-cols-4">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="hidden lg:block btn btn-outline-danger btn-sm col-start-4 col-end-5 mt-6"  onclick="return confirm('Esta a punto de Borrar {{$item->nombre}}?')">
                            Borrar
                        </button>
                    </form> 
                </article>

            </div>

        </div>
        <br>

        <div class=" container-fluid" style="margin: 0 3em 0 3em; width: 85%;">

            <p class="div" style="color: rgb(59, 59, 59);">
                {{$item->nombre}}
            </p>

            <div class="myFirstSectionInner scroll" style="text-align:center;">
                <div class="flex flex-nowrap ">
                    <div class="flex flex-nowrap ">
                        <br>

                      @foreach ($colors as $color)
                      @foreach(json_decode($color->colorImages) as $imgs)
                        @if($imgs != NULL) 
                        <img class="sectionImage" style="margin: 0 1em 0 0;" src="{{ Storage::URL('assetItems/'.$imgs) }}" alt="{{$item->nombre}}">
                        
                        @endif
                        @endforeach

                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-row shadow-md mb-4" >

    <div class="content mb-4">

        <div class="col" style="margin: 3em 0 0 0.5em">

            <table>
                <h1 class="font-bold text-size-16">Detalles de {{$item->nombre}}</h1><br>
                
                <p>
                    {{$item->descripcion}}
                </p>
                <br>

                @foreach(json_decode($item->specs) as $value)
                <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197);border-top: 1px solid rgb(197, 197, 197); ">
                    <td style="background-color:rgba(236, 236, 236, 0.507); padding: 5px 5px; 5px 7px;width: 180px;"> <strong>{{$value->specName}}</strong></td>
                    <td style="padding: 5px 0 5px 7px; width: 200px;"> {{$value->specValue}}</td>
                </tr>

                @endforeach

            </table>
        </div>

    </div>
</div>
  
</div>


@endsection
