@extends('mainLayout')

@section('crearNegocio')

<div class="container  justify-center ">

<div class="mt-4">
        <img class="mx-auto h-12 w-auto" src="/dummy/logoTest.png" alt="Workflow">
        <h2 class="text-center text-3xl font-extrabold text-gray-900">
            Comenzar a Vender
        </h2>
            <!-- <p class="mt-2 text-center text-sm text-gray-600">
                Or
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                start your 14-day free trial
                </a>
            </p> -->
        </div>
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
                Parece que hay un problema!
            </strong>
            {{$errors->first()}}
        </div>

        @endif
        <br>
    <form action="/iniciar-mi-negocio" method="POST" class="grid justify-center ">
        @csrf
        
        <div class="grid border border-gray-200 shadow-md rounded-md px-10 lg:px-20 bg-gray-100 justify-center text-sm lg:text-base border-4 w-4/4">
            <div class="w-2/2">

                
                
                <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerNombre"> <strong>Primer Nombre*</strong> </label>
                        <div class="control">
                        <input id="primerNombre" 
                            name="primerNombre" 
                            type="text" 
                            required 
                            class=" focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('primerNombre') is-danger @enderror" 
                            value="{{ old('primerNombre') }}" 
                            >
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="label " for="segundoNombre"><strong>Segundo Nombre</strong></label>
                            <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('segundoNombre') is-invalid @enderror"
                                name="segundoNombre" id="segundoNombre" type="text"
                                value="{{old('segundoNombre')}}">
                        </div>
                    </div>
                </div>
                <br>


                <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerApellido"><strong>Primer Apellido*</strong></label>
                        <div class="control">
                            <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('primerApellido') is-invalid @enderror"
                                name="primerApellido" id="primerApellido" type="text" 
                                value="{{old('primerApellido')}}">
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="" for="segundoApellido"><strong>Segundo Apellido</strong></label>
                            <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('segundoApellido') is-invalid @enderror"
                                name="segundoApellido" id="segundoApellido" type="text" 
                                value="{{old('segundoApellido')}}">
                        </div>
                    </div>
                </div>

                <br>
                <div class="newbiz ">
                    <label class="" for="nombreNegocio"><strong>Nombre del Negocio*</strong></label>
                    <div class="control">
                        <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('nombreNegocio') is-invalid @enderror" name="nombreNegocio"
                            id="nombreNegocio" type="text"  value="{{old('nombreNegocio')}}">
                    </div>
                </div>
                <br>
                <div class="newbiz ">
                    <label class="" for="cedulaJuridica"><strong>Cedula Jurídica</strong><small
                            class="text-muted">(Opcional)</small></label>
                    <div class="control">
                        <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('cedulaJuridica') is-invalid @enderror" name="cedulaJuridica"
                            id="cedulaJuridica" maxlength="10" type="text" 
                            value="{{old('cedulaJuridica')}}">
                    </div>
                </div>
                <br>
                <div class="newbiz ">
                    <label class="" for="BizE"><strong>Correo Electrónico*</strong></label>
                    <div class="control">
                        <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('BizE') is-invalid @enderror" name="BizE" id="BizE"
                            type="text"   >
                        <!-- <small class="form-text text-muted">Puede utilizar el correo personal o agregar uno de
                            negocio.</small> -->
                    </div>
                </div>

                <div class="newbiz">
                    <label class="" for="tipoNegocio"><strong>Tipo de Productos*</strong></label>
                    <div class="control ">
                        <div class="select">
                            <select class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" name="tipoNegocio">
                                <option>--</option>
                                @foreach($myCategory as $category)
                                <option value="{{$category}}">{{$category}}</option>
                                @endforeach


                            </select><br>


                        </div>
                    </div>

                </div>



                {{-- Provincia --}}
                <div class='row' id='appAd'>
                    <div class='newbiz col'>

                        <label class="label" for="provincia">
                            <strong> Provincia* </strong> 
                        </label>

                        <select class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm 
                        @error('provincia') is-invalid @enderror" v-model="addressSelected">
                            <option disabled selected value>
                                --
                            </option>

                            <option v-for="address in addresses"
                                v-bind:value="{ provincia: address.provincia, canton: address.canton }">
                                @{{ address.provincia }}
                            </option>
                            <input type="hidden" name="provincia" :value="addressSelected.provincia">
                        </select>

                    </div>
                    {{-- CANTON --}}

                    <div class="newbiz col">

                        <label class="label" for="canton">
                            <strong> Cantón* </strong>
                        </label>
                        <select name="canton" class=" rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm 
                    @error('canton') is-invalid @enderror">
                            <option disabled selected value>
                                --
                            </option>
                            <option v-for='canton in addressSelected.canton' v-bind:value="canton" name="canton">
                                @{{canton}}
                            </option>
                        </select>

                    </div>
                </div>


                <br>
                <div class="newbiz ">
                    <label class="" for="dir"><strong>Dirección*</strong></label>
                    <div class="control">
                        <input class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-2  sm:text-sm border-gray-300 rounded-md shadow-sm form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text"
                        value="{{old('dir')}}" required>

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="newbiz col">
                        <label class="" for="prefix"><strong>Numero Teléfono*</strong></label>
                    </div>
                </div>

                <div class="row">
                    <div class="newbiz col-2" style="margin-right: 8px!important;">
                        <input style="width:66px!important; " class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('prefix') is-invalid @enderror"
                            id="prefix" type="tel" placeholder="+506" value="+506" required disabled> <input
                            name="prefix" value="+506" required hidden>
                    </div>


                    <div class="newbiz ">
                        <input class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm col @error('ntel') is-invalid @enderror" name="ntel" id="ntel"
                            type="tel" pattern="[0-9]{4}[0-9]{4}"  value="{{old('ntel')}}"
                            required>
                    </div>
                </div>






                <br>
                <div class=" flex justify-start" >
                    <div class=" flex">
                        <label class="checkbox flex" for="tyc">
                            <input type="checkbox" name="tyc" id="tyc" value="1" class="w-4 mr-2 mt-1.5">
                        </label>
                            <div class="mb-4">
                            Acepto <a href="#" class="self-start text-green-600 font-bold"> Términos y Condiciones</a>
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
                        {{ __('Comenzar a Vender') }}
                    </button>
                </div>

            </div>
        </div>
    </form>
    {{-- <img src="dummy/myVertical.png" alt="" class="col align-self-end" style="width: 250px!important; height: auto; margin: 8em 5em 0 0;" > --}}
</div>


@endsection