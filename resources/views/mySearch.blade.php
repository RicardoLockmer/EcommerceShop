@extends('mainLayout')

@section('mainSearch')

    <div class="container">

        <div>
        
            @foreach($items as $item)

                    <h3>{{$item->descripcion}}</h3>
                
            @endforeach
       
        
        
        
        </div>

    </div>

@endsection