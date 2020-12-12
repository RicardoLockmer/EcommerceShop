<div class="navbar navbar-expand-lg navbar-light justify-content-between navBack" style="background-color: #6b0504">

        <a href="/" class="navbar-brand" style="color: #ffffff; margin-left: 58px;">
            TodoMarket
        </a>

        <ul class="navbar-nav">


           
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    {{ __('Iniciar Sesión') }}
                </a>
            </li>

            @if (Route::has('register'))

            <a class="nav-link" href="{{ route('register') }}">
                {{ __('Registrarse') }}
            </a>

            @endif
            @else
            @if(Auth::user()->nombreNegocio == NULL)
            
            <li class="nav-item">
                <a class="nav-link" href="/perfil/{{Auth::user()->name}}">
                    Bienvenido, {{ Auth::user()->name }} <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @else

            <li class="nav-item">
                <a class="nav-link" href="/perfil/{{Auth::user()->name}}">
                    Bienvenido, {{ Auth::user()->name }} <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            @endif


            @endguest
            <form autocomplete="off" action="/search" method="POST" role="search" class="form-inline">
                @csrf
                <input style="margin-left: 15px;" autocomplete="off" class="form-control mr-sm-2" name="q" placeholder="Buscar">
                <button class="btn" type="submit">
                    <svg style="color:#ffffff; margin-left:-15px; font-size: 24px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    </svg></button>

            </form>
            <li class="nav-item">
                <a class="nav-link" href="/ShoppingCart">
                    <svg style="color: #ffffff; font-size: 20px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    @if (Auth::user())
                        @if(\Cart::getTotalQuantity() <= 0) 
                        <span class="badge badge-light" id="CARTCOUNT"></span>
                    @else
                    <span class="badge badge-light" id="CARTCOUNT">{{\Cart::getTotalQuantity()}}</span>
                    <span class="sr-only">Productos en Carrito</span>
                        @endif
                    @endif
                </a>
            </li>
            @if(Auth::user())


            @if(Auth::user()->nombreNegocio != NULL)
            <li class="nav-item">
                <a class="nav-link" href="/negocio/{{Auth::user()->nombreNegocio}}" style="border: 1px solid rgb(192, 192, 192); border-radius: 5px; ">
                    Mi Negocio
                </a>
            </li>

            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('comoVender')}}" style="border: 1px solid rgb(192, 192, 192);  border-radius: 5px; ">
                    Como Vender
                </a>
            </li>
            @endif

            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('comoVender')}}" style="border: 1px solid rgb(192, 192, 192);  border-radius: 5px; ">
                    Como Vender
                </a>
            </li>
            @endif
        </ul>

    </div>


    {{-- MENU ENDING --}}