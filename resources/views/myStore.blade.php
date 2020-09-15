@extends('mainLayout')

@if(Auth::user()->id == $store->user_id)

@section('storebanner')
<br>
        <div class="mySpace container">
            <div class="jumbotron" style="background-image: url(/dummy/jtest.jpg);">
                <div style="margin: 0 0 0 76px;">
            <h2 class="mb-4" style="text-transform: uppercase;">
            {{$store->nombreNegocio}}
            </h2>
            <p class="mb-4" style="text-transform: uppercase;">
                BIENVENIDO A TU NEGOCIO, {{$store->usuario}}
            </p>
            <a href="##" class="btn btn-primary">BIENVENIDO</a>
            </div>
            </div>
        </div>
   
@endsection

@section('agregarProductos')

    <div class='container'>
        <div class="centerMyImages" >

            <a class="column myProduct btn centerMyImages" style="border: 1px solid rgb(192, 192, 192);" href="/negocio/{{$store->nombreNegocio}}/nuevo-producto" > 
                agregar producto
            </a>
 
            <a href="/negocio/{{$store->nombreNegocio}}/editar" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
                Editar Negocio
            </a>

            <a class='column myProduct btn centerMyImages'  href="/negocio/{{$store->nombreNegocio}}/productos/" style="border: 1px solid rgb(192, 192, 192);">
                mis productos
            </a>

        </div>
    </div>

@endsection

@section('recientes')
<div class="myFirstSection ">
        <p class="div"> Agregados Recientemente</p>
        <div class="myFirstSectionInner scroll">
            <div class="container is-fluid">
                <div class="noWrap">
                    @foreach($items as $item)
                    <div class="myCards">
                        <div class="card-block">
                            
                        <a href="{{$store->nombreNegocio}}/productos/{{$item->id}}"><img class="sectionImage2 " src="{{ Storage::URL('/storage/assetItems/'.$item->image) }}" alt=""></a>
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
<h1 style="text-align: center; color: red; font-weight: 800; font-size: 40px;">ESTA NO ES LA PAGINA QUE BUSCAS!</h1>

@endsection
@endif