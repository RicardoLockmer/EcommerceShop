@extends('mainLayout')

@section('updateStore')

<div class="container" >
    
    
    <form action="/negocio/{{$store->nombreNegocio}}/editar" method="POST" class="forms">
        @csrf
        @method('PUT')
            <h1 class="myFormTitle" style="text-align: center">
                {{$store->nombreNegocio}}
            </h1>

            <div class="myForms" style="width: 35em; margin-left: 26%">
                <div class="myFormData">

                    <h3 class="myFormTitle">
                        Actualizar Negocio
                    </h3>
                    
    <br>

    
    <input type="text" name="store_id" value="{{$store->store_id}}" hidden>

            <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerNombre">Primer Nombre</label>
                        <div class="control">
                        <input class="form-control @error('primerNombre') is-danger @enderror" name="primerNombre" id="primerNombre" type="text" placeholder="{{$store->primerNombre}}" >
                        </div>    
                </div>  
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="label " for="segundoNombre">Segundo Nombre</label>
                            <input class="form-control @error('segundoNombre') is-danger @enderror" name="segundoNombre" id="segundoNombre" type="text" placeholder="{{$store->segundoNombre}}" >
                        </div>
                </div>
            </div>
<br>
            

        <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerApellido">Primer Apellido</label>
                        <div class="control">
                            <input class="form-control @error('primerApellido') is-danger @enderror" name="primerApellido" id="primerApellido" type="text" placeholder
                            ="{{$store->primerApellido}}" >
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="" for="segundoApellido">Segundo Apellido</label>
                            <input class="form-control @error('segundoApellido') is-danger @enderror" name="segundoApellido" id="segundoApellido" type="text"  placeholder="{{$store->segundoApellido}}" >
                        </div>
                </div>
            </div>
    
        <br>
        <div class="newbiz ">
            <label class="" for="nombreNegocio">Nombre del Negocio</label>
                <div class="control">
                    <input class="form-control @error('nombreNegocio') is-danger @enderror" name="nombreNegocio" id="nombreNegocio" type="text" placeholder="{{$store->nombreNegocio}}">
                </div>
        </div>
        <br>
        
            <div class="newbiz ">
                <label class="" for="tipoNegocio">Tipo de Negocio</label>
                <div class="control ">
                    <div class="select">
                        <select class="form-control" name="tipoNegocio" onchange="showfield(this.options[this.selectedIndex].value)">
                        <option placeholder="{{$store->tipoNegocio}}"></option>
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
        <button type="submit" class="btn btn-outline-success btn-lg">ACTUALIZAR</button>

                        </div>
        </div>
    </form>
    {{-- <img src="dummy/myVertical.png" alt="" class="col align-self-end" style="width: 250px!important; height: auto; margin: 8em 5em 0 0;" > --}}
</div>


@endsection