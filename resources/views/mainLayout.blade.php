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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script href="/scripts/jQuery.js"></script>

    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
    

    <link rel="stylesheet" href="/css/main.css">
    <link href="/css/app.css" rel="stylesheet">
    
</head>

<body class="bg-white antialiased">

    <!-- -- MENU 1 Principal Top -- -->
    @include('mainMenu')
    <!-- MENU 2 -->
@include('menuDos')
    {{-- CONTENT --}}
    
    <div class="bg-white">
    
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
        @yield('AccountType')
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
    <script src="/scripts/categoryOptions.js"></script>
    <script src="/scripts/addressVue.js"></script>
    <script src="/scripts/MenuCategory.js"></script>
    @yield('categoryOptions')
    

    
    @yield('bp')
    @yield('cartJQ')
    @yield('addColorProp')
    
    @yield('magnifier')
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    @yield('clock')
 </body>

</html>
