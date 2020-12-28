@extends('mainLayout')

@section('jumbotron')

  
<div>
    
    <div id="carouselExampleControls " class="carousel slide z-1" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="mainPageImageTop" src="dummy/2957.jpg" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/2957.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/2957.jpg" alt="First slide">
            </div> -->
        </div>
        
    </div>
</div>




   
    @endsection

    @section('cards')
    
    

    <div class="container ">

        <div class=" grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-36 lg:pt-10 place-items-center">
            
    
    
            <div class="relative bg-white shadow-lg">
                <a href="Categorias/Hombre" class="bg-white rounded h-32 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-80 lg: centerMyImages " style=" background-image:  url(dummy/regh1.jpg); background-size: cover; background-repeat: no-repeat;">
    
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Hombres
                    </h1>
                </a>
            </div>
            <div class="relative bg-white">
    
                <a href="Categorias/Mujer" class="bg-white rounded h-32 w-80 md:w-72 tablet:col-span-2 tablet:col-start-1 lg:h-80 lg:w-80 centerMyImages" style=" background-image: url(dummy/regm1.jpg); background-size: cover; background-repeat: no-repeat;">
                
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Mujeres
                    </h1>
                </a>
            </div>
    
            <div class="relative md:col-start-1 md:col-span-2 tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white">
    
                <a href="Categorias/Niños" class="bg-white rounded h-32 w-80 md:w-96 lg:w-80 lg:h-80 centerMyImages " style="background-image:  url(dummy/regaloa.jpg); background-size: cover; background-repeat: no-repeat;">
                
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Niños
                    </h1>
                </a>
            </div>
    
           
        </div>
    </div>
    <br>

    @endsection


    @section('productosDestacados')
    <div class="myFirstSection ">
        <p class="div">
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
    
    @endsection

    @section('mejoresEn')
    
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-4 lg:pt-10 place-items-center">
                        
            <div class="relative bg-white shadow-lg">
                <a href="Categorias/Baño" class="rounded shadow-md bg-white h-36 md:h-52 w-80 bg-cover tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-80 lg: centerMyImages " style=" background-image:  url(dummy/ban1.jpg); background-repeat: no-repeat;">
    
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Baños
                    </h1>
                </a>
            </div>
            <div class="relative bg-white shadow-lg">
                <a href="Categorias/Oficina" class="rounded shadow-md bg-white h-36 md:h-52 bg-cover w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-80 lg: centerMyImages " style=" background-image:  url(dummy/ofi1.jpg); background-repeat: no-repeat;">
    
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Oficina
                    </h1>
                </a>
            </div>

            <div class="relative md:col-start-1 md:col-span-2 tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white">
    
                <a href="Categorias/Exterior" class="rounded shadow-md bg-white h-36 md:h-52 w-80 md:w-96 lg:w-80 lg:h-80 centerMyImages " style="background-image:  url(dummy/ext1.jpg); background-size: cover; background-repeat: no-repeat;">
                
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Exterior
                    </h1>
                </a>
            </div>
           

        </div>
        <br>
        <!-- <div class="row" style="text-align: center;">

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

        </div> -->
    </div>
    <br>
    @endsection


    @section('productosMujer')
    <div class="myFirstSection">
        <p class="div "> para Mujeres</p>
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
        <p class="div " > Tecnología</p>
        <div class="myFirstSectionInner scroll">
            <div class="container-fluid">
                <div class="noWrap">
               
                </div>
            </div>
        </div>
    </div>

    <br>
    @endsection
    @section('productosJuguetes')
    <div class="myFirstSection">
        <p class="div " > Juguetes</p>
        <div class="myFirstSectionInner scroll">
            <div class="container-fluid">
                <div class="noWrap">
               
                </div>
            </div>
        </div>
    </div>

    <br>
    @endsection
    @section('mejoresEnDos')
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-4 lg:pt-10 place-items-center">
                        
            <div class="relative bg-white shadow-lg">
                <a href="Categorias/Baño" class="rounded shadow-md bg-white h-36 md:h-52 w-80 bg-cover tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-80 lg: centerMyImages " style=" background-image:  url(dummy/ban1.jpg); background-repeat: no-repeat;">
    
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Baños
                    </h1>
                </a>
            </div>
            <div class="relative bg-white shadow-lg">
                <a href="Categorias/Oficina" class="rounded shadow-md bg-white h-36 md:h-52 bg-cover w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-80 lg: centerMyImages " style=" background-image:  url(dummy/ofi1.jpg); background-repeat: no-repeat;">
    
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Oficina
                    </h1>
                </a>
            </div>

            <div class="relative md:col-start-1 md:col-span-2 tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white">
    
                <a href="Categorias/Exterior" class="rounded shadow-md bg-white h-36 md:h-52 w-80 md:w-96 lg:w-80 lg:h-80 centerMyImages " style="background-image:  url(dummy/ext1.jpg); background-size: cover; background-repeat: no-repeat;">
                
                    <h1 class="has-text-weight-bold text-white" style="text-shadow: 3px 3px 3px #4e4e4e;">
                        Exterior
                    </h1>
                </a>
            </div>
           

        </div>
        <br>
    @endsection