@extends('mainLayout')

@section('crearNegocio')

<div class="container">


    <form action="/iniciar-mi-negocio" method="POST" class="forms">
        @csrf
        <div style="text-align: center">
            <h1 class="myFormTitle">
                XXXX
            </h1>
            <small class="text-muted">
                Estas cerca de comenzar a vender tu producto con XXXX!
            </small>
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
        <div class="myForms" style="width: 35em; margin-left: 26%; border: 2px solid #007bff">
            <div class="myFormData">

                <div>
                    <span style="font-size: 26px;"> <strong>INFORMACIÓN</strong></span>
                    <strong>

                        <a class="text-muted" data-toggle="tooltip" data-placement="right"
                            title="Información Protegida">
                            <svg style="margin:0 0 0 0; font-size: 28px;" width="1em" height="1em" viewBox="0 0 16 16"
                                class="bi bi-shield-plus align-text-bottom text-primary" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                                <path fill-rule="evenodd"
                                    d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </a>
                    </strong>
                </div>
                <br>

                <input type="text" name="usuario" value="{{Auth::user()->name}}" hidden>
                <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
                <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>

                <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerNombre"> <strong>Primer Nombre*</strong> </label>
                        <div class="control">
                            <input class="form-control @error('primerNombre') is-invalid @enderror" name="primerNombre"
                                id="primerNombre" type="text" placeholder="Primer Nombre"
                                value="{{old('primerNombre')}}">
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="label " for="segundoNombre"><strong>Segundo Nombre*</strong></label>
                            <input class="form-control @error('segundoNombre') is-invalid @enderror"
                                name="segundoNombre" id="segundoNombre" type="text" placeholder="Segundo Nombre"
                                value="{{old('segundoNombre')}}">
                        </div>
                    </div>
                </div>
                <br>


                <div class='row'>
                    <div class="newbiz col">

                        <label class="" for="primerApellido"><strong>Primer Apellido*</strong></label>
                        <div class="control">
                            <input class="form-control @error('primerApellido') is-invalid @enderror"
                                name="primerApellido" id="primerApellido" type="text" placeholder="Primer Apellido"
                                value="{{old('primerApellido')}}">
                        </div>
                    </div>

                    <div class="newbiz col">

                        <div class="control">
                            <label class="" for="segundoApellido"><strong>Segundo Apellido*</strong></label>
                            <input class="form-control @error('segundoApellido') is-invalid @enderror"
                                name="segundoApellido" id="segundoApellido" type="text" placeholder="Segundo Apellido"
                                value="{{old('segundoApellido')}}">
                        </div>
                    </div>
                </div>

                <br>
                <div class="newbiz ">
                    <label class="" for="nombreNegocio"><strong>Nombre del Negocio*</strong> <small
                            class="text-muted">(Razón Social)</small></label>
                    <div class="control">
                        <input class="form-control @error('nombreNegocio') is-invalid @enderror" name="nombreNegocio"
                            id="nombreNegocio" type="text" placeholder="Razon Social" value="{{old('nombreNegocio')}}">
                    </div>
                </div>
                <br>
                <div class="newbiz ">
                    <label class="" for="cedulaJuridica"><strong>Cedula Jurídica*</strong></label>
                    <div class="control">
                        <input class="form-control @error('cedulaJuridica') is-invalid @enderror" name="cedulaJuridica"
                            id="cedulaJuridica" maxlength="10" type="text" placeholder="# de Cedula Juridica"
                            value="{{old('cedulaJuridica')}}">
                    </div>
                </div>
                <br>
                <div class="newbiz ">
                    <label class="" for="BizE"><strong>Correo Electrónico</strong><small
                            class="text-muted">(opcional)</small></label>
                    <div class="control">
                        <input class="form-control @error('BizE') is-invalid @enderror" name="BizE" id="BizE"
                            type="text" placeholder="{{Auth::user()->email}}" value="{{old('BizE')}}">
                        <small class="form-text text-muted">Puede utilizar el correo personal o agregar uno de
                            negocio.</small>
                    </div>
                </div>

                <br>
                <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
                <div class="newbiz">
                    <label class="" for="tipoNegocio"><strong>Tipo de Productos*</strong></label>
                    <div class="control ">
                        <div class="select">
                            <select class="form-control" name="tipoNegocio">
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

                        <select class="custom-select 
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
                        <select name="canton" class="custom-select 
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
                        <input class="form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text"
                            placeholder="Dirección del Negocio" value="{{old('dir')}}" required>

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
                        <input style="width:66px!important; " class="form-control @error('prefix') is-invalid @enderror"
                            id="prefix" type="tel" placeholder="+506" value="+506" required disabled> <input
                            name="prefix" value="+506" required hidden>
                    </div>


                    <div class="newbiz ">
                        <input class="form-control col @error('ntel') is-invalid @enderror" name="ntel" id="ntel"
                            type="tel" pattern="[0-9]{4}[0-9]{4}" placeholder="# Telefono" value="{{old('ntel')}}"
                            required>
                    </div>
                </div>






                <br>
                <div class="newbiz" style="margin: 2em 0 0 0">
                    <div class="control">
                        <label class="checkbox" for="tyc">
                            <input type="checkbox" name="tyc" id="tyc" value="1">
                            Acepto <a href="#">Términos y Condiciones</a>
                            @error('tyc')
                            <br> <small class="form-text" style="color:red;">Aceptar Términos y Condiciones</small>
                            @enderror
                        </label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary btn-lg"> CREAR NEGOCIO</button>

            </div>
        </div>
    </form>
    {{-- <img src="dummy/myVertical.png" alt="" class="col align-self-end" style="width: 250px!important; height: auto; margin: 8em 5em 0 0;" > --}}
</div>


@endsection