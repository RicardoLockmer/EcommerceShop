@extends('mainLayout')

@section('myUserPage')

<div class="container">

<div class='container'>
    <div class="grid grid-cols-1 md:grid-cols-2 tablet:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-x-2 pt-8 lg:pt-10 place-items-center">

        <a class="border-2 border-solid font-bold hover:bg-gray-500 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages " href="/perfil/{{$user->name}}/direcciones">
            Direcciones
        </a>

        <a href="###" class=' border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative bg-white shadow-md h-16 w-80 tablet:col-span-2 tablet:col-start-1  md:w-72 lg:w-80 lg:h-20 lg: centerMyImages ' >
            Tarjetas
        </a>

        <a class='border-2 border-solid font-bold hover:bg-gray-100 rounded-full relative md:col-start-1 md:col-span-2 shadow-md tablet:col-span-2 tablet:col-start-1 lg:col-span-1 bg-white h-16 w-80 md:w-96 lg:w-80 lg:h-20 centerMyImages' href="###">
            F.A.Q
        </a>

    </div>
</div>
    
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="text-align: center;">
            <strong >
            
            {{$errors->first()}}
            </strong>
        </div>
                @endif
<div class="bg-white shadow overflow-hidden sm:rounded-lg my-4">
    <div class="grid grid-cols-6">
        <div class="px-4 py-5 sm:px-6 col-start-1 col-span-6 md:col-span-4 lg:col-span-4">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
            Información de su Cuenta
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Datos Personales
            </p>
        <div  class="flex md:col-start-6 lg:col-start-6 mt-4 justify-center border-2 border-solid font-bold hover:bg-gray-500 rounded-full  bg-white shadow-md h-10 w-32    centerMyImages items-center relative">
        <a class="w-28 h-6 flex centerMyImages" href="###">
        <svg class="flex -ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
        Editar
        </a>
        </div>
        </div>
    </div>
  <div class="border-t border-gray-200">
    <dl>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nombre
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$user->name}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Negocio
        </dt>
        <dd class="flex mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        @if ($user->nombreNegocio != NULL)
        {{$user->nombreNegocio}} 
        
        @else
        <a class="text-blue-600" href="/iniciar-mi-negocio">Comenzar a Vender</a>
        @endif
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Dirección
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        @if ($direccion != NULL)
            {{$direccion->provincia}}, {{$direccion->canton}}, 
            {{$direccion->direccion}}, {{$direccion->pais}}, 
            {{$direccion->codigoPostal}}
        @else
        <a class="text-blue-600" href="/perfil/{{$user->name}}/direcciones">Agregar Dirección y Teléfono</a>
        @endif
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
         Correo Electronico
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        {{$user->email}}
        </dd>
      </div>
      <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Ultima Compra
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        @if($user->compras != NULL)
             link de la factura a la ultima compra - boton de ver mas facturas-
        @else
        No hay Compras Recientes
        @endif

        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Información de Pagos
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        @if($user->compras != NULL)
            Ver mis Tarjetas
        @else
        No hay Tarjetas Registradas <a class="text-blue-600" href="###">Registrar una Tarjeta</a>
        @endif
        </dd>
      </div>
    </dl>
  </div>
  
</div>


<div class="flex mx-2 justify-center lg:justify-end ">

@if($user->nombreNegocio != NULL)
<form action="/negocio/{{$user->store->store_id}}/delete" method="POST">
          @method('DELETE')
          @csrf
            <button type="submit" class="appearance-none hover:bg-red-500 hover:text-white  hover:border-red-600 border-2 font-bold border-red-400 justify-center rounded-full h-10 ml-4 text-red-600 rounded-full bg-red-100 px-4 py-2 shadow-md" style="" onclick="return confirm('Esto Eliminara el Negocio, Productos e Imagenes. Esta Seguro? ')">
                            Eliminar Negocio
          </button>

</form>
@endif

<form action="/user/{{$user->id}}/delete" method="POST">
          @method('DELETE')
          @csrf
            <button type="submit" class="apprearance-none border-2 font-bold border-red-400 justify-center rounded-full h-10 ml-4 text-red-600 rounded-full bg-red-100 px-4 py-2 shadow-md" style="" onclick="return confirm('Esto Eliminara su cuenta y el Negocio, Productos e Imagenes. Esta Seguro? ')">
                            Eliminar Cuenta
          </button>

</form>
</div>

@endsection
