@extends('mainLayout')

@section('jumbotron')

  
<div>
    {{-- <img class="mainPageImageTop" src="dummy/big1.jpg" alt="First slide"> --}}
    <div id="carouselExampleControls " class="carousel slide" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="mainPageImageTop" src="dummy/big1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/big2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/big3.jpg" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">


    <br>
    @endsection

    @section('cards')
    <br>
    <div class="container">
        <div class="row" style="text-align: center;">



            <a href="Categorias/Hombre" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:300px; background-image:  url(dummy/regh1.jpg); background-size: cover; background-repeat: no-repeat;">

                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Hombres
                </h1>
            </a>


            <a href="Categorias/Mujer" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:300px; background-image:  url(dummy/regm1.jpg); background-size: cover; background-repeat: no-repeat;">

                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Mujeres
                </h1>
            </a>


            <a href="Categorias/Niños" class="card col centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:300px; background-image:  url(dummy/regaloa.jpg); background-size: cover; background-repeat: no-repeat;">

                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Niños
                </h1>
            </a>
        </div>
    </div>
    <br>

    @endsection


    @section('productosDestacados')
    <div class="myFirstSection ">
        <p class="div text-muted">
            Mas Vendidos
        </p>
        <div class="myFirstSectionInner scroll">
            <div class="container-fluid">
                <div class="noWrap">
                    <!-- {{-- @foreach($mejores as $mejor)
                    <a href="/producto/{{$mejor->id}}">
                    <img class="sectionImage2 " src="{{ Storage::URL('/storage/assetItems/'.$mejor->image) }}" alt="">
                    </a>
                    @endforeach --}}
  -->




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

            <a href="Categorias/Baño" class="card col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/ban1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Baños
                </h1>
            </a>
            <a href="Categorias/Oficina" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/ofi1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Oficina
                </h1>
            </a>
            <a href="Categorias/Exterior" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/ext1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Exterior
                </h1>
            </a>

        </div>
        <br>
        <div class="row" style="text-align: center;">

            <a href="Categorias/Hogar" class="card col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/sal1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Hogar
                </h1>
            </a>
            <a href="Categorias/Habitacion" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/cuart1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Habitación
                </h1>
            </a>
            <a href="Categorias/Decoracion" class="box col-sm centerMyImages" style="margin: 0 2em 0 1em; width: 100px; height:310px; background-image:  url(dummy/dec1.jpg); background-size: cover; background-repeat: no-repeat;">
                <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                    Decoración
                </h1>
            </a>

        </div>
    </div>
    <br>
    @endsection


    @section('productosMujer')
    <div class="myFirstSection">
        <p class="div text-muted"> para Mujeres</p>
        <div class="myFirstSectionInner scroll">
            <div class="container-fluid">
                <div class="noWrap">
                   
                    
                        <img class="sectionImage2" src="{{ Storage::URL('/storage/assetItems/') }}" alt="">
                  
                   
                </div>
            </div>
        </div>
    </div>

    <br>
    @endsection

    @section('productosTecnologia')
    <div class="myFirstSection">
        <p class="div text-muted" style="color: rgb(59, 59, 59);"> Tecnología</p>
        <div class="myFirstSectionInner scroll">
            <div class="container is-fluid">
                <div class="noWrap">
               
                </div>
            </div>
        </div>
    </div>

    <br>
    @endsection
