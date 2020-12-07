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
    <div style="margin: 2.3em 0 0 0; border-bottom: 2px solid rgba(184, 184, 184, 0.384) ">
        @foreach($items as $item)
        <div class='card col-10 ' style="padding: 1em 1em 1em 1em;box-shadow:none; border-radius: 0; border-top: 2px solid rgba(184, 184, 184, 0.384)!important;">

        <div class="row no-gutters" style="padding: 3px 20px 3px 20px; height: auto">
            <div class="col-md-2 centerMyImages" style="min-height: 160px; margin: 0 1.5em 0 1.5em; max-height: auto">
                <a href="/negocio/{{$store->nombreNegocio}}/productos/{{$item->id}}">
                    <img class="img-fluid card-img centerMyImages" style="max-height: 50%!important;" src="{{ Storage::URL('assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
                </a>
            </div>
            <div class="col-md-8">
                    <div class="card-body" style="padding: 0 0 0 0.6em;">
                        <h4 class="card-title" style="margin-bottom: 0!important;">
                         <a class="nav-link" style="color: black!important; margin: 0 0 0 0!important; padding: 0 0 0 0!important" href="">{{$item->nombre}} </a>   
                        </h4>
                    </div><br>
                    <div class="card-body" style="padding: 0 0 0 1em; font-size: 14px;">
                        <p  style="margin-bottom: 0!important;">
                          <strong>  Total ventas: </strong> 0
                        </p>
                        <p>
                           <strong> Ultima Venta:</strong> N/A
                        </p>
                        
                        
                        
                        <p><a href="###">Ver Reporte</a><span> | </span><a href="###">Ver Inventario</a></p>
                    </div>



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
</div>

        @endforeach
    </div>
</div>

@endsection
