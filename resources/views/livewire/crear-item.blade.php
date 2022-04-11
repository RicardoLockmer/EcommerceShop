@extends('mainLayout')



@section('crearItem')
<div id="itemLayout" v-cloak>
    <div v-if="addingItem" class="flex ">
        <div class="fixed z-50 shadow shadow-red-700/80 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col p-8 bg-white shadow-md hover:shadow-lg rounded-2xl w-1/2">
            <div class="">
                <div v-if="!isLoading" class="grid justify-center justify-items-center space-y-2">
                    <div class="animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" class="text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                    </div>
                    <div class="flex">
                        <div class="font-medium leading-none"></div>
                        <strong class="text-2xl text-gray-600 leading-none">Se agrego exitosamente!
                        </strong>
                    </div>
                    <a id="BusinessButton" class="cursor-pointer flex-no-shrink bg-green-500 px-5 py-2 text-lg shadow-sm hover:bg-green-400 font-xl tracking-wider text-white rounded-full mt-3 font-bold" href="/negocio/{{Auth::user()->store->nombreNegocio}}" >Continuar</a>
                    
                </div>
                <div v-else class="grid justify-center justify-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255); display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" r="0" fill="none" stroke="#767cff" stroke-width="2">
                          <animate attributeName="r" repeatCount="indefinite" dur="2s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="0s"></animate>
                          <animate attributeName="opacity" repeatCount="indefinite" dur="2s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="0s"></animate>
                        </circle><circle cx="50" cy="50" r="0" fill="none" stroke="#6146f0" stroke-width="2">
                          <animate attributeName="r" repeatCount="indefinite" dur="2s" values="0;40" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-1s"></animate>
                          <animate attributeName="opacity" repeatCount="indefinite" dur="2s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="-1s"></animate>
                        </circle>
                        </svg>
                    <div class="animate-pulse self-center text-2xl">
                        <strong>
                            Agregando producto...
                        </strong>

                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <div v-on:click="ModalLogic" class="flex flex-col space-y-4 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-40 outline-none focus:outline-none bg-gray-900 opacity-90">
        </div>
    </div>
    <div class="container grid grid-cols-9" >
        
        <div :class="(vistaPrevia)? 'grid grid-cols-12 col-start-2 col-end-12 border-red-600 ' : 'grid grid-cols-12 col-start-1 col-end-11 lg:col-start-2 lg:col-end-9 '" style="margin-top: 14px;" >
    
            <div :class="(vistaPrevia)? ' border-red-600 col-span-5 ' : 'col-span-12'" style=" height:auto;">
                
                <form class=""  @submit.prevent="saveData" style="display:block!important; top:15px!important;"   id="sticky" enctype="multipart/form-data">
                
                    @csrf
                    
                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show lg:ml-30" role="alert">
                        <strong>
                            Parece que hay un problema!
                        </strong>
                        {{ $errors->first() }}
                    </div>
    
                    @endif
                    @error('*')
                    <div id="errores">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>
                                Parece que falto algo!
                            </strong>
                            Revisa que todos los campos estén llenos.
    
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    &times;
                                </span>
                            </button>
                        </div>
                    </div>
                    @enderror
                    {{-- EXTRA --}}
                    <input type="text" id="store_id" value="{{ $store->store_id }}" name="store_id" hidden>
                    <input type="text" id="store_name" value="{{ $store->nombreNegocio }}" name="store_name" hidden>
                    <input type="text" id="user_id" value="{{ Auth::user()->id }}" name="user_id" hidden>
                   
    
                    {{-- FINAL CSRF Y EXTRA --}}
                    {{-- FORM DATA COMIENZA --}}
                    <div class="grid grid-cols-1">
                        <div class="grid">
                        <img class="mx-auto h-12 w-auto" src="/dummy/logoTest.png" alt="Workflow">
                            <span class="mx-auto h-12  w-auto text-xl"> <strong>NUEVO PRODUCTO</strong></span>
                            <!-- <div class="lg:mx-auto w-auto mb-4">
                                <button v-if="vistaPrevia" class="hidden  lg:block btn btn-danger btn-sm" @click="quitarVistaPrevia">Ocultar Vista Previa</button>
                                <button v-if="!vistaPrevia" class="hidden  lg:block btn btn-primary btn-sm" @click="quitarVistaPrevia">Ver Vista Previa</button>
                            </div> -->
                            <div  style="text-align:center;">
                                <span class="step mx-2"></span>
                                <span class="step mx-2"></span>
                                <span class="step mx-2"></span>
                                <span class="step mx-2"></span>
                                <span class="step mx-2"></span> 
                            </div>
                        </div>
                        <br>
    
    
                        {{-- TAB 1 --}}
                        <!-- One "tab" for each step in the form: -->
                    <div class="border border-gray-200 shadow-md rounded-md px-10 lg:px-20 py-10 bg-gray-100 overflow-y-scroll h-screen">
                        <div class="tab ">
                            @include('includeFiles/tab1')
                        </div>
                        <div class="tab">
                            @include('includeFiles/tab2')
                        </div>
    
                        <div class="tab">
                            @include('includeFiles/tab3')
                        </div>
    
                        <div class="tab">
                            @include('includeFiles/tab4')
                        </div>
    
                       <div class="tab">
                            @include('includeFiles/tab5')
                        </div>
                        <br>
                        
                    </div>
                    
                        <div class="my-4" >
                            <div style="float:right;" class="flex">
                                <button type="button" id="prevBtn" @click="nextPrev(-1)" class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 mr-2">Anterior</button>
                                <button type="button" id="nextBtn" @click="nextPrev(1)" class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Siguiente</button>
                                <button type="submit" id="subBtn"  class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-full text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Agregar</button>
                            </div>
                        </div>
    
                     
                        
    <br>
                </form>
            </div>
    
    
        </div>
        
        <!-- @includeincludeFiles/vistaPrevia' -->
    
    
    {{-- ENDING --}}
    
    </div>
    {{-- ENDING PREVIEW DATA --}}
    <br>
    </div>
    </div>
</div>

@endsection

@section('categoryOptions')

{{-- crearItemLogic Controla el Tab 2 de imagenes y variaciones --}}
<script src="/scripts/crearItemLogic.js"></script>

{{-- crearItemTabControl controla los tabs en Multi-Step form para crear item page --}}
<script src="/scripts/crearItemTabControl.js"></script>

{{-- wordCount cuenta la cantidad de letras en text area Tab 1 crear item page --}}
<script src="/scripts/wordCount.js"></script>




@endsection
