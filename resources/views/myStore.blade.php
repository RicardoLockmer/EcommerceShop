@extends('mainLayout')

@if(Auth::user()->id == $store->user_id)

@section('storebanner')


@endsection

@section('agregarProductos') 
<canvas id="myChart" width="400" height="100"></canvas>
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

@section('recientes')
<div class="myFirstSection">
    <span class="div">Mas Vendidos</span><small>(Esta Semana)</small>
    <div class="myFirstSectionInner scroll">
        <div class="container is-fluid">
            <div class="noWrap">
                @foreach($items as $item)
                <div class="myCards">
                    <div class="card-block">

                        <a href="{{$store->nombreNegocio}}/productos/{{$item->id}}">
                        <img class="sectionImage2 h-20 w-auto md:h-24 lg:h-32" src="{{ Storage::URL('assetItems/'.$item->image)  }}" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="myFirstSection ">
    <p class="div"> Vendidos Recientemente</p>
    <div class="myFirstSectionInner scroll">
        <div class="container is-fluid">
            <div class="noWrap">
                @foreach($items as $item)
                <div class="myCards">
                    <div class="card-block">

                        <a href="{{$store->nombreNegocio}}/productos/{{$item->id}}">
                        <img class="sectionImage2 h-20 w-auto md:h-24 lg:h-32" src="{{ Storage::URL('assetItems/'.$item->image)  }}" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="myFirstSection ">
    <p class="div"> Agregados Recientemente</p>
    <div class="myFirstSectionInner scroll">
        <div class="container is-fluid">
            <div class="noWrap">
                @foreach($items as $item)
                <div class="myCards">
                    <div class="card-block">

                        <a href="{{$store->nombreNegocio}}/productos/{{$item->id}}">
                        <img class="sectionImage2 h-20 w-auto md:h-24 lg:h-32" src="{{ Storage::URL('assetItems/'.$item->image)  }}" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

@else

@section('errorStore')
<h1 style="text-align: center; color: red; font-weight: 800; font-size: 40px;">ESTA NO ES LA PAGINA QUE ESTAS BUSCANDO!</h1>

@endsection
@endif
