@extends('mainLayout')

@section('jumbotron')


<div >
    <img class="mainPageImageTop" src="dummy/jtest.jpg" alt="">
    
</div>

        <div class="container">
            
   
<br>
@endsection

@section('cards')
<br>
<div class="container">
        <div class="row" style="text-align: center;">
            
            <a href="###" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regalom.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                1
            </h1>
        </a>
            <a href="###" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regaloh.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                2
            </h1>
        </a>
            <a href="###" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regaloa.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                3
            </h1>
        </a>
        </div>
</div>
<br>
@endsection   


@section('productosDestacados')
    <div class="myFirstSection ">
        <p class="div">
            Destacados
        </p>
        <div class="myFirstSectionInner scroll">
            <div class="container-fluid">
                <div class="noWrap">
                    @foreach($mejores as $mejor)
                <a href="/producto/{{$mejor->id}}">
                    <img class="sectionImage " src="{{ Storage::URL('/storage/assetItems/'.$mejor->image) }}" alt="">
                        </a>
                    @endforeach
                        
                    
                </div>
            </div>
        </div>
    </div>
<br>
@endsection

@section('mejoresEn')
<br>
<div class="container">
        <div class="row" style="text-align: center;">
            
            <a href="###" class="card col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regalom.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold has-text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                Regalos para Mujeres
            </h1>
        </a>
            <a href="###" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regaloh.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold has-text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                 Regalos para Hombres
            </h1>
        </a>
            <a href="###" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:105px; background-image:  url(dummy/regaloa.jpg); background-size: cover; background-repeat: no-repeat;">
            <h1 class="has-text-weight-bold has-text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                Accesorios
            </h1>
        </a>
        </div>
</div>
<br>
@endsection


@section('productosMujer')
        <div class="myFirstSection">
            <p class="div" style="color: rgb(255, 82, 183);"> para Mujeres</p>
                <div class="myFirstSectionInner scroll">
                    <div class="container-fluid">
                        <div class="noWrap">
                            @foreach($mujerItems as $mujeres) 
                            <a href="/producto/{{$mujeres->id}}">
                                    <img class="sectionImage" src="{{ Storage::URL('/storage/assetItems/'.$mujeres->image) }}" alt="">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
        
<br>
@endsection 
 
@section('productosTecnologia')
        <div class="myFirstSection">
            <p class="div" style="color: rgb(59, 59, 59);"> Tecnología</p>
                <div class="myFirstSectionInner scroll" >
                    <div class="container is-fluid">
                        <div class="noWrap">
                            @foreach($techItems as $tech)
                        <a href="/producto/{{$tech->id}}">
                    <img class="sectionImage " src="{{ Storage::URL('/storage/assetItems/'.$tech->image) }}" alt="">
                        
                    @endforeach
                        </div>
                    </div>
                </div>
        </div>
    
    <br>
@endsection