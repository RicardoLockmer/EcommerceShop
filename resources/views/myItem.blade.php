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
@section('myItem')

<div class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-1 lg:grid-cols-2 gap-8 pt-8 lg:pt-10 place-items-start">
        @foreach($items as $item)
        <div class='grid grid-cols-1 gap-y-4 lg:grid-cols-4 border-2 border-solid h-auto w-full shadow-md  mb-4 py-4' >

        
            <div class="h-22 lg:h-36 w-22 col-span-2 col-start-1 justify-self-center m-2" >
                <a class="h-22 w-22" href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}">
                    <img class="antialiaed px-4 h-26 md:h-36 lg:h-36 w-autos centerMyImages shadow-md" src="{{ Storage::URL('assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
                </a>
            </div>
            <div class="h-auto lg:col-start-3 lg:col-span-2 ml-4 lg:relative break-words">
                    <div class="" style="">
                        <h3 class="" style="">
                         <a class="font-bold font-base" style="" href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}">{{$item->nombre}} </a>   
                        </h3>
                    </div><br>
                    <div class="" style="">
                        <p  class="text-sm">
                          <strong>  Total ventas: </strong> 0
                        </p>
                        <p class="text-sm">
                           <strong> Ultima Venta:</strong> N/A
                        </p>
                        
                        <br>
                        
                        <p class="text-sm"><a class="text-sm" href="###">Reporte</a><span> | </span><a class="text-sm" href="###">Inventario</a><span> | </span><a class="text-sm" href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}" >Ver Mas</a></p>
                    </div>



                    <br>
                    <!-- <a href="/negocio/{{$store->nombreNegocio}}/{{$item->id}}/editar" type="submit" class="hidden lg:block btn btn-outline-success btn-sm" style=" margin: 0 1em 0 0; position: absolute; bottom:0px; right: 85px">
                        Editar
                    </a>
                    <form action="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="hidden lg:block btn btn-outline-danger btn-sm" style="margin: 0 1em 0 0; position: absolute; bottom:0px; right: 15px" onclick="return confirm('Esta a punto de Borrar {{$item->nombre}}?')">
                            Borrar
                        </button>
                    </form> -->


            
        </div>
</div>

        @endforeach
    </div>
</div>

@endsection
