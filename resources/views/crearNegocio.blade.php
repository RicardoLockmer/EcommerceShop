@extends('mainLayout')

@section('crearNegocio')

<div class="container">

<div class="mt-20">
        <img class="mx-auto h-14 w-auto" src="/dummy/logoTest.png" alt="Workflow">
        <h2 class="text-center text-4xl lg:mt-3 font-extrabold text-gray-700">
            Cuenta para Negocio
        </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
               Completamente <strong>GRATIS</strong>
            </p>
        </div>
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
                Parece que hay un problema!
            </strong>
            {{$errors->first()}}
        </div>

        @endif
        
    <form action="/iniciar-mi-negocio" method="POST" class="flex justify-center my-10 py-10 bg-gray-50 rounded-md">
        @csrf
        
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
                            required
                            placeholder="Primer Nombre*" 
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
                            required
                            placeholder="Segundo Nombre" 
                            autocomplete="additional-name">  
                    </div>
                    
                </div>
                <div class="flex">

                    <div class="w-1/2">     
                        <label for="primerApellido" class="sr-only">
                            {{ __('Primer Apellido*') }}
                        </label>
                        <input id="primerApellido" 
                            type="text" 
                            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('primerApellido') is-danger @enderror @error('primerApellido') is-invalid @enderror" 
                            name="primerApellido" 
                            value="{{ old('primerApellido') }}" 
                            required
                            placeholder="Primer Apellido*" 
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
                            required
                            placeholder="Segundo Apellido" 
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
                        required
                        placeholder="Nombre del Negocio*"
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
                    <label for="cedulaJuridica" class="sr-only">
                        {{ __('Cedula Jurídica') }}
                    </label>
                    <input id="cedulaJuridica" 
                        type="text" 
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('cedulaJuridica') is-invalid @enderror" 
                        name="cedulaJuridica" 
                        required
                        placeholder="Cedula Jurídica*"
                        autocomplete="off"
                        value="{{old('cedulaJuridica')}}"
                        maxlength="10" 
                        >
                        @error('cedulaJuridica')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ __('Cedula Jurídica ya existe.') }}
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
                        required
                        placeholder="Dirección*"
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
                        required
                        placeholder="Referencia"
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
                            required
                            placeholder=" +504" 
                            autocomplete="off" 
                            disabled>
                            <input name="prefix" value="+506" required hidden>    
                            
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
                            required
                            placeholder="Teléfono" 
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
                        required
                        placeholder="Correo Electrónico*"
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
                        required
                        placeholder="Contraseña*" 
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
                        required
                        placeholder="Confirmar Contraseña" 
                        autocomplete="new-password">
                </div>
    
                <div class=" flex justify-start mt-3" >
                    <div class=" flex">
                        <label class="checkbox flex" for="tyc">
                            <input type="checkbox" name="tyc" id="tyc" value="1" class="w-4 mr-2 mt-1.5">
                        </label>
                            <div class="mb-4">
                            Acepto <a href="#" class="self-start text-blue-600 font-bold"> Términos y Condiciones</a>
                            </div>
                    </div>
                    @error('tyc')
                     <small class="form-text" style="color:red;">Aceptar Términos y Condiciones</small>
                    @enderror
                </div>
                <div class="">
                    <div>
                        <button type="submit" class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        
                            <svg class="h-5 w-5 text-yellow-500 group-hover:text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>























        {{-- <div class="grid border shadow-md rounded-md p-10 lg:px-24 bg-gray-100 justify-center text-sm lg:text-base w-4/4">
            <div class="w-2/2 grid space-y-6"> --}}

                
                
                {{-- <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerNombre"> <strong>Primer Nombre <strong class="text-red-600"><strong class="text-red-600">*</strong></strong></strong> </label>
                        <div class="control">
                        <input id="primerNombre" 
                            name="primerNombre" 
                            type="text" 
                            required 
                            class="focus:ring-yellow-500 focus:border-yellow-500 pl-2 sm:text-sm rounded-md shadow-md form-control @error('primerNombre') is-danger @enderror" 
                            value="{{ old('primerNombre') }}" 
                            >
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="label " for="segundoNombre"><strong>Segundo Nombre</strong></label>
                            <input class="focus:ring-yellow-500 focus:border-yellow-500 pl-2 sm:text-sm rounded-md shadow-md form-control @error('segundoNombre') is-invalid @enderror"
                            name="segundoNombre" 
                            id="segundoNombre" 
                            required  
                            type="text"
                            value="{{old('segundoNombre')}}"
                            >
                        </div>
                    </div>
                </div>
                


                <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerApellido"><strong>Primer Apellido<strong class="text-red-600"><strong class="text-red-600">*</strong></strong></strong></label>
                        <div class="control">
                            <input 
                            class="ffocus:ring-yellow-500 focus:border-yellow-500 pl-2 sm:text-sm rounded-md shadow-md form-control @error('primerApellido') is-invalid @enderror"
                            name="primerApellido" 
                            id="primerApellido" 
                            type="text" 
                            value="{{old('primerApellido')}}">
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="" for="segundoApellido"><strong>Segundo Apellido</strong></label>
                            <input class="focus:ring-yellow-500 focus:border-yellow-500 pl-2 sm:text-sm rounded-md shadow-md form-control @error('segundoApellido') is-invalid @enderror"
                                name="segundoApellido" id="segundoApellido" type="text" 
                                value="{{old('segundoApellido')}}">
                        </div>
                    </div>
                </div> --}}

              
                {{-- <div class="newbiz ">
                    <label class="" for="nombreNegocio"><strong>Nombre del Negocio<strong class="text-red-600">*</strong></strong></label>
                    <div class="control">
                        <input class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('nombreNegocio') is-invalid @enderror" name="nombreNegocio"
                            id="nombreNegocio" type="text"  value="{{old('nombreNegocio')}}">
                    </div>
                </div> --}}
{{--              
                <div class="newbiz ">
                    <label class="" for="cedulaJuridica">
                        <strong>Cedula Jurídica<strong class="text-red-600">*</strong></strong>
                    </label>
                    <div class="control">
                        <input class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('cedulaJuridica') is-invalid @enderror" name="cedulaJuridica"
                            id="cedulaJuridica" maxlength="10" type="text" 
                            value="{{old('cedulaJuridica')}}">
                    </div>
                </div> --}}
            
                {{-- <div class="newbiz ">
                    <label class="" for="email"><strong>Correo Electrónico<strong class="text-red-600">*</strong></strong></label>
                    <div class="control">
                        <input class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('email') is-invalid @enderror" name="email" id="email"
                            type="text"> --}}
                        <!-- <small class="form-text text-muted">Puede utilizar el correo personal o agregar uno de
                            negocio.</small> -->
                    {{-- </div>
                </div>
                <div class="newbiz">
                    <label for="password">
                        <strong>
                            Contraseña <strong class="text-red-600">*</strong>
                        </strong>
                    </label>
                    <div class="control">
                        <input type="password" class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('password') is-invalid @enderror" name="password" id="password">

                    </div>    
                </div> --}}
                <!-- <div class="newbiz">
                    <label class="" for="tipoNegocio"><strong>Tipo de Productos<strong class="text-red-600">*</strong></strong></label>
                    <div class="control ">
                        <div class="select">
                            <select class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm" name="tipoNegocio">
                                <option>--</option>
                                {{-- @foreach($myCategory as $category) --}}
                                {{-- <option value="{{$category}}">{{$category}}</option> --}}
                                {{-- @endforeach --}}


                            </select>


                        </div>
                    </div>

                </div> -->



                <!-- {{-- Ciudad --}} -->
                <!-- <div class='row' id='appAd'>
                    <div class='newbiz col'>

                        <label class="label" for="provincia">
                            <strong> Departamento<strong class="text-red-600">*</strong> </strong> 
                        </label>

                        <select class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm 
                        {{-- @error('provincia') is-invalid @enderror" v-model="addressSelected"> --}}
                            <option disabled selected value>
                                --
                            </option>

                            <option v-for="address in addresses"
                                {{-- v-bind:value="{ provincia: address.provincia, canton: address.canton }">
                                @{{ address.provincia }}
                            </option>
                            <input type="hidden" name="provincia" :value="addressSelected.provincia"> --}}
                        </select>

                    </div>
                    {{-- CANTON --}}

                    <div class="newbiz col">

                        <label class="label" for="canton">
                            <strong> Cantón<strong class="text-red-600">*</strong> </strong>
                        {{-- </label>
                        <select name="canton" class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm 
                    @error('canton') is-invalid @enderror"> --}}
                            <option disabled selected value>
                                --
                            </option>
                            {{-- <option v-for='canton in addressSelected.canton' v-bind:value="canton" name="canton">
                                @{{canton}}
                            </option>
                        </select> --}}

                    </div>
                </div> -->


               
                {{-- <div class="newbiz ">
                    <label class="" for="dir"><strong>Dirección<strong class="text-red-600">*</strong></strong></label>
                    <div class="control">
                        <input class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text"
                        value="{{old('dir')}}" required>

                    </div>
                </div> --}}
                {{-- <div class="newbiz ">
                    <label class="" for="referencia"><strong>Referancia</strong></label>
                    <div class="control">
                        <textarea class="focus:ring-yellow-500 focus:border-yellow-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('referencia') is-invalid @enderror" name="referencia" id="referencia" type="text"
                        value="{{old('referencia')}}"> </textarea>

                    </div>
                </div> --}}
                
                {{-- <div class="newbiz">
                    <div class="">
                        <label class="" for="ntel"><strong>Numero Teléfono<strong class="text-red-600">*</strong></strong></label>
                    </div>
                    <div class="flex newbiz">
                        <div class="" style="margin-right: 8px!important;">
                            <input style="width:66px!important; " class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm @error('prefix') is-invalid @enderror"
                                id="prefix" type="tel" placeholder="+506" value="+506" required disabled> <input
                                name="prefix" value="+506" required hidden>
                        </div>
    
                        <div class="">
                            <input class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 focus:z-10 sm:text-sm col @error('ntel') is-invalid @enderror" name="ntel" id="ntel"
                                type="tel" pattern="[0-9]{4}[0-9]{4}"  value="{{old('ntel')}}"
                                required>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class=" flex justify-start" >
                    <div class=" flex">
                        <label class="checkbox flex" for="tyc">
                            <input type="checkbox" name="tyc" id="tyc" value="1" class="w-4 mr-2 mt-1.5">
                        </label>
                            <div class="mb-4">
                            Acepto <a href="#" class="self-start text-blue-600 font-bold"> Términos y Condiciones</a>
                            </div>
                    </div>
                </div>
                            @error('tyc')
                             <small class="form-text" style="color:red;">Aceptar Términos y Condiciones</small>
                            @enderror
                
                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center mb-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-yellow-500 group-hover:text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ __('CREAR CUENTA') }}
                    </button>
                </div>

            </div>
        </div>
        <div class="grid justify-end w-1/5 ">
            <img src="/dummy/55.jpg" alt="" class="rounded-md h-full object-cover">
        </div> --}}
    </form>
    {{-- <div class="h-52">

    </div> --}}
</div>


@endsection