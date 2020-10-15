<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DETODO</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"> --}}

    <script href="/scripts/jQuery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

    <!-- Styles -->
    @livewireStyles()
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/magnifier.css">
    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>

    {{-- MENU --}}
    <div class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">

        <a href="/" class="navbar-brand">
            DETODO.COM
        </a>

        <ul class="navbar-nav">


            @guest
            <li class="nav-item">
                <a class="nav-link" href="##">
                    {{ __('Categorias') }}
                </a>
            </li>
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
                <a class="nav-link" href="##">
                    {{ __('Categorias') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/perfil/{{Auth::user()->name}}">
                    Hola, {{ Auth::user()->name }} <span></span>
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
                    Hola, {{ Auth::user()->name }} <span></span>
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
                    <svg style="color:white; margin-left:-15px; font-size: 24px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                    </svg></button>

            </form>
            <li class="nav-item">
                <a class="nav-link" href="/ShoppingCart">
                    <svg style="color: white; font-size: 20px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                    @if (Auth::user())
                    @if(\Cart::getTotalQuantity() <= 0) <span class="badge badge-light" id="CARTCOUNT"></span>
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

    {{-- CONTENT --}}
    <div class="main-container">


        {{-- USER PAGE --}}

        @yield('myUserPage')
        @yield('addAddress')
        @yield('newAddressForm')
        @yield('EditAddress')
        {{-- SEARCH INFO --}}
        @yield('mainSearch')
        @yield('categorias')
        {{-- ??? no me acuerdo --}}
        @yield('loginContent')

        {{-- SHOPPING CART --}}
        @yield('ShoppingCart')
        {{-- myStore --}}
        @yield('storebanner')
        @yield('errorStore')
        @yield('agregarProductos')
        @yield('recientes')

        {{-- EDITAR STORE --}}
        @yield('updateStore')
        {{-- MY ITEMS --}}
        @yield('crearItem')
        @yield('itemTopImagen')
        @yield('topItems')
        @yield('myItem')
        @yield('thisItem')
        {{-- Crear Negocio FORM --}}
        @yield('crearNegocio')


        {{-- Main Paige --}}
        @yield('jumbotron')
        @yield('comoVender')
        @yield('cards')

        @yield('productosDestacados')

        @yield('mejoresEn')



        @yield('productosMujer')

        @yield('mejoresEn')

        @yield('mejoresEn')

        @yield('productosTecnologia')

        @yield('mejoresEn')

        @yield('mejoresEn')

        {{-- LIVEWIRWE COMPONENTS --}}


    </div>
    {{-- CONTENT ENDING --}}








    {{-- BOOTSTRAP JAVASCRIPT --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/vue@next"></script>



    {{-- BOOTSTRAP JAVASCRIPT ENDING --}}
    {{-- MY JAVASCRIPT --}}

    <script src="/scripts/isDrag.js"></script>
    <script src="/scripts/addColor.js"></script>
    <script src="/scripts/alerts.js"></script>
    <script src="/scripts/isOther.js"></script>
    <script src="/scripts/Event.js"></script>
    <script src="/scripts/Magnifier.js"></script>
    <script src="/scripts/categoryOptions.vue"></script>
    <script src="/scripts/addressVue.vue"></script>
    @yield('categoryOptions')

    @livewireScripts()


    @yield('magnifier')
    @yield('cartJQ')
    @yield('addColorProp')
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

</body>

</html>
