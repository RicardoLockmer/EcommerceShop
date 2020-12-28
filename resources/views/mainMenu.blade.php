<div class="flex grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 p-2 " style="background-color: #FF9800">
        <div class="ml-2">
            <a href="/" class="">
            <img src="/dummy/logoTest2.png" alt="" style="width:auto; height: 40px;">
            </a>

        </div>

        <div class="col-span-1" >

            <form class="" autocomplete="off" action="/search" method="POST" role="search" >
                @csrf
                <span class=" h-10 bg-gray-200 cursor-pointer border border-gray-300 text-sm rounded-full flex">
      <input  name="q" placeholder="Buscar"
        class=" px-4 rounded-l-full rounded-r-full text-sm focus:outline-none border-none">
     
    </span>
                
               
    
            </form>
        </div>


        <div class="hidden lg:flex lg:flex-row-reverse gap-4 grid grid-cols-5 items-center text-white hover:text-white pr-6 pl-6 lg:mr-1 lg:pr-0">
        <div class="flex lg:col-start-5 lg:col-end-6 hover:text-white" >
            <a class="flex hover:text-white" href="/ShoppingCart">
                <svg style=" font-size: 22px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3 hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
                @if (Auth::user())
                    @if(\Cart::getTotalQuantity() <= 0) 
                    <span class="badge badge-light ml-1 hover:text-black" id="CARTCOUNT"></span>
                @else
                <span class="flex badge badge-light ml-1 hover:text-black" id="CARTCOUNT">{{\Cart::getTotalQuantity()}}</span>
                
                    @endif
                @endif
            </a>
        </div>
        @guest
            <div class="hover:text-white">
                <a class="hover:text-white" href="{{ route('login') }}">
                    {{ __('Iniciar Sesión') }}
                </a>
            </div>

        @if (Route::has('register'))
        <div>
            <a class="hover:text-white" href="{{ route('register') }}">
                {{ __('Registrarse') }}
            </a>
        </div>
        @endif
        @else
            @if(Auth::user()->nombreNegocio == NULL)
        
        <div >
            <a class="flex-grow hover:text-white  text-white hover:text-black font-bold" href="/perfil/{{Auth::user()->name}}">
                <!-- Bienvenido, {{ Auth::user()->name }} <span></span> -->Mi Cuenta
            </a>
        </div>
        <div >
            <a class="hover:text-white  text-white hover:text-black font-bold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @else

        <div >
            <a class="flex-grow hover:text-white  text-white hover:text-black font-bold" href="/perfil/{{Auth::user()->name}}">
                <!-- Bienvenido, {{ Auth::user()->name }} --> Mi Cuenta
            </a>
        </div>
        <div >
            <a class="hover:text-white  text-white hover:text-black font-bold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        @endif


        @endguest
        
        
        @if(Auth::user())


        @if(Auth::user()->nombreNegocio != NULL)
        <div >
            <a class="flex hover:text-white h-10 w-28 justify-center  items-center  text-white hover:text-black font-bold" href="/negocio/{{Auth::user()->nombreNegocio}}" style="border: 1px solid #FFFFFF; border-radius: 5px; ">
                Mi Negocio
            </a>
        </div>

        
        
        @endif

        
        @endif
    
</div>

    </div>


    {{-- MENU ENDING --}}