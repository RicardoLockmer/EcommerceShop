@extends('mainLayout')



@section('topItems')

<div class='container'>
    <div class="centerMyImages">

        <a class="column myProduct btn centerMyImages" href="/negocio/{{$store->nombreNegocio}}/nuevo-producto" style="border: 1px solid rgb(192, 192, 192)"> agregar producto</a>

        <a href="/negocio/{{$store->nombreNegocio}}/editar" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
            Editar Negocio
        </a>

        <a class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192)" href="/negocio/{{$store->nombreNegocio}}/productos/">mis productos</a>
    </div>
</div>



@endsection
@section('myItem')

<div class="container">
    <div class="columns row centerMyImages">
        @foreach($items as $item)
        <div class='card col-3' style="text-align: initial; width: 18rem; margin: 3em 38px 0 38px; padding: 5px 5px 5px 5px; position: relative;">

            <div style="padding: 3px 3px 3px 3px; height: 32em;"><a href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}">



                    <img class="myItems card-img-top myStore" src="{{ Storage::URL('assetItems/'.$item->image[0]) }}" alt="{{$item->nombre}}">






                </a>

                <h1 style="margin: 8px 0 0 0; font-size: 2vw">
                    {{$item->nombre}}
                </h1>
                <span>
                    &#8353;{{number_format($item->precio, 2, '.', ',')}}
                </span>
                @if ($item->cantidad == 0)
                <p style="color: red">
                    Inventario: {{$item->cantidad}}
                </p>
                @else
                <p>
                    Inventario: {{$item->cantidad}}
                </p>
                @endif
                <br>
                <a href="/negocio/{{$store->nombreNegocio}}/{{$item->id}}/editar" type="submit" class="btn btn-outline-success btn-sm" style="margin: 0 1em 0 0; position: absolute; bottom:15px; right: 85px">
                    Editar
                </a>
                <form action="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm" style="margin: 0 1em 0 0; position: absolute; bottom:15px; right: 15px" onclick="return confirm('Esta a punto de Borrar {{$item->nombre}}?')">
                        Borrar
                    </button>
                </form>


            </div>
        </div>


        @endforeach
    </div>
</div>

@endsection
