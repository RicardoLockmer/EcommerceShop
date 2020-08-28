@extends('mainLayout')

@section('loginContent')

<div class="container">
    <div >
        <form method="POST" class="forms" action="{{ route('login') }}">
        @csrf

            <div class="myFormTitle" style="text-align: center;">
                <strong>
                    {{ __('My Store 101') }}
                </strong> 
            </div>    

            <div class="myForms">
                <div class="myFormData">
                    
                    <div class="myFormTitle">
                        <strong>
                            {{ __('Iniciar Sesión') }}
                        </strong>
                    </div>
                    
                <div >

                    <label for="email" >{{ __('Correo Electronico') }}</label>
                    <div>
                                <input id="email" type="email" class="form-control @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('Contraseña/Correo Incorrecto') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<br>
            <div >
                <label  for="password" >
                    {{ __('Contraseña') }}
                </label>

                <div >
                    <input id="password" type="password" class="form-control @error('password') is-danger @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="is-danger" role="alert">
                            <strong class="is-danger">{{ __('Contraseña/Correo Incorrecto') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvido su Contraseña?') }}
                                    </a>
                                @endif
<br>
<br>
                        <div >
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>
<br>
                        <div >
                            <div>
                                <button type="submit" class="btn btn-outline-success btn-lg">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                            </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
          
        
</div>
@endsection


