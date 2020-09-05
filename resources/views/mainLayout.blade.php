<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>myStore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/magnifier.css">
        {{-- BOOTSTRAP CSS --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    
        
    </head>
    <body>

        {{-- MENU --}}
        <div class="navbar navbar-expand-lg navbar-light bg-light">
           <div class=" links ">
                <a href="/" class="title" >
                    Store 101
                </a>
                
            @guest
                <a class="nav-link" href="{{ route('login') }}">
                    {{ __('Iniciar Sesión') }}
                </a>
            @if (Route::has('register'))

                <a class="nav-link" href="{{ route('register') }}">
                    {{ __('Registrarse') }}
                </a>
                         
            @endif
            @else
                @if(Auth::user()->nombreNegocio == NULL) 
                    <a href="/iniciar-mi-negocio" >
                        Crear Negocio
                    </a>
                    <a href="/negocio/{{Auth::user()->nombreNegocio}}">
                        Hola, {{ Auth::user()->name }} <span ></span>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="/ShoppingCart">
                    {{ __('SHOPPING CART') }}
                </a>
                @else 
                <a href="/negocio/{{Auth::user()->nombreNegocio}}" style="border: 1px solid rgb(192, 192, 192); padding-top: 5px; padding-bottom: 5px; border-radius: 5px; ">
                        Mi Negocio
                    </a>
                

                <a href="/negocio/{{Auth::user()->nombreNegocio}}">
                        Hola, {{ Auth::user()->name }} <span ></span>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="/ShoppingCart">
                    {{ __('SHOPPING CART') }}
                </a>
                @endif
            
                        
            @endguest
    <form autocomplete="off" action="/search" method="POST" role="search" style="width: 100%; margin: 1em 0 1em 0;">
        @csrf
            
            <input autocomplete="off" class="form-control mr-sm-2"  name="q" placeholder="Buscar" style="width: 80%;">
    <button class="btn btn-default my-2 my-sm-0" type="submit"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
</svg></button>
                   
    </form>
            </div>    
               
        </div>

         
        {{-- MENU ENDING --}}
        
        {{-- CONTENT --}}
        <div class="main-container">
            {{-- SEARCH INFO --}}
            @yield('mainSearch')

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
            
            @yield('cards')
           
            @yield('productosDestacados')
           
            @yield('mejoresEn')
            
            @yield('mejoresEn')
            
            @yield('productosMujer')
            
            @yield('mejoresEn')
            
            @yield('mejoresEn')
            
            @yield('productosTecnologia')
            
            @yield('mejoresEn')
            
            @yield('mejoresEn')
            

        </div>
        {{-- CONTENT ENDING --}}








        {{-- BOOTSTRAP JAVASCRIPT --}}

        <script 
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        
{{-- BOOTSTRAP JAVASCRIPT ENDING --}}
{{-- MY JAVASCRIPT --}}

<script src="/scripts/isDrag.js"></script>
<script src="/scripts/addColor.js"></script>
<script src="/scripts/alerts.js"></script>
<script src="/scripts/isOther.js"></script>
<script src="/scripts/Event.js"></script>
<script src="/scripts/Magnifier.js"></script>
<script src="/scripts/categoryOptions.vue"></script>


@yield('magnifier')

@yield('addColorProp') 
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </body>
</html>