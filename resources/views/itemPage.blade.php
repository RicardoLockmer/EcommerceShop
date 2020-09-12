@extends('mainLayout')

{{-- BUTING ITEM PAGE --}}

@section('thisItem')

<div class="container">
<div class="form-row">
  <div class="card" style="width: 20em; height: auto; margin: 3em 0 0 0.5em" >

    <article class="card-body" >
      <a class="magnifier-thumb-wrapper">
          <img class="img-thumbnail mainImage" style="max-height: 440px!important; width: 100%;" data-toggle="magnify" id="thumb" data-magnify-src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" alt="{{$item->nombre}}">
              
      </a>
      
      {{-- BBB --}}
      @if($item->cantidad == 0)
        <button type="button" class="btn btn-outline-secondary cardbtn" disabled>Agotado</button>
      @else
        <a class="btn btn-outline-success cardbtn" >Comprar</a>
        
        {{-- SHOPPING CART BUTTON --}}
        <form action="/shoppingCart" method="POST" class="cardbtn" style="right: 115px;">
          @csrf
         
        <input type="text" name="id" value="{{$item->id}}" hidden>
          <button type="submit" class="btn btn-outline-success" >
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
          </button>

        </form>
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