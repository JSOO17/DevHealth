@extends('layouts.app')


@section('estilos')
 <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

	

@section('content')



@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="contenedor">
    <img src="../img/4.jpeg" class="container__fondo">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="wraper">
                    <img src="../img/3.jpeg" class="card__img">
                    <form method="POST" action="{{ route('password.email') }}" class="wraper__form">
                    @csrf
                    <label for="email" class="wralabeler__title2">{{ __('E-Mail Address') }}</p>
                    <div class="wraper__icono">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        <input class="wraper__form-input @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" id="email" name="email" required autocomplete="email" autofocus>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                         @enderror
                    </div>

                    <a href="/" class="wraper__form-button">Cancelar</a>
                    <button type="submit" class="wraper__form-button">{{ __('Send Link') }}</button>
                </form>
                </section>  
            </div>
        </div>
    </div>
</div>
@endsection