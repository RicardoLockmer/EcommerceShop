@extends('mainLayout')



@section('crearItem')
<div class="container" id="itemLayout">


    <div class="d-flex" style="margin-top: 14px;">

        <div class="col" style=" height:auto; border-right: 2px dotted grey;">
            <form @submit.prevent="saveData" style="display:block!important; top:15px!important;"  class="" id="sticky" enctype="multipart/form-data">
                {{-- CSRF --}}
                @csrf
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                <!-- <input type="text" value="{{ $store->store_id }}" name="store_id" hidden>
                <input type="text" value="{{ $store->nombreNegocio }}" name="store_name" hidden>
                <input type="text" value="{{ Auth::user()->id }}" name="user_id" hidden>
                 -->

                {{-- FINAL CSRF Y EXTRA --}}
                {{-- FORM DATA COMIENZA --}}
                <div class="myFormData">
                    <div>
                        <span style="font-size: 26px;"> <strong>NUEVO PRODUCTO</strong></span>
                        <strong>

                            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Información Protegida">
                                <svg style="margin:0 0 0 0; font-size: 28px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus align-text-bottom text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                                    <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </a>
                        </strong>
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
                        <button >EXTRA BOTTON</button>
                        
                    </div>

                    <div class="tab">LAST TAB:
                        <p><input placeholder="Username..." oninput="this.className = ''"></p>
                        <p><input placeholder="Password..." oninput="this.className = ''"></p>
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

<script src="/scripts/categoryOptions.js"></script>


@endsection
