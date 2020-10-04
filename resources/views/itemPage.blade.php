@extends('mainLayout')

{{-- BUTING ITEM PAGE --}}

@section('thisItem')

<div class="container" style="margin-left:4%!important;">
    <div class="row">
        {{-- COLUMNA DE LA IMAGEN PRINCIPAL --}}
        <div class="col " style="margin: 3em 0 0 1em; width: 100%;  ">

            <a class="magnifier-thumb-wrapper" id="sticky">
                <img class="img-thumbnail mainImage" style="width: 100% ; margin-bottom: 15px; " data-toggle="magnify" id="thumb" data-magnify-src="{{ Storage::URL('assetItems/'.$item->image[0]) }}" src="{{ Storage::URL('assetItems/'.$item->image[0]) }}" alt="{{$item->nombre}}">
            </a>
        </div>
        {{-- COLUMNA DEL INFO --}}
        <div class="col-5" style="margin: 3em 0 0 6em;">
            <article style="margin: 0 0 1em 0">

                <h1 style="font-size: 28px;margin-bottom: 0;">
                    {{$item->nombre}}
                </h1>
                <p style="margin: 0 0 0 0;">
                    <small class="text-muted">
                        <strong>
                            {{$item->marca}}
                        </strong>
                    </small>
                </p>
                <small>
                    <a href="##">
                        Ver mas productos de {{$item->store->nombreNegocio}}
                    </a>
                </small>
                <br>

                @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>

                    @endfor

                    <small class="text-muted">
                        (1099)
                    </small>

                    <p class="subtitle" style="color: rgba(36, 36, 36, 0.829); font-size: 21px; margin-bottom: 0;">
                        &#8353; {{number_format($item->precio, 0, '.', ',')}}
                        <small style="font-size: 14px;" class="text-muted">
                            (no incluye iva)
                        </small>
                        <small style="font-size: 13px;">
                            <a href="##">
                                Detalles
                            </a>
                        </small>
                    </p>

                    @if($item->shipping->precioEnvio > 0)

                    <small class="text-muted">
                        Precio de Envió +
                        <strong>
                            &#8353; {{number_format($item->shipping->precioEnvio, 0, '.', ',')}}
                        </strong>
                    </small>

                    @else

                    <small class="text-muted">
                        Envió
                        <strong>
                            Gratis
                        </strong>
                    </small>

                    @endif

                    <br>
                    <br>

                    <div class="content">

                        <p>{{$item->descripcion}}</p>

                        <div style="display: inline;">

                            <span for="provincia" class="">
                                <strong> Color: </strong>
                            </span>

                            <span>
                                <select style="height: 35px; padding: 0 0 0 .75rem;" class="custom-select col-3" name="color" id="color">

                                    @foreach ($colores as $color)
                                    <option value="{{$color}}">{{$color}}</option>

                                    @endforeach



                                </select>
                            </span>
                        </div>

                        <p style=" margin-top: 15px;"><strong>Tamaño:</strong> {{$item->size}}</p>

                        {{-- INFO PARA ENVIOS --}}
                        <div id="ENVI">

                            <p class="card-text" style="position: aboslute; bottom:0; right:0;">

                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                </svg>

                                @if (Auth::check()) {{-- USER LOGGED IN --}}

                                @if($selectedAddress != NULL){{-- SHIPPING ADDRESS EXISTS --}}

                                @if(in_array($selectedAddress->provincia, $provinciasEnvio))
                                <small>
                                    <strong style="color: seagreen"> Si se envía a {{$selectedAddress->provincia}}</strong>
                                </small>
                                <p>
                                    <small class="text-muted">
                                        El paquete llega entre
                                        <strong>
                                            {{$startDate}} - {{$endDate}}
                                        </strong>
                                    </small>
                                </p>

                                <p>
                                    <small class="text-muted">
                                        El paquete se envía por
                                        <strong>
                                            {{$shipping->empresa}}
                                        </strong>
                                    </small>
                                </p>
                        </div>
                    </div>
                    @else
                    <small>
                        <strong style="color:rgb(145, 7, 7)"> No se Envía a {{$selectedAddress->provincia}} </strong>
                    </small><small><a href="/perfil/{{Auth::user()->name}}/direcciones"> - Cambiar Dirección</a></small>
                    <p>
                        <small class="text-muted">
                            Lo sentimos, este producto no se puede enviar a su dirección.
                        </small>
                    </p>



        </div>
    </div>

    @endif

    @else {{-- ENDING IF SHIPPING ADDRESS EXISTS / ELSE NO SHIPPING ADDRESS FOUND --}}

    <small class="text-muted">
        <a href="/perfil/{{$user->name}}/direcciones">
            Seleccione una Dirección
        </a>
    </small>



