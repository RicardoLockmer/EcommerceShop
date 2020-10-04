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

            <div style="padding: 3px 3px 3px 3px; height: 37em;"><a href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}">


                    <img class="myItems card-img-top myStore" src="{{ Storage::URL('assetItems/'.$item->image[0]) }}" alt="{{$item->nombre}}">


                </a>

                <h1 style="margin: 8px 0 0 0; font-size: 2vw">
                    {{$item->nombre}}
                </h1>



                @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>

                    @endfor

                    <small class="text-muted">
                        (1099)
                    </small>

                    <br>
                    <span>
                        &#8353;{{number_format($item->precio, 2, '.', ',')}}
                    </span>
                    <br>
                    <div style="height: 65px; overflow:auto; scrollbar-width: none;">
                        @foreach($item->colors as $color)
                        <span>{{$color->sku}}</span><br>
                        @endforeach

                    </div>
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
