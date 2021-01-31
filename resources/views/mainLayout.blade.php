<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DetoShop</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
  
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script href="/scripts/jQuery.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

    <!-- Styles -->
    @livewireStyles()
    @yield('cdSAS')
    <meta charset="UTF-8" />

   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <link rel="stylesheet" href="/css/main.css">
   <link rel="stylesheet" type="text/css" href="/css/magnifier.css">
    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

    <!-- -- MENU 1 Principal Top -- -->
    @include('mainMenu')
    <!-- MENU 2 -->
@include('menuDos')
    {{-- CONTENT --}}
    
    <div class="main-container md:mx-auto grid grid-cols-1">
    
        @yield('masNegocio')

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
        @yield('productosTecnologia')
        @yield('productosJuguetes')

        @yield('buy')

        @yield('mejoresEnDos')

        {{-- LIVEWIRWE COMPONENTS --}}


    </div>
    {{-- CONTENT ENDING --}}
<div style="background-color: grey; display: block; margin-top: 100px; height: 100px;">
        <div style='align-self: center;  flex: 1; text-align: center;'>DetoShop.com</div>
 
</div>







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
    <script src="/scripts/categoryOptions.js"></script>
    <script src="/scripts/addressVue.js"></script>
    <script src="/scripts/MenuCategory.js"></script>
    @yield('categoryOptions')

    @livewireScripts()

    @yield('bp')
    @yield('magnifier')
    @yield('cartJQ')
    @yield('addColorProp')
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    @yield('clock')

</body>

</html>
