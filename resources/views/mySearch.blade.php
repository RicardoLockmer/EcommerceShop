@extends('mainLayout')

@section('mainSearch')

    <div class="container">

        <div style="margin: 2.3em 0 0 0; border-bottom: 2px solid rgba(184, 184, 184, 0.384) ">
        
    @foreach($items as $item)
        <div class="card mb-3" 
        style="padding: 1em 1em 1em 1em;box-shadow:none; border-radius: 0; border-top: 2px solid rgba(184, 184, 184, 0.384)!important;">
            <div class="row no-gutters">

    {{-- FOTO DEL ITEM --}}
                
                <div class="col-md-2 centerMyImages" style="min-height: 160px; margin: 0 1.5em 0 1.5em; max-height: auto" >
                    <a href="/producto/{{$item->id}}">
                        <img class="img-fluid card-img centerMyImages" style="max-height: 50%!important;" src="{{Storage::URL('storage/assetItems/'.$item->image)}}" alt="{{$item->nombre}}">
                    </a>
                </div>
    {{-- ITEM NAME --}}
                <div class="col-md-8">
                    <div class="card-body" style="padding: 0 0 0 1em;">
                        <a href="/producto/{{$item->id}}" class="searchItem">
                            <h4 class="card-title" style="margin-bottom: 0!important;">
                                {{$item->nombre}}
                            </h4>
                        </a>

    {{-- STAR RATING LOOP --}}
    @for($i = 1; $i < 6; $i++)
        <svg width="1em" style="color: rgb(245, 210, 12); font-size: 12px; " height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
        </svg>
    @endfor
    {{-- PRECIO --}}
        <p class="card-text" style=" font-size: 16px; font-family:Arial, Helvetica, sans-serif;">
          <small> &#8353; </small>{{number_format($item->precio, 0, '.', ',')}}
        </p>
    {{-- DESCRIPCION --}}
        <p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            {{$item->descripcion}}
        </p>

    {{-- SHIPS TO PART --}}
    

        <p class="card-text" style="position: aboslute; bottom:0; right:0;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-seam text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>

            </svg>
                <small class="text-muted"> 
                    Envió a todo Costa Rica.
                </small>
        </p>
        
    
      </div>
    </div>
    <a style="position: absolute; bottom: 15px; right:25px;" class="btn btn-success">Ver Mas</a>
  </div>
</div>
                
            @endforeach
       
        
        
        
        </div>

    </div>

@endsection