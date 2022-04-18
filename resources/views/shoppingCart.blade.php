@extends('mainLayout')

@section('ShoppingCart')

<div class="container">
    <div class="flex my-4">
        <div class="text-4xl font-bold" id="CARTQTY">
            Shopping Cart
        </div>
        
    </div>
    <div style="margin: 3em 0 0 0;">
        @if(count($myCart) > 0)
            <form action="/updateCart" method="POST" name="CARTUP" id="CARTUP" style="position: flex;">
            @csrf
                @foreach($myCart as $item)
                    @if($item)
                        
                        <div class="my-4 h-auto" id="{{$item->id}}">
                            <div class="shadow-md border-l border-r rounded-sm flex py-4">

                                {{-- FOTO DEL ITEM --}}

                                <div class="w-20 centerMyImages CARTIM">
                                    
                                    {{-- <a href="/producto/{{$item->associatedModel->colors->link}}"> --}}
                                    @if($item->associatedModel)
                                        @foreach(json_decode($item->associatedModel->colors->colorImages) as $colorImage)
                                            <a href="/producto/{{$item->associatedModel->colors->link}}">
                                                <img class="max-h-fit" src="{{Storage::URL('assetItems/'.$colorImage)}}" alt="{{$item->associatedModel->nombre}}">
                                            </a>
                                            @break
                                        @endforeach
                                    
                                    </a>
                                </div>

                                {{-- ITEM NAME --}}
                                <div class="">
                                    <div class="card-body CARTNM">
                                        <a href="/producto/{{$item->associatedModel->colors->link}}" class="searchItem">
                                            <h5 class="card-title" style="margin-bottom: 0!important;">
                                                {{$item->associatedModel->items->nombre}} 
                                                <small class="font-bold">
                                                    {{ $item->associatedModel->colors->color }}
                                                    @if(trim($item->associatedModel->size) != "NoAplica")
                                                        {{ $item->associatedModel->size }}
                                                    @endif
                                                </small>
                                            </h5>
                                        </a>



                                        {{-- PRECIO --}}
                                        <div class="flex card-text CARTPR text-sm font-bold text-yellow-400">
                                            <div class="mr-1"> HN&#76; </div> 
                                            <div>
                                                {{number_format($item->associatedModel->precio, 0, '.', ',')}}
                                            </div>

                                        </div>
                                        @if ($item->associatedModel->quantity >= 1)


                                            Cantidad: x
                                            <select class="custom-select col-md-2 CARTSEL cantidad pl-2" name="cantidad" id="{{$item->id}}">

                                                <option value="{{$item->quantity}}">
                                                    {{$item->quantity}}
                                                </option>
                                                @for ($i = 1; $i <= $item->associatedModel->quantity; $i++ )
                                                    <option value="{{$i}}">
                                                        {{$i}}
                                                    </option>
                                                @endfor
                                            </select>
                                            
                                            <input type="text" name="DTRID" id="DTRID" value="{{$item->id}}" hidden>
                                        @else
                                            <small style="color:red;">
                                                No disponible
                                            </small>
                                            <br>
                                        @endif
                                        
                                        <small>

                                            <a class="btn CARTDL buttonHoverDEL" style="font-size: 15px; margin-left: 0!important; padding-left: 0!important; padding-right: 5px!important;" name="cantidad" id="{{$item->id}}"> Eliminar</a>|<a href="/producto/{{$item->associatedModel->colors->link}}" class="btn buttonHoverEDIT" style="font-size: 15px; margin-left: 0!important; padding-left: 5px!important;" name="cantidad" id="{{$item->id}}"> Ver </a>
                                        </small>
                                    </div>
                                </div>
                            </div>



                        </div>

                    @endif
                        
                    @endif
                @endforeach
            </form>
        @else
            <div style="padding: 6em 0 6em 0; border-bottom: 2px solid #007bff;" class="text-muted CARTIT">
                No tiene articulos en su carrito.
            </div>
        @endif
    </div>
    <div style="text-align: right; margin: 30px 0em 0 0" id="SUBTOT">
        <h5><strong>SubTotal:</strong>
            &#8353; {{number_format($Total, 0, '.', ',')}}
        </h5>
    </div>
    <div style="text-align: center; margin:75px 100px 45px 100px;">
        <small class="text-muted">
            El precio y la disponibilidad de los artículos en DeTodo.com están sujetos a cambios. El carrito es un lugar
            temporal para almacenar una lista de sus artículos y refleja el precio más reciente de cada artículo.
        </small>
    </div>
    <div style="text-align: center">
        <small>
            TodoMarket.com
        </small>
        <p>Aqui deberia ir el FOOTER</p>
    </div>
