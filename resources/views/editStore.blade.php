@extends('mainLayout')

@section('updateStore')

<div class="container" >
    
    
    <form action="/negocio/{{$store->nombreNegocio}}/editar" method="POST" class="forms">
        @csrf
        @method('PUT')
            <h1 class="myFormTitle" style="text-align: center">
                {{$store->nombreNegocio}}
            </h1>
            <div style="text-align: center">
                    <small class="text-muted">
                        Cambios estan sujetos a revision, puede tomar hasta 7 dias habiles.
                    </small>
                    @if($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        Parece que hay un problema!
                    </strong>
                       {{$errors->first()}}
                    </div>

@endif
            </div>
            <br>
                    <div class="myForms" style="width: 35em; margin-left: 26%">
                <div class="myFormData">

                    <h3 class="myFormTitle">
                        Actualizar Negocio
                    </h3>
                    
    <br>

    
    <input type="text" name="store_id" value="{{$store->store_id}}" hidden>

            <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerNombre"><strong>Primer Nombre</strong></label>
                        <div class="control">
                        <input class="form-control @error('primerNombre') is-danger @enderror" name="primerNombre" id="primerNombre" type="text" placeholder="{{$store->primerNombre}}" >
                        </div>    
                </div>  
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="label " for="segundoNombre"><strong>Segundo Nombre</strong></label>
                            <input class="form-control @error('segundoNombre') is-danger @enderror" name="segundoNombre" id="segundoNombre" type="text" placeholder="{{$store->segundoNombre}}" >
                        </div>
                </div>
            </div>
<br>
            

        <div class='row'>
                <div class="newbiz col" >
                
                    <label class="" for="primerApellido"><strong>Primer Apellido</strong></label>
                        <div class="control">
                            <input class="form-control @error('primerApellido') is-danger @enderror" name="primerApellido" id="primerApellido" type="text" placeholder
                            ="{{$store->primerApellido}}" >
                        </div>    
                </div>
            
                <div class="newbiz col" >
                
                        <div class="control">
                            <label class="" for="segundoApellido"><strong>Segundo Apellido</strong></label>
                            <input class="form-control @error('segundoApellido') is-danger @enderror" name="segundoApellido" id="segundoApellido" type="text"  placeholder="{{$store->segundoApellido}}" >
                        </div>
                </div>
            </div>
    
        <br>
        <div class="newbiz ">
            <label class="" for="nombreNegocio"> <strong> Nombre del Negocio </strong></label>
                <div class="control">
                    <input class="form-control @error('nombreNegocio') is-danger @enderror" name="nombreNegocio" id="nombreNegocio" type="text" placeholder="{{$store->nombreNegocio}}">
                </div>
        </div>
        <br>
        {{-- CEDULA JURIDICA --}}
        <div class="newbiz ">
            <label class="" for="CDJ"><strong>Cedula Jurídica</strong></label>
                <div class="control">
                    <input class="form-control @error('CDJ') is-invalid @enderror" name="CDJ" id="CDJ" type="text" placeholder="{{$store->cedulaJuridica}}" value="{{old('CDJ')}}">
                </div>
        </div>
        <br>
        {{-- TIPO DE PRODUCTOS --}}
        <div class="newbiz">
                <label class="" for="tipoNegocio"><strong>Tipo de Productos</strong></label>
            <div class="control ">
                <div class="select">

                    <select class="form-control" name="tipoNegocio">

                        <option class="text-muted" style="background-color:rgba(233, 233, 233, 0.301)" selected disabled>
                            {{$store->tipoNegocio}}
                        </option>

                        @foreach($myCategory as $category)
                            <option  value="{{$category}}" >
                                {{$category}}
                            </option>    
                        @endforeach
                         
                    </select>
                        <br>
                </div>
            </div>
        </div>
    {{-- CORREO ELECTRONICO --}}
    <div class="newbiz ">
            <label class="" for="BizE"><strong>Correo Electrónico</strong></label>
                <div class="control">
                    <input class="form-control @error('BizE') is-invalid @enderror" name="BizE" id="BizE" type="text" placeholder="{{$store->email}}" value="{{old('BizE')}}">
                
                </div>
        </div>
        
        <br>
           {{-- Provincia --}}
        <div class='row' id='appAd'>
            <div class='newbiz col'>
                
                    <label class="label" for="provincia">
                      <strong>  Provincia </strong>
                     </label>
                    
                    <select 
                        class="custom-select 
                        @error('provincia') is-invalid @enderror" 
                        
                        v-model="addressSelected"
                    >
                        <option disabled selected value>
                            {{$store->provincia}}
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
                       <strong> Cantón </strong>
                    </label>
                <select 
                    name="canton" 
                    class="custom-select 
                    @error('canton') is-invalid @enderror">
                        <option disabled selected value>
                            {{$store->canton}}
                        </option>
                    <option v-for='canton in addressSelected.canton' v-bind:value="canton" name="canton">
                        @{{canton}}
                    </option>
                </select>
                    
                </div>
            </div>
        
    
<br>
<div class="newbiz ">
            <label class="" for="dir"><strong>Dirección</strong></label>
                <div class="control">
                    <input class="form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text" placeholder="{{$store->direccion}}" value="{{old('dir')}}">
                
                </div>
        </div>
        <br>
        <div class="row">
            <div class="newbiz col">

                <label class="" for="prefix"><strong>Numero Teléfono</strong></label>
            </div>
                
               
        </div>
        
            <div class="row">
                <div class="newbiz col-2" style="margin-right: 8px!important;">
                    <input style="width:66px!important; " class="form-control @error('prefix') is-invalid @enderror" id="prefix" type="tel" placeholder="+506" value="+506" disabled> 
                </div>
                
            
                <div class="newbiz ">
                    <input class="form-control col @error('ntel') is-invalid @enderror" name="ntel" id="ntel" type="tel" pattern="[0-9]{4}[0-9]{4}" placeholder="{{$store->phoneNumber}}" value="{{old('ntel')}}" >
                </div>
            </div>
        
               
       
           
        
        
        <br>

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