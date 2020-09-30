@extends('mainLayout')

@section('myUserPage')

<div class="container">

    <div class='container'>
        <div class="centerMyImages">

            <a class="column myProduct btn centerMyImages" style="border: 1px solid rgb(192, 192, 192);" href="###">
                Editar Informacion
            </a>
            {{-- IF NEGOCIO --}}
            @if ($user->nombreNegocio != NULL)
            <a href="/negocio/{{$user->store->nombreNegocio}}/editar" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
                Visitar Negocio
            </a>
            @else
            <a href="/iniciar-mi-negocio" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
                Crear Negocio
            </a>
            @endif

            <a class='column myProduct btn centerMyImages' href="###" style="border: 1px solid rgb(192, 192, 192);">
                Editar Pagos
            </a>

        </div>
    </div>
    <div class='container' style="">
        <div class="centerMyImages">

            <a class="column myProduct btn centerMyImages" style="border: 1px solid rgb(192, 192, 192);" href="###">
                F.A.Q
            </a>
            {{-- IF NEGOCIO --}}

            <a href="/perfil/{{$user->name}}/direcciones" class='column myProduct btn centerMyImages' style="border: 1px solid rgb(192, 192, 192);">
                Editar Direcciones
            </a>


            <a class='column myProduct btn centerMyImages' href="###" style="border: 1px solid rgb(192, 192, 192);">
                Como Vender
            </a>

        </div>
    </div>
    <div class="form-row " style="border-top: 2px solid #007bff; margin-top: 3em;border-bottom: 2px solid #007bff;">
        <div class="col" style="width: 45%; height: auto; margin: 1.9em 0 0 0; ">
            {{-- MI PERFIL --}}
            <article class="card-body" style="padding-left: 0; ">

                <span style="font-size: 26px;"> <strong>MI INFORMACIÓN</strong></span>
                <strong>
                    <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Información Protegida">
                        <svg style="margin:0 0 0 0; font-size: 28px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-plus align-text-bottom text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
                            <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </a>
                </strong>
                <br>
                <br>

                {{-- INFORMACION DEL PERFIL --}}
                <div class="col" style="width: 45%; height: auto; margin: 1em 0 0 3em; ">
                    <div>
                        {{-- NOMBRE --}}
                        <p>
                            <strong>Nombre: </strong>
                            <small class="text-muted"> {{$user->name}} </small>
                        </p>
                        {{-- NEGOCIO --}}
                        @if ($user->nombreNegocio != NULL)
                        <p>
                            <strong>Negocio: </strong>
                            <small class="text-muted"> {{$user->nombreNegocio}} </small>
                        </p>
                        @else
                        <p>
                            <strong>Negocio: </strong>
                            <small class="text-muted"><a href="/iniciar-mi-negocio">Comenzar a Vender</a></small>
                        </p>
                        @endif
                        {{-- CONTACTO --}}
                        <br>
                        <h4>Contacto</h4>
                        <br>



                        {{-- DIRECCION --}}

                        @if ($direccion != NULL)
                        <p>
                            <strong>País: </strong>
                            <small class="text-muted"> {{$direccion->pais}} </small>
                        </p>
                        <p>
                            <strong>Provincia: </strong>
                            <small class="text-muted"> {{$direccion->provincia}} </small>
                        </p>
                        <p>
                            <strong>Cantón: </strong>
                            <small class="text-muted"> {{$direccion->canton}} </small>
                        </p>
                        <p>
                            <strong>Dirección: </strong>
                            <small class="text-muted"> {{$direccion->direccion}} </small>
                        </p>
                        <p>
                            <strong>Numero de Teléfono: </strong>
                            <small class="text-muted">
                                {{$direccion->prefix}} {{$direccion->phoneNumber}}
                            </small>

                        </p>
                        @else
                        <p>
                            <strong>Dirección y Teléfono: </strong>
                            <small class="text-muted"> <a href="/perfil/{{$user->name}}/direcciones">Agregar Dirección y
                                    Teléfono</a> </small>
                            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Información para recibir sus paquetes">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                            </a>
                        </p>

                        @endif
                        {{-- CORREO ELECTRONICO --}}
                        <p>
                            <strong>Correo Electrónico: </strong>
                            <small class="text-muted">
                                {{$user->email}}
                            </small>
                        </p>
                        <br>

                        {{-- COMPRAS --}}
                        <h4>Compras</h4>
                        @if($user->compras != NULL)
                        {{-- lista de todas las compras hechas --}}
                        @else
                        <p class="text-muted">No hay Compras Recientes</p>
                        @endif

                        <br>
                        {{-- INFO DE PAGO --}}
                        <h4>Información de Pagos</h4>
                        @if($user->compras != NULL)
                        {{-- lista de todas las tarjetas --}}
                        @else
                        <p class="text-muted">No hay Tarjetas Registradas</p>
                        @endif

                    </div>
                </div>
            </article>
        </div>


    </div>
</div>

@endsection
