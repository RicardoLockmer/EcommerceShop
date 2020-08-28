@extends('mainLayout')

@section('loginContent')
 
<div class="container">
            <div class="">
                <form method="POST" class="forms" action="{{ route('register') }}">
                @csrf

                    <div class="myFormTitle" style="text-align: center;">
                        <strong>{{ __('My Store 101') }}</strong> 
                    </div>

                    <div class="myForms">
                        <div class="myFormData">

                            <div class="myFormTitle">
                                <strong>
                                    {{ __('CREAR CUENTA') }}
                                </strong> 
                            </div>

                            <div class="">
                                <label for="name" value="{{old('name')}}">
                                    {{ __('Usuario') }}
                                </label>

                                <div class="">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>    
                                </div>
                            </div>
    <br>
                            <div class="">
                                <label for="email" class=" ">
                                    {{ __('Correo Electronico') }}
                                </label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                                </div>
                            </div>
    <br>
                            <div class="">
                                <label for="password" class=" ">
                                    {{ __('Contraseña') }}
                                </label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>
                            </div>
    <br>
                            <div class="">
                                <label for="password-confirm" class=" ">
                                    {{ __('Confirmar Contraseña') }}
                                </label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    <br>
                            <div class="">
                                <div>
                                    <button type="submit" class="btn btn-outline-success btn-lg">
                                        {{ __('Registrarse') }}
                                    </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
</div>
        
@endsection
