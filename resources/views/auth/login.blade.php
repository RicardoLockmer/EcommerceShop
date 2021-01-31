@extends('mainLayout')

@section('loginContent')

<div class="container min-h-screen flex items-start justify-center bg-gray-50 py-16 lg:py-24  px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8" >
        <div>
            <img class="mx-auto h-12 w-auto" src="/dummy/logoTest.png" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Iniciar Sesión
            </h2>
            <!-- <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                start your 14-day free trial
                </a>
            </p> -->
        </div>
        <form method="POST" class="mt-8 space-y-6" action="{{ route('login') }}">
            @csrf

            <div class="rounded-md -space-y-px" style="text-align: center;">
                <div>
                    <label for="email" class="sr-only ">
                        {{ __('Correo Electronico') }}
                    </label>
                    <input id="email" 
                        name="email" 
                        type="email" 
                        autocomplete="email" 
                        required 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('email') is-danger @enderror" 
                        value="{{ old('email') }}" 
                        placeholder="Correo Electronico">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ __('Contraseña/Correo Incorrecto') }}
                                </strong>
                            </span>
                        @enderror
                </div>
        
                <div>
                    <label  for="password" class="sr-only">
                        {{ __('Contraseña') }}
                    </label>

                    <input id="password" 
                        type="password" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sml @error('password') is-danger @enderror" 
                        name="password" 
                        required
                        placeholder="Contraseña" 
                        autocomplete="current-password">

                        @error('password')
                            <span class="is-danger" role="alert">
                                <strong class="is-danger">
                                    {{ __('Contraseña/Correo Incorrecto') }}
                                </strong>
                            </span>
                        @enderror
                    
                    
                </div>
                      
                <div class="flex items-center my-2 justify-between">
                    <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 pt-2 block text-sm text-gray-900">
                        Recordarme
                    </label>
                    </div>
                    @if (Route::has('password.request'))
                    <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-medium text-blue-600 hover:text-yellow-500">
                    {{ __('Olvido su Contraseña?') }}
                    </a>
                    </div>
                    @endif
                </div>
                        

                     
                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        
                            <svg class="h-5 w-5 text-yellow-500 group-hover:text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>
                <div class="flex items-center my-2 justify-between">
                    
                    @if (Route::has('register'))
                    <div class="text-sm">
                    No se ha registrado?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-yellow-500">
                    {{ __('Registrarse') }}
                    </a>
                    </div>
                    @endif
                </div>
               
            </div>
        
        </form>
    </div>
          
        
</div>
@endsection


