@extends('mainLayout')


@section('EditAddress')

<div class="container">
    <form action="/perfil/{{$address->id}}/update" method="POST" class="forms">
    @method('PUT')
    @csrf 
        <div style="text-align: center">
            <h1 class="myFormTitle" >
                Editar Dirección
            </h1>
            <small class="text-muted">
                Toda información que comparta con nosotros esta <strong class="text-primary">Protegida.</strong> 
            </small>
        </div>
    <br>
    @if($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        Parece que hay un problema!
                    </strong>
                       {{$errors->first()}}
                    </div>

@endif <br>
    <div class="myForms" style="width: 35em; margin-left: 26%; border: 2px solid #007bff">
        <div class="myFormData">
            <div>
                <span style="font-size: 26px;"> <strong> EDITAR DIRECCIÓN</strong></span> 
                <strong>
                <a 
                    class="text-muted" 
                    data-toggle="tooltip" 
                    data-placement="right" 
                    title="Información Protegida">
                <svg  
                    style="margin:0 0 0 0; font-size: 28px;"
                    width="1em" 
                    height="1em" 
                    viewBox="0 0 16 16" 
                    class="bi bi-shield-plus align-text-bottom text-primary" 
                    fill="currentColor" 
                    xmlns="http://www.w3.org/2000/svg">
                    <path 
                        fill-rule="evenodd" 
                        d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
                    <path 
                        fill-rule="evenodd" 
                        d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                </a>
                </strong>
            </div>
            
            
           
            
            <br>
    {{-- Nombre Completo --}}
    <div class="newbiz ">
        <label class="" for="nombreCompleto"><strong>Nombre Completo</strong>
            <a 
            class="text-muted"
            style=" text-decoration:none;" 
            data-toggle="tooltip" 
            data-placement="right" 
            title="Nombre de la persona que recibe el paquete">
            <svg 
                width="1em" 
                height="1em" 
                viewBox="0 0 16 16" 
                class="bi bi-question-square" 
                fill="currentColor" 
                xmlns="http://www.w3.org/2000/svg">
                <path 
                    fill-rule="evenodd" 
                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path 
                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
            </svg>
            </a></label>
            <div class="control">
                <input class="form-control @error('nombreCompleto') is-invalid @enderror" name="nombreCompleto" id="nombreCompleto" type="text" placeholder="{{$address->nombreCompleto}}" value="{{$address->nombreCompleto}}" maxlength="120" >
            
            </div>

    </div>
    <br>
    <div class='row' >
        <div class='newbiz col'>
            <div class="control">
                <label class="label" for="pais">
                  <strong>  País </strong>
                 </label>
                
                <input class="form-control @error('pais') is-invalid @enderror" type="number"  value="Costa Rica" placeholder="Costa Rica" disabled>
                <input type="text" name="pais" value="Costa Rica" hidden>
            </div>
        </div>
                {{-- CANTON --}}
                
            <div class="newbiz col" >
                
                <label class="label" for="codigoPostal">
                   <strong> Código Postal </strong>
                </label>
                <input class="form-control @error('codigoPostal') is-invalid @enderror" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="5" name="codigoPostal" value="{{$address->codigoPostal}}" placeholder="{{$address->codigoPostal}}">
                <small class="text-muted text-wrap">Conseguir mi <a href="https://correos.go.cr/codigo-postal/" target="_blank">Código Postal</a></small>
                
            </div>
    
    </div>
    <br>
    <div class='row' id='appAd' >
        <div class='newbiz col' >
            
                <label class="label" for="provincia">
                  <strong>  Provincia </strong>
                 </label>
                
                <select 
                    class="custom-select 
                    @error('provincia') is-invalid @enderror" 
                    
                    v-model="addressSelected"
                >
                <option disabled value selected>
                        {{$address->provincia}}
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
                        {{$address->canton}}
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
                <input class="form-control @error('dir') is-invalid @enderror" name="dir" id="dir" type="text" placeholder="{{$address->direccion}}" value="{{$address->direccion}}" >
            
            </div>
    </div>
    <br> 
    <div class="newbiz ">
        <label class="" for="infoAdicional"><strong>Información Adicional</strong> <a 
            class="text-muted"
            style=" text-decoration:none;" 
            data-toggle="tooltip" 
            data-placement="right" 
            title="Información adicial que nos ayude a encontrar la Dirección.">
            <svg 
                width="1em" 
                height="1em" 
                viewBox="0 0 16 16" 
                class="bi bi-question-square" 
                fill="currentColor" 
                xmlns="http://www.w3.org/2000/svg">
                <path 
                    fill-rule="evenodd" 
                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path 
                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
            </svg>
            </a></label>
            <div class="control">
                <textarea class="form-control @error('infoAdicional') is-invalid @enderror" name="infoAdicional" id="infoAdicional" placeholder="Información adicial que nos ayude a encontrar la Dirección." value="{{$address->infoAdicional}}">  </textarea>
            
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
                <input style="width:66px!important; " class="form-control @error('prefix') is-invalid @enderror" id="prefix" type="tel" placeholder="+506" value="+506"  disabled> <input name="prefix" value="+506"  hidden>
            </div>
            
        
            <div class="newbiz ">
            <input class="form-control col @error('phoneNumber') is-invalid @enderror" name="phoneNumber" id="phoneNumber" type="tel" pattern="[0-9]{4}[0-9]{4}" placeholder="{{$address->phoneNumber}}" value="{{$address->phoneNumber}}" >
            </div>
        </div>
    <br>
           
        <label class="checkbox" for="selectedAddress">
            <input type="checkbox" name="selectedAddress" value="1">
            Usar esta Dirección para mis compras.
        </label>
            
       
    
    
    <br>
    <br>
    <button type="submit" class="btn btn-outline-primary">Agregar Dirección</button>
</div>
</div>
</form>
</div>

@endsection