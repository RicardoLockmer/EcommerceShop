@extends('mainLayout')



@section('crearItem')
<div class="container grid grid-cols-2" id="itemLayout" >


    <div class="" style="margin-top: 14px;" >

        <div :class="(vistaPrevia)? 'ml-1 lg:ml-28 md:w-2/3 ' : 'ml-1 md:w-1/2 lg:ml-80 lg:w-1/2 md:w-2/3 '" style=" height:auto;">
            <form class="" @submit.prevent="saveData" style="display:block!important; top:15px!important;"   id="sticky" enctype="multipart/form-data">
                {{-- CSRF --}}
                @csrf
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show lg:ml-30 " role="alert">
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
                    <img class="mx-auto h-12 w-auto  " src="/dummy/logoTest.png" alt="Workflow">
                        <span class="mx-auto h-12  w-auto text-xl"> <strong>NUEVO PRODUCTO</strong></span>
                        
                    </div>
                    <br>


                    {{-- TAB 1 --}}
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab" >
                        @include('includeFiles/tab1')
                    </div>

                    {{-- TAB 2 --}}
                    <div style="width:auto;" class="tab">
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
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-outline-primary">Anterior</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-outline-primary">Siguiente</button>
                            <button type="submit" id="subBtn"  class="btn btn-outline-primary">Agregar</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
<br>
            </form>
        </div>


    </div>
    @include('includeFiles/vistaPrevia')


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
