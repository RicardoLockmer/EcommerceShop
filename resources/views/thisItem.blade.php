@extends('mainLayout')

@section('topItems')

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

@section('thisItem')

<div class="container">
    <div class="card mb-4 " style="padding-top: 1em;" >
  <div class="row no-gutters" style="">
    <div class="col-md-4" style="padding-left: 3em;">
      <img class="card-img" style="height: auto; max-height: 85%;" src="{{ Storage::URL('/storage/assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
    </div>
  
  <div class="col-md-6" style="margin-left: 5em;;">
    <article class="card-body">
    <h1 class="card-title" style="font-size: 28px; margin-bottom: 0;">{{$item->nombre}}</h1>
    <p style="margin: 0 0 0 0;"><small class="text-muted"><strong>{{$item->marca}}</strong></small></p>
    <p class="card-text" style="font-size: 18px;">&#8353; {{number_format($item->precio, 0, '.', ',')}}</p>
      <div class="card-text">
      <p>{{$item->descripcion}}</p>
      <p><strong>Categoría:</strong> {{$item->categoria}}</p>
      <p><strong>Color: </strong>{{$item->color}}</p>
      <p><strong> Tamaño:</strong> {{$item->size}} </p> 

        @if ($item->cantidad == 0)
          <p style="color: red">
            <strong>  Inventario:</strong> {{$item->cantidad}}
          </p>
        @else
          <p>
            <strong>  Inventario: </strong>{{$item->cantidad}}
              
          </p>
        @endif
      
        
    
    <br>

    </div>
    
    </article>
    
  </div>
  
</div>
           <div class="myFirstSection container-fluid" style="margin: 0 3em 0 3em; width: 85%;">
            <p class="div" style="color: rgb(59, 59, 59);">{{$item->nombre}}</p>
                <div class="myFirstSectionInner scroll" style="text-align:center;"  >
                    <div class="container-fluid" >
                        <div class="noWrap">
        {{-- IMAGE 1 --}}
        @foreach ($images as $image)
          @if($image != NULL)
          <img class="sectionImage" style="margin: 0 1em 0 0;" src="{{ Storage::URL('/storage/assetItems/'.$image) }}" alt="{{$item->nombre}}"> 
          @endif
        @endforeach
        

                    </div>
                  </div>
                </div>
        </div>
  </div> 
    

</div>


@endsection