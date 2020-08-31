@extends('mainLayout')

{{-- BUTING ITEM PAGE --}}

@section('thisItem')

<div class="container">
<div class="form-row">
  <div class="card" style="width: 20em; height: auto; margin: 3em 0 0 0.5em" >

    <article class="card-body" >
      <a class="magnifier-thumb-wrapper">
          <img class="img-thumbnail mainImage" data-toggle="magnify" id="thumb" data-magnify-src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
              
      </a>
      
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
          <img id="subimage" class="sectionImage subimage" src="{{ Storage::URL('storage/assetItems/'.$image) }}" alt="{{$item->nombre}}"> 
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

@section('magnifier')
  <script type="text/javascript">
  var evt = new Event()
      m = new Magnifier(evt);
      m.attach({
      thumb: '.mainImage',
      mode: 'inside',
      zoom: 3,
      zoomable: false
      })
   

</script>
<script type="text/javascript">
  
    $('img').mouseenter(function () {
      
    var image = $(this).attr('src');
    
    $('.mainImage').attr("src", image);
    $('#thumb-large').attr("src", image);
    })
    
  
</script>
@endsection