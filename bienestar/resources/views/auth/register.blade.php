@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--FontAwesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- SweetAlert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('content')
<div class="contenedor">
    <img src="../img/4.jpeg" class="container__fondo">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="wraper">
                    <img src="../img/3.jpeg" class="card__img">
                    <form method="POST" action="{{ route('register') }}" class="wraper__form">
                    	@csrf
                        <p class="wraper__title2">{{ __('Register') }}</p>
                        <span class="wraper__icono">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input class="wraper__form-input @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" placeholder="{{ __('Name') }}" name="name" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                        </span>
                        <span class="wraper__icono">
                            <input class="wraper__form-input @error('email') is-invalid @enderror" type="text" id="email" placeholder="{{ __('E-Mail Address')}}"  name="email" value="{{ old('email') }}" required autocomplete="email">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </span>
                        <span class="wraper__icono2">
                            <input id="password" class="wraper__form-input @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </span>
                        <span class="wraper__icono2">
                            <input class="wraper__form-inputF" type="password" placeholder="{{ __('Confirm Password') }}"  name="password_confirmation" required autocomplete="new-password">
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <div><button type="submit" class="wraper__form-button">{{ __('Register') }}</button></div>
                        
                    </form>  
                </section>  
            </div>
        </div>
    </div>
</div>  
@endsection