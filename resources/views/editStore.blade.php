@extends('mainLayout')

@section('updateStore')

<div class="container">


    <form action="/negocio/{{$store->nombreNegocio}}/editar" method="POST" class="mt-4">
        @method('PUT')
        @csrf
        <input type="text" name="store_id" value="{{$store->store_id}}" hidden>
        <div class="py-4">
            <h1 class="font-bold text-gray-700 text-4xl" >
                {{$store->nombreNegocio}}
            </h1>
            @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>
                    Parece que hay un problema!
                </strong>
                {{$errors->first()}}
            </div>
            @endif
        </div>
        {{-- Form Info --}}
        <div class="py-4 w-1/2">
            <div class="">
                <div class="font-bold text-gray-700 text-4xl">
                    Actualizar
                </div>
                <small class="text-muted">
                    Cambios estan sujetos a revision, puede tomar hasta 7 dias habiles.
                </small>
            </div>
        </div>
        <div class="rounded-md w-1/2"
                style="text-align: center;">
                <div class="flex">

                    <div class="w-1/2">     
                        <label for="name" class="sr-only">
                            {{ __('Primer Nombre') }}
                        </label>
                        <input id="name" 
                            type="text" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-tl-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('primerNombre') is-danger @enderror @error('primerNombre') is-invalid @enderror" 
                            name="primerNombre" 
                            value="{{ old('primerNombre') }}" 
                            
                            placeholder="{{$store->primerNombre}}" 
                            autocomplete="name" 
                            autofocus>    
                            
                    </div> 
                    <div class="w-1/2">
                        <label for="segundoNombre" class="sr-only">
                            {{ __('Segundo Nombre') }}
                        </label>
                        <input id="segundoNombre" 
                            type="text" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-tr-md  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('segundoNombre') is-danger @enderror @error('segundoNombre') is-invalid @enderror @error('segundoNombre') is-invalid @enderror" 
                            name="segundoNombre" 
                            value="{{ old('segundoNombre') }}" 
                            
                            placeholder="{{$store->segundoNombre}}" 
                            autocomplete="additional-name">  
                    </div>
                    
                </div>
                <div class="flex">

                    <div class="w-1/2">     
                        <label for="primerApellido" class="sr-only">
                            {{ __('Primer Apellido') }}
                        </label>
                        <input id="primerApellido" 
                            type="text" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('primerApellido') is-danger @enderror @error('primerApellido') is-invalid @enderror" 
                            name="primerApellido" 
                            value="{{ old('primerApellido') }}" 
                            
                            placeholder="{{$store->primerApellido}}" 
                            autocomplete="family-name" 
                            autofocus>    
                            
                    </div> 
                    <div class="w-1/2">
                        <label for="segundoApellido" class="sr-only">
                            {{ __('Segundo Apellido') }}
                        </label>
                        <input id="segundoApellido" 
                            type="text" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900   focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('segundoApellido') is-danger @enderror @error('segundoApellido') is-invalid @enderror @error('segundoApellido') is-invalid @enderror" 
                            name="segundoApellido" 
                            value="{{ old('segundoApellido') }}" 
                            
                            placeholder="{{$store->segundoApellido}}" 
                            autocomplete="off">  
                    </div>
                    
                </div>
                <div class="">
                    <label for="nombreNegocio" class="sr-only">
                        {{ __('Nombre del Negocio') }}
                    </label>
                    <input id="nombreNegocio" 
                        type="text" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('nombreNegocio') is-invalid @enderror" 
                        name="nombreNegocio" 
                        
                        placeholder="{{$store->nombreNegocio}}"
                        autocomplete="off"
                        value="{{old('nombreNegocio')}}" 
                        >
                        @error('nombreNegocio')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ __('Nombre del Negocio ya existe.') }}
                                </strong>
                            </span>
                        @enderror          
                </div>
                
                <div class="">
                    <label for="dir" class="sr-only">
                        {{ __('Dirección') }}
                    </label>
                    <input id="dir" 
                        type="text" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('dir') is-invalid @enderror" 
                        name="dir" 
                        
                        placeholder="{{$store->direccion}}"
                        autocomplete="off"
                        value="{{old('dir')}}" 
                        >
                                  
                </div>
                <div class="">
                    <label for="referencia" class="sr-only">
                        {{ __('Referencia') }}
                    </label>
                    <input id="referencia" 
                        type="text" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('referencia') is-invalid @enderror" 
                        name="referencia" 
                        
                        placeholder="{{$store->referencia}}"
                        autocomplete="off"
                        value="{{old('referencia')}}" 
                        >
                                  
                </div>
                <div class="flex">

                    <div class="w-20">     
                        <label for="prefix" class="sr-only">
                            {{ __('Prefix') }}
                        </label>
                        <input id="prefix" 
                            type="text" 
                            class="disable appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('prefix') is-danger @enderror @error('prefix') is-invalid @enderror" 
                            
                            value="+504" 
                            
                            placeholder=" +504" 
                            autocomplete="off" 
                            disabled>
                            <input name="prefix" value="+504"  hidden>    
                            
                    </div> 
                    <div class="w-full">
                        <label for="ntel" class="sr-only">
                            {{ __('Teléfono') }}
                        </label>
                        <input id="ntel" 
                            type="tel" pattern="[0-9]{4}[0-9]{4}" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('ntel') is-danger @enderror @error('ntel') is-invalid @enderror @error('ntel') is-invalid @enderror" 
                            name="ntel" 
                            value="{{ old('ntel') }}" 
                            
                            placeholder="{{$store->phoneNumber}}" 
                            autocomplete="off">  
                    </div>
                    
                </div>
                <div class="">
                    <label for="email" class="sr-only">
                        {{ __('Email') }}
                    </label>
                    <input id="email" 
                        type="text" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('email') is-invalid @enderror" 
                        name="email" 
                        
                        placeholder="{{$store->email}}"
                        autocomplete="off"
                        value="{{old('email')}}" 
                        >
                                  
                </div>
                <div class="">
                    <label for="password" class="sr-only">
                        {{ __('Contraseña') }}
                    </label>
                    <input id="password" 
                        type="password" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('password') is-invalid @enderror" 
                        name="password" 
                        
                        placeholder="Contraseña" 
                        autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ __('Contraseña Facil') }}
                                </strong>
                            </span>
                        @enderror          
                </div>
    
                <div class="">
                    <label for="password-confirm" 
                        class="sr-only">
                        {{ __('Confirmar Contraseña') }}
                    </label>
                    <input id="password-confirm" 
                        type="password" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                        name="password_confirmation" 
                        
                        placeholder="Confirmar Contraseña" 
                        autocomplete="new-password">
                </div>
    
                
                <div class="">
                    <div>
                        <button type="submit" class="flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-bold rounded-md text-white bg-red-400 hover:bg-red-500">
                            {{ __('ACTUALIZAR') }}
                        </button>
                    </div>
                </div>
    </form>
    
</div>


@endsection