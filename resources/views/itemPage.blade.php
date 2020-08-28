@extends('mainLayout')



@section('thisItem')

<div class="container">
<div class="form-row">
  <div class="card" style="width: 20em; height: auto; margin: 3em 0 0 0.5em">

    <article class="card-body"  style="position: relative;">

      <img class="img-thumbnail" src="{{ Storage::URL('/storage/assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
{{-- BBB --}}
      @if($item->cantidad == 0)
        <button type="button" class="btn btn-outline-secondary cardbtn" disabled>Agotado</button>
      @else
        <a class="btn btn-outline-success cardbtn" >Comprar</a>
        
      @endif
    
    </article>
    
  </div>

  <div class="card col" style="margin: 3em 0 0 1em">
    <article style="margin: 1em 0 1em 1.5em">
      <h1 style="font-size: 28px;">
        {{$item->nombre}}
      </h1>
      <p class="subtitle" style="color: rgba(0, 138, 0, 0.664)">
        &#8353;{{number_format($item->precio, 2, '.', ',')}}
      </p>

      <div class="content">
      <p>{{$item->descripcion}}</p>
      
      <p>Color: {{$item->color}}</p>
      <p>Tamaño: {{$item->size}}</p>
      
        <div class="myFirstSection">
            <p class="div" style="color: rgb(59, 59, 59);">{{$item->nombre}}</p>
                <div class="myFirstSectionInner scroll" >
                    <div class="container is-fluid">
                        <div class="noWrap">
        {{-- IMAGE 1 --}}
        @foreach ($images as $image)
          @if($image != NULL)
          <img class="sectionImage" src="{{ Storage::URL('/storage/assetItems/'.$image) }}" alt="{{$item->nombre}}"> 
          @endif
        @endforeach
        </div>
        <br>
       
                  </div>
                </div>
        </div>
    
    <br>

    </div>
    </article>
  </div>
</div>
            
    

</div>


@endsection