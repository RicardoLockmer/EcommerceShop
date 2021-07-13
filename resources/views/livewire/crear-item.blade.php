@extends('mainLayout')



@section('crearItem')
<div class="container grid grid-cols-9" id="itemLayout" >

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
                            <button type="button" id="prevBtn" @click="nextPrev(-1)" class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 mr-2">Anterior</button>
                            <button type="button" id="nextBtn" @click="nextPrev(1)" class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Siguiente</button>
                            <button type="submit" id="subBtn"  class="group relative w-full flex justify-center my-4 py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-yellow-400 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Agregar</button>
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
@endsection

@section('categoryOptions')

{{-- crearItemLogic Controla el Tab 2 de imagenes y variaciones --}}
<script src="/scripts/crearItemLogic.js"></script>

{{-- crearItemTabControl controla los tabs en Multi-Step form para crear item page --}}
<script src="/scripts/crearItemTabControl.js"></script>

{{-- wordCount cuenta la cantidad de letras en text area Tab 1 crear item page --}}
<script src="/scripts/wordCount.js"></script>




@endsection
