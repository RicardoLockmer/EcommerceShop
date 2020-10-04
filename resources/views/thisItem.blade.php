@extends('mainLayout')

@section('topItems')

<div class='container'>
    <div class="centerMyImages">

        <a class="column myProduct btn centerMyImages" style="border: 1px solid rgb(192, 192, 192);" href="/negocio/{{$store->nombreNegocio}}/nuevo-producto">
            agregar producto
        </a>

        <a href="/negocio/{{$store->nombreNegocio}}/editar" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
            Editar Negocio
        </a>

        <a class='column myProduct btn centerMyImages' href="/negocio/{{$store->nombreNegocio}}/productos/" style="border: 1px solid rgb(192, 192, 192);">
            mis productos
        </a>

    </div>
</div>

@endsection

@section('thisItem')




<br>
<div class="container" style="margin-top: 25px;">
    <div class="card mb-4 " style="padding-top: 1em;">
        <div class="row no-gutters" style="">
            <div class="col centerMyImages" style="padding-left: 3em;">
                <img class="card-img " style="height: auto; max-height: 85%;" src="{{ Storage::URL('assetItems/'.$images[0]) }}" alt="{{$item->nombre}}">
            </div>

            <div class="col-md-6" style="margin-left: 5em;;">
                <article class="card-body">

                    <h1 class="card-title" style="font-size: 28px; margin-bottom: 0;">
                        {{$item->nombre}}
                    </h1>

                    <p style="margin: 0 0 0 0;">
                        <small class="text-muted">
                            <strong>
                                {{$item->marca}}
                            </strong>
                        </small>
                    </p>
                    @for($i = 1; $i < 6; $i++) <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>

                        @endfor
                        <p class="card-text" style="font-size: 18px;">
                            &#8353; {{number_format($item->precio, 0, '.', ',')}}
                        </p>

                        <div class="card-text">
                            <p>{{$item->descripcion}}</p>
                            <p><strong>Categoría:</strong> {{$item->categoria}}</p>
                            <p><strong>Subcategoría:</strong> {{$item->subcategoria}}</p>
                            <strong> SKU:</strong><br>
                            @foreach($item->colors as $color)
                            {{$color->sku}} <br>
                            @endforeach
                            </p>


                        </div>

                </article>

            </div>

        </div>
        <br>

        <div class=" container-fluid" style="margin: 0 3em 0 3em; width: 85%;">

            <p class="div" style="color: rgb(59, 59, 59);">
                {{$item->nombre}}
            </p>

            <div class="myFirstSectionInner scroll" style="text-align:center;">
                <div class="container-fluid">
                    <div class="noWrap">
                        <br>

                        @foreach ($images as $image)
                        @if($image != NULL)
                        <img class="sectionImage" style="margin: 0 1em 0 0;" src="{{ Storage::URL('assetItems/'.$image) }}" alt="{{$item->nombre}}">
                        @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($item->Specs)
    <div class="card mb-4 " style="padding-top: 1em;">

        <div class="col">
            <h4 style="margin: 25px 0 25px 30px;"> <strong>Especificaciones</strong> </h4><br>
            <ul>
                @foreach(json_decode($item->Specs) as $key => $value)
                <li style="list-style: none;">
                    <strong>{{$key}}:</strong> {{$value}}
                </li>
                <br>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</div>


@endsection
