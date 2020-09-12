@extends('mainLayout')

@section('crearNegocio')

<div class="container" >
    
    
    <form action="/iniciar-mi-negocio" method="POST" class="forms">
    @csrf
                <div style="text-align: center">
                    <h1 class="myFormTitle" >
                        XXXX
                    </h1>
                    <small class="text-muted">
                        Estas cerca de comenzar a vender tu producto con XXXX!
                    </small>
                </div>
            <br>
            <div class="myForms" style="width: 35em; margin-left: 26%">
                <div class="myFormData">

                    <h3 class="myFormTitle">
                        Información
                    </h3>
    <br>

    <input type="text" name="usuario" value="{{Auth::user()->name}}" hidden>
    <input type="text" name="email" value="{{Auth::user()->email}}" hidden>
    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden> 

            <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerNombre"> <strong>Primer Nombre*</strong> </label>
                        <div class="control">
                            <input class="form-control @error('primerNombre') is-invalid @enderror" name="primerNombre" id="primerNombre" type="text" placeholder="Primer Nombre" value="{{old('primerNombre')}}">
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="label " for="segundoNombre"><strong>Segundo Nombre*</strong></label>
                            <input class="form-control @error('segundoNombre') is-invalid @enderror" name="segundoNombre" id="segundoNombre" type="text" placeholder="Segundo Nombre" value="{{old('segundoNombre')}}" >
                        </div>
                </div>
            </div>
<br>
            

        <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerApellido"><strong>Primer Apellido*</strong></label>
                        <div class="control">
                            <input class="form-control @error('primerApellido') is-invalid @enderror" name="primerApellido" id="primerApellido" type="text" placeholder="Primer Apellido" value="{{old('primerApellido')}}" >
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="" for="segundoApellido"><strong>Segundo Apellido*</strong></label>
                            <input class="form-control @error('segundoApellido') is-invalid @enderror" name="segundoApellido" id="segundoApellido" type="text" placeholder="Segundo Apellido" value="{{old('segundoApellido')}}" >
                        </div>
                </div>
            </div>
    
        <br>
        <div class="newbiz ">
            <label class="" for="nombreNegocio"><strong>Nombre del Negocio*</strong> <small class="text-muted">(Razon Social)</small></label>
                <div class="control">
                    <input class="form-control @error('nombreNegocio') is-invalid @enderror" name="nombreNegocio" id="nombreNegocio" type="text" placeholder="Razon Social" value="{{old('nombreNegocio')}}">
                </div>
        </div>
        <br>
        <div class="newbiz ">
            <label class="" for="CDJ"><strong>Cedula Juridica <small class="text-muted">(opcional)</small></strong></label>
                <div class="control">
                    <input class="form-control @error('CDJ') is-invalid @enderror" name="CDJ" id="CDJ" type="text" placeholder="# de Cedula Juridica" value="{{old('CDJ')}}">
                </div>
        </div>
        <br>
        <div class="newbiz ">
            <label class="" for="BizE"><strong>Correo del Negocio</strong><small class="text-muted">(opcional)</small></label>
                <div class="control">
                    <input class="form-control @error('BizE') is-invalid @enderror" name="BizE" id="BizE" type="text" placeholder="{{Auth::user()->email}}" value="{{old('BizE')}}">
                <small class="form-text text-muted">Puede utilizar el correo personal o agregar uno de negocio.</small>
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
                        <option  value="{{$category}}" >{{$category}}</option>    
                        @endforeach
                        
                            
                        </select><br>
                        
                        
                    </div>
                </div>
                
            </div>
           
            

    {{-- Provincia --}}
        <div class='row' id='appAd'>
            <div class='newbiz col'>
                
                    <label class="label" for="provincia">
                      <strong>  Provincia* </strong>
                     </label>
                    
                    <select 
                        class="custom-select 
                        @error('provincia') is-invalid @enderror" 
                        
                        v-model="addressSelected"
                    >
                        <option disabled selected value>
                            --
                        </option>
                        
                        <option v-for="address in addresses" v-bind:value="{ provincia: address.provincia, canton: address.canton }">
                            @{{ address.provincia }}
                        </option>
                        <input type="hidden" name="provincia" :value="addressSelected.provincia">
                    </select>
                    
            </div>
                    {{-- CANTON --}}
                    
                <div class="newbiz col" >
                    
                    <label class="label" for="canton">
                       <strong> Cantón* </strong>
                    </label>
                <select 
                    name="canton" 
                    class="custom-select 
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
                    <input class="form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text" placeholder="Dirección del Negocio" value="{{old('dir')}}" required>
                
                </div>
        </div>
        <br>
        <div class="row">
            <div class="newbiz col">

                <label class="" for="prefix"><strong>Numero Telefono*</strong></label>
            </div>
                
               
        </div>
        
            <div class="row">
                <div class="newbiz col-2" style="margin-right: 8px!important;">
                    <input style="width:66px!important; " class="form-control @error('prefix') is-invalid @enderror" name="prefix" id="prefix" type="tel" pattern="[0-9]-{3}-[0-9]-{4}" placeholder="+506" value="{{old('prefix')}}" required disabled>
                </div>
                
            
                <div class="newbiz ">
                    <input class="form-control col @error('ntel') is-invalid @enderror" name="ntel" id="ntel" type="tel" pattern="[0-9]-{3}-[0-9]-{4}" placeholder="# Telefono" value="{{old('ntel')}}" required>
                </div>
            </div>
        
               
       
           
        
        
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


