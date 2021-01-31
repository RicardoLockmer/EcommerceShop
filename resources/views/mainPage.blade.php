@extends('mainLayout')

@section('jumbotron')

  
<div class="">
    
    <div id="carouselExampleControls " class="carousel  slide z-1" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img class="mainPageImageTop h-60 lg:h-96" src="dummy/cs.gif" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/2957.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="mainPageImageTop" src="dummy/2957.jpg" alt="First slide">
            </div> -->
            <div class="grid bg-yellow-200 bg-opacity-40 sm:mt-0 lg:-mt-1/2  justify-items-center relative" style="z-index:5;">
                <p class="font-bold text-gray-600">Muy Pronto...</p>
                <p id="demo" class=" justify-center font-bold text-2xl lg:text-6xl text-gray-600" ></p>
               
             </div>
                
        </div>
        <div data-aos="zoom-in" data-aos-duration="2000" class="grid h-auto  my-32 block font-bold  my-4 justify-center " style="z-index:100;">
            <a href="###" class="justify-self-center " style="z-index:100;">
            <div class="grid h-14 w-60 border-4 border-indigo-900 items-center rounded-full">
                <div class="justify-self-center font-bold text-gray-600 text-xl">
                        Registre un Negocio
                </div>
            </div> 
            </a>
                <p class="justify-self-center font-light text-gray-700 py-2 font-bold" style="z-index:111;">Totalmente Gratis!</p>
        </div>   
    </div>
</div>




   
    @endsection

    @section('cards')
    
    

    <div class="container -mt-0 lg:mt-10">

        <div class=" grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-4 lg:pt-4 place-items-center">
            
    
    
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


    @section('clock')
<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 1, 2021 09:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "D " + hours + "H "
  + minutes + "M " + seconds + "s";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

@endsection