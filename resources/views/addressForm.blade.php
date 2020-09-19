@extends('mainLayout')

@section('addAddress')
 
    <div class="container">
        <div class="form-row " style="border-top: 1px solid rgb(196, 196, 196); margin-top: 3em;">
            <div class="col" style="width: 45%; height: auto; margin: 1.9em 0 0 0; " >
                <div class="card-body" style="padding-left: 0; "> 

                    <h4>Mis Direcciones</h4>

                    <div class="form-row d-flex d-flex flex-wrap justify-content-center">

                        <a href="/perfil/{{$user->name}}/direcciones/agregar" class="addAddress addressBox p-2 card centerMyImages text-muted" style="border: 2px dashed rgb(180, 180, 180)!important;">
                            <div class="justify-content-center ">
                                <svg style="font-size:55px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg><br><br>
                                  <small><strong>Agregar una Dirección</strong></small>
                            </div>
                            
                        </a>
                        @foreach($user->direcciones as $direccion)
                        <div class="addressBox p-2 text-muted" style="position: relative; border: 1px solid #007bff!important;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15)">
                        <small><strong>{{$direccion->nombreCompleto}}</strong></small><br>
                        <small>{{$direccion->direccion}}</small><br>
                        <small>{{$direccion->provincia}},</small>
                        <small>{{$direccion->canton}}</small><br>
                        <small>{{$direccion->pais}}</small><br>
                        <small>{{$direccion->prefix}} {{$direccion->phoneNumber}}</small>
                            @if($direccion->selected === 1)
                                <small style="font-size:12px; position: absolute; bottom: 15px; right:15px;">
                                    <svg 
                                        style="font-size: 23px;"
                                        width="1em" 
                                        height="1em" 
                                        viewBox="0 0 16 16" 
                                        class="bi bi-file-check text-success" 
                                        fill="currentColor" 
                                        xmlns="http://www.w3.org/2000/svg">
                                    <path 
                                        fill-rule="evenodd" 
                                        d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                                    <path 
                                        fill-rule="evenodd" 
                                        d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                    </svg>
                                </small>
                            @endif
                        <form action="/perfil/{{$direccion->id}}/delete" method="POST">
                        @method('DELETE')
                        @csrf
                            <button  type="submit" class="btn " style="margin: 0 1em 0 0; position: absolute; bottom:15px; left: 15px" onclick="return confirm('Esta a seguro de Borrar Esta Dirrección?')">
                               <span class="buttonHoverDEL">Eliminar </span> |
                            </button>
                            
                        </form>
                        
                        <form action="/perfil/{{$direccion->id}}/editar" method="GET">
                            @csrf
                                <button  type="submit" class="btn buttonHoverEDIT" style="margin: 0 1em 0 0; position: absolute; bottom:15px; left: 85px" >
                                    Editar
                                </button>
                            </form>
                        </div>
                        @endforeach
                        
                        
                        

                    </div>




                </div>
            </div>
        </div>


    </div>

@endsection