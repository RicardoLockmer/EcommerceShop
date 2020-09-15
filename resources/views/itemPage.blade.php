@extends('mainLayout')

{{-- BUTING ITEM PAGE --}}

@section('thisItem')

<div class="container">
  <div class="form-row">
    <div class="col" style="width: 45%; height: auto; margin: 1.9em 0 0 0; " >
      <article class="card-body" style="padding-left: 0; ">
          <a class="magnifier-thumb-wrapper">
            <img 
              class="img-thumbnail mainImage" 
              style="height: auto; max-height: 95vh; width: 100%;" 
              data-toggle="magnify" 
              id="thumb" 
              data-magnify-src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" 
              src="{{ Storage::URL('storage/assetItems/'.$item->image) }}" 
              alt="{{$item->nombre}}">
          </a>
        
          
    
      </article>
      <p class="div" style="color: rgb(59, 59, 59);">
        {{$item->nombre}}
      </p>

      <div class="myFirstSectionInner scroll" style="margin-top: 8px;" >
        <div class="container is-fluid">
            <div class="noWrap"> 
              {{-- IMAGE 1 --}}
              @foreach ($images as $image)

                @if($image != NULL)
                  <img 
                    id="subimage" 
                    class="sectionImage subimage" 
                    src="{{ Storage::URL('storage/assetItems/'.$image) }}" 
                    alt="{{$item->nombre}}"> 
                @endif

              @endforeach
            </div>
          <br>
 
        </div>
      </div>
    </div>

  <div class=" col" style="margin: 3em 0 0 1em;">
    <article style="margin: 0 0 1em 1.5em">

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
      <small><a href="##">Ver mas productos de {{$item->store->nombreNegocio}}</a></small>
      <br>
      @for($i = 1; $i < 6; $i++)
        <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
    @endfor
    <small class="text-muted">(1099)</small>
      <p class="subtitle" style="color: rgba(36, 36, 36, 0.829); font-size: 21px;">
        &#8353; {{number_format($item->precio, 0, '.', ',')}} <small style="font-size: 14px;" class="text-muted">(no incluye iva) </small><small style="font-size: 13px;"><a href="##">Detalles</a></small>
      </p>

      <div class="content">

        <p>{{$item->descripcion}}</p>
        <p><strong>Color:</strong> {{$item->color}}</p>
        <p><strong>Tamaño:</strong> {{$item->size}}</p>
        <p class="card-text" style="position: aboslute; bottom:0; right:0;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

              <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>

          </svg>
              <small class="text-muted"> 
                  Envió a todo Costa Rica.
              </small>
      </p>
    
        
            <p><small class="text-muted"> 
              El paquete llega entre <strong>15-18 Septiembre</strong>.
          </small></p>
          <p><small class="text-muted"> 
            El paquete se envia con <strong>Correos de Costa Rica</strong>.
        </small></p>
          <p></p>
    </div>
    </article>
  </div>
  
</div>
@if($item->Specs)
<div class="form-row " style="border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 3em 0 0 0.5em">
  
    <div class="content">

      <div class="col" style="margin: 3em 0 0 0.5em">
        
        <ul >
          <h2>Especificaciones</h2><br>
        <h4>{{$item->nombre}}</h4>
          <p>
            {{$item->descripcion}}
          </p>  
          <br>
          
        @foreach(json_decode($item->Specs) as $key => $value)
          <li style="list-style: none;">
            <strong>{{$key}}:</strong> {{$value}}
          </li>
          <br>
        @endforeach
        
        </ul>
      </div>
  
  </div>
</div>
  @endif            
    
  @if($item->Specs)
  <div class="form-row " style="border-top: 1px solid rgb(180, 180, 180); width: 100%; height: auto; min-height: 250px;margin: 3em 0 0 0.5em">
    
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
                                  
                              <a href="{{$moreitem->store->nombreNegocio}}/productos/{{$moreitem->id}}"><img class="sectionImage2 " src="{{ Storage::URL('/storage/assetItems/'.$moreitem->image) }}" alt=""></a>
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

