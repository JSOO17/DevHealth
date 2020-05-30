@extends('layouts.app')



@section('estilos')
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection


@section('content')
    <img src="../img/4.jpeg" class="container__fondo">
<div class="contenedor">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="wraper">
                    <img src="img/3.jpeg" class="card__img">
                    <form method="POST" action="{{ route('login') }}" class="wraper__form">
                    	  @csrf
                        <p class="wraper__title2">{{ __('Login') }}</p>
                        <span class="wraper__icono">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input style="padding-left: 15px;" class="wraper__form-input" type="email" placeholder="{{ __('E-Mail Address') }}" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </span>
                        <span class="wraper__icono2">
                            <input type="password" placeholder="{{ __('Password') }}"  class="wraper__form-inputF @error('email') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </span>
                        <div class="wraper__form-remember-me">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                               @endif
                        </div>
                        <a href="http://localhost/devhealth-GL/Vista/html/registrarPersona.php"><button type="submit" class="wraper__form-button">{{ __('Login') }}</button></a>
                    </form>
                </section>  
            </div>
        </div>
    </div>
</div>  
	
@endsection
