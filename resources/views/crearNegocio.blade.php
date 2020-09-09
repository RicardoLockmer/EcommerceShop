@extends('mainLayout')

@section('crearNegocio')

<div class="container" >
    
    
    <form action="/iniciar-mi-negocio" method="POST" class="forms">
        @csrf

            <h1 class="myFormTitle" style="text-align: center">
                My Store 101
            </h1>

            <div class="myForms" style="width: 35em; margin-left: 26%">
                <div class="myFormData">

                    <h3 class="myFormTitle">
                        Crear Negocio
                    </h3>
    <br>

    <input type="text" name="usuario" value="{{Auth::user()->name}}" hidden>
    <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden> 

            <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerNombre">Primer Nombre</label>
                        <div class="control">
                            <input class="form-control @error('primerNombre') is-danger @enderror" name="primerNombre" id="primerNombre" type="text" placeholder="Primer Nombre" value="{{old('primerNombre')}}">
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="label " for="segundoNombre">Segundo Nombre</label>
                            <input class="form-control @error('segundoNombre') is-danger @enderror" name="segundoNombre" id="segundoNombre" type="text" placeholder="Segundo Nombre" value="{{old('segundoNombre')}}" >
                        </div>
                </div>
            </div>
<br>
            

        <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerApellido">Primer Apellido</label>
                        <div class="control">
                            <input class="form-control @error('primerApellido') is-danger @enderror" name="primerApellido" id="primerApellido" type="text" placeholder="Primer Apellido" value="{{old('primerApellido')}}" >
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="" for="segundoApellido">Segundo Apellido</label>
                            <input class="form-control @error('segundoApellido') is-danger @enderror" name="segundoApellido" id="segundoApellido" type="text" placeholder="Segundo Apellido" value="{{old('segundoApellido')}}" >
                        </div>
                </div>
            </div>
    
        <br>
        <div class="newbiz ">
            <label class="" for="nombreNegocio">Nombre del Negocio</label>
                <div class="control">
                    <input class="form-control @error('nombreNegocio') is-danger @enderror" name="nombreNegocio" id="nombreNegocio" type="text" placeholder="Razon Social" value="{{old('nombreNegocio')}}">
                </div>
        </div>
        <br>
        <div class="newbiz ">
            <label class="" for="CDJ">Cedula Juridica</label>
                <div class="control">
                    <input class="form-control @error('CDJ') is-danger @enderror" name="CDJ" id="CDJ" type="text" placeholder="# de Cedula Juridica" value="{{old('CDJ')}}">
                </div>
        </div>
        <br>
        <div class="newbiz ">
            <label class="" for="BizE">Correo del Negocio</label>
                <div class="control">
                    <input class="form-control @error('BizE') is-danger @enderror" name="BizE" id="BizE" type="text" placeholder="Correo Electronico de su Negocio" value="{{old('BizE')}}">
                    <small class=""></small>
                </div>
        </div>
        <br>
        <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
            <div class="newbiz ">
                <label class="" for="tipoNegocio">Tipo de Negocio</label>
                <div class="control ">
                    <div class="select">
                        <select class="form-control" name="tipoNegocio" onchange="showfield(this.options[this.selectedIndex].value)">
                        <option>--</option>
                            <option value="Aviones">Aviones</option>
                            <option value="Ropa">Ropa</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Hombre">Hombre</option>
                            <option value="Zapatos">Zapatos</option>
                            <option value="Accesorios">Accesorios</option>
                            <option id="Otro">Otro</option>
                        </select><br>
                        
                        
                    </div>
                </div>
                
            </div>
           
            <div id="tipoNegocio" style="margin: 0 0 2em 0"></div>
<br>
            <br>
            <div class="newbiz" style="margin: 2em 0 0 0">
                <div class="control">
                   <label class="checkbox" for="tyc">
                        <input type="checkbox" name="tyc" id="tyc" value="1">
                        Accepto <a href="#">Terminos y Condiciones</a>
                        @error('tyc')
                         <br>   <small class="form-text" style="color:red;">Aceptar Terminos y Condiciones</small>
                        @enderror
                    </label>
                </div>
            </div>
            <br>
        <button type="submit" class="btn btn-outline-success btn-lg"> CREAR NEGOCIO</button>

        </div>
        </div>
    </form>
    {{-- <img src="dummy/myVertical.png" alt="" class="col align-self-end" style="width: 250px!important; height: auto; margin: 8em 5em 0 0;" > --}}
</div>


@endsection