</div>



@endsection








@section('cartJQ')

<script type="text/javascript">
    $('select').on('change', function() {
        var selectedValue = $(this).val();
        var DTRID = $(this).attr('id');
        var token = $('input[name=_token]').val();
        $.ajax({
            type: 'POST'
            , url: '/updateCart'
            , data: {
                '_token': token
                , 'cantidad': selectedValue
                , 'rowId': DTRID
            , }
            , success: function(data) {
                $('#SUBTOT').replaceWith('<div style="text-align: right; margin: 6px 5em 0 0" id="SUBTOT"><h5><strong>SubTotal: </strong>&#8353; ' + data[0] + '  </h5></div>');
                $('#CARTCOUNT').replaceWith('<span class="badge badge-light" id="CARTCOUNT">' + data[1] + '</span>');
                if (data[1] == 0) {
                    $('#CARTUP').replaceWith('<div style="padding: 6em 0 6em 0; border-bottom: 2px solid #007bff;" class="text-muted CARTIT">No tiene articulos en su carrito.</div>')
                } else if (data[1] == 1) {
                    $('#CARTQTY').replaceWith('<h1 id="CARTQTY">Mi Carrito<small class="text-muted" style="font-size: 24px;"> (' + data[1] + ' Articulo)</small></h1>');
                } else if (data[1] >= 2) {
                    $('#CARTQTY').replaceWith('<h1 id="CARTQTY">Mi Carrito<small class="text-muted" style="font-size: 24px;"> (' + data[1] + ' Articulos)</small></h1>')
                }
            }
        });
    })

</script>
<script type="text/javascript">
    $('.CARTDL').on('click', function() {
        var DTRID = $(this).attr('id');
        var token = $('input[name=_token]').val();
        $.ajax({
            type: 'post'
            , url: '/deleteCartItem'
            , data: {
                '_token': token
                , 'DTRID': DTRID,

            }
            , success: function(data) {
                $('#' + DTRID + '').remove();
                $('#SUBTOT').replaceWith('<div style="text-align: right; margin: 6px 5em 0 0" id="SUBTOT"><h5><strong>SubTotal: </strong>&#8353; ' + data[0] + '  </h5></div>');
                $('#CARTCOUNT').replaceWith('<span class="badge badge-light" id="CARTCOUNT">' + data[1] + '</span>');

                if (data[1] == 0) {
                    $('#CARTUP').replaceWith('<div style="padding: 6em 0 6em 0; border-bottom: 2px solid #007bff;" class="text-muted CARTIT">No tiene articulos en su carrito.</div>');
                    $('#CARTQTY').replaceWith('<h1 id="CARTQTY">Mi Carrito<small class="text-muted" style="font-size: 24px;"> (' + data[1] + ' Articulos)</small></h1>');
                } else if (data[1] == 1) {
                    $('#CARTQTY').replaceWith('<h1 id="CARTQTY">Mi Carrito<small class="text-muted" style="font-size: 24px;"> (' + data[1] + ' Articulo)</small></h1>');
                } else if (data[1] >= 2) {
                    $('#CARTQTY').replaceWith('<h1 id="CARTQTY">Mi Carrito<small class="text-muted" style="font-size: 24px;"> (' + data[1] + ' Articulos)</small></h1>')
                }
            }

        })

    })

</script>
@endsection
