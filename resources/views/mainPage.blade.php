@extends('mainLayout')

@section('jumbotron')

<br>
        <div class="container">
            <div class="jumbotron" style="background-image: url(dummy/jtest.jpg);">
            <h2 class="mb-4">
                My Store 101
            </h2>
            <p class="mb-4">
                DEFINIR EL COLOR PALLETE PARA TODA LA PAGINA
            </p>
            <a href="https://bootstrapious.com/snippets" class="btn btn-primary">VER MAS</a>
            </div>
        </div>
   
<br>
@endsection

@section('cards')
    <div class="centerMyImages">
        <a href="##" class=" centerMyImages">
        <div style="width: 350px; height: 350px; display: inline-block; background-image:  url(dummy/techcard5.jpg); background-size: cover;">
            
              
                    
        </div>
</a>
        <a href="##" class="card centerMyImages">
        <div class="" style="width: 350px; height: 450px; display: inline-block; background-image:  url(dummy/mujer8.jpg); background-size: cover;">

        </div>
        </a>

            <a href="###" class=" centerMyImages"> 
        <div class="" style="width: 350px; height: 350px; display: inline-block; background-image:  url(dummy/tech2.jpg); background-size: cover;">
        </div>
            </a>
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
                            <a href="/productos/{{$mujeres->id}}">
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
            <p class="div" style="color: rgb(59, 59, 59);"> Tecnologia</p>
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