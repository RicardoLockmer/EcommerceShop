@extends('mainLayout')

@section('comoVender')
@if(Auth::user())
<div class="container">
    <h1>COMO VENDER</h1>
    <p class="text-muted" style="text-align: center;"> En esta pagina va ir como crear una cuenta para vender prodcutos, por el momento, dar click <a href="/iniciar-mi-negocio"> CREAR NEGOCIO</a></p>
    <div style="text-align: center">
    <img src="/dummy/tenor.gif" alt="" srcset="">
    </div>
</div>
@else
<div class="container">
    <h1>COMO VENDER</h1>
    <p class="text-muted" style="text-align: center;"> En esta pagina va ir como crear una cuenta para vender prodcutos, por el momento, dar click <a href="{{ route('register') }}"> REGISTRARSE</a></p>
    <div style="text-align: center">
    <img src="/dummy/tenor.gif" alt="" srcset="">
    </div>
    
</div>

@endif

@endsection