</div>
</div>


@endif

@else

<small class="text-muted">
    <a href="{{route('login')}}">Seleccione una Dirección</a>
</small>
</div>
</div>
@endif
</p>
{{-- final de Shipping Address --}}

{{-- COMIENZO FECHA DE ENTREGA --}}




<br>
<div class="myFirstSectionInner scroll" style="border-top: 1px solid grey; border-bottom: 1px solid grey; height: 7em;">
    <div class="container is-fluid" style=" padding: 15px 0 15px 0;">
        <div class="noWrap">
            {{-- IMAGE 1 --}}
            @foreach ($images as $image)

            @if($image != NULL)
            <img id="subimage" class="sectionImage subimage" src="{{ Storage::URL('assetItems/'.$image) }}" alt="{{$item->nombre}}">
            @endif

            @endforeach
        </div>
        <br>

    </div>
</div>
<div style="text-align: right;">
    @if($item->cantidad == 0)
    <form action="/shoppingCart" method="POST" id="CARTBTN" class="cardbtn">
        @csrf

        <input type="text" name="id" value="{{$item->id}}" hidden>
        <button type="submit" class="btn btn-outline-success cardbtn">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
        </button>

    </form>


    <button type="button" class="btn btn-outline-secondary cardbtn" disabled>Agotado</button>
    @else


    {{-- SHOPPING CART BUTTON --}}
    <form action="/shoppingCart" method="POST" id="CARTBTN" class="cardbtn">
        @csrf


        <button type="submit" class="btn btn-outline-success cardbtn">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
        </button>
        <input type="text" name="id" value="{{$item->id}}" hidden>
    </form>
    <form action="###" method="POST" id="CARTBTN" class="cardbtn">
        <button class="btn btn-outline-success cardbtn">Comprar</button>
    </form>
    @endif
</div>
{{-- FINAL DE BUY CART BUTTONS --}}

</div>

</div>


@if($item->Specs)
<div class="form-row " style="border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 0 0 0 0.5em">

    <div class="content">

        <div class="col" style="margin: 3em 0 0 0.5em">

            <table>
                <h2>Especificaciones</h2><br>
                <h4>{{$item->nombre}}</h4>
                <p>
                    {{$item->descripcion}}
                </p>
                <br>

                @foreach(json_decode($item->Specs) as $key => $value)
                <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197);border-top: 1px solid rgb(197, 197, 197); ">
                    <td style="background-color:rgba(236, 236, 236, 0.507); padding: 5px 5px; 5px 7px;width: 180px;"> <strong>{{$key}}</strong></td>
                    <td style="padding: 5px 0 5px 7px; width: 200px;"> {{$value}}</td>
                </tr>

                @endforeach

            </table>
        </div>

    </div>
</div>
@endif

@if($item->Specs)
<div class=" form-row " style=" border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 3em 0 0 0.5em">

    <div class="content">

        <div class="col" style="margin: 3em 0 0 0.5em">
            <h3>Mas de lo mismo... Falta arreglar</h1>
                <div class="myFirstSection ">
                    <p class="div"> MASSSSSS</p>
                    <div class="myFirstSectionInner scroll">
                        <div class="container is-fluid">
                            <div class="noWrap">

                                @foreach($moreItems as $moreitem)
                                <div class="myCards">
                                    <div class="card-block">

                                        <a href="{{$moreitem->store->nombreNegocio}}/productos/{{$moreitem->id}}"><img class="sectionImage2 " src="{{ Storage::URL('assetItems/'.$image[0]) }}" alt=""></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    </div>
</div>
@endif
</div>


@endsection

@section('magnifier')
<script type="text/javascript">
    var evt = new Event()
    m = new Magnifier(evt);
    m.attach({
        largeWrapper: 'preview'
        , thumb: '.mainImage'
        , mode: 'inside'
        , zoom: 2
        , zoomable: false
    })

</script>
<script type="text/javascript">
    $('img').mouseenter(function() {

        var image = $(this).attr('src');

        $('.mainImage').attr("src", image);
        $('#thumb-large').attr("src", image);

    })

</script>


@endsection
