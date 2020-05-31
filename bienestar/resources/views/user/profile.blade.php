@extends('layouts.app')

@section('estilos')
<link rel="stylesheet" href="../css/styleProfile.css">
@endsection

@section('content')
<div class="contenedor">
    <img src="../img/fondoPublicacion.jpg" class="container__fondo">
    <div class="container my-10 py-20 px-3">
        <div class="row">
            <div class="col">
                <div>
                    <p class="wraper__title2">My Profile</p>
                </div>
                <section class="wraper pt-5">
                
                <div class="wraper__form-input">
                    <p>{{$user->name}}</p>
                </div>
                <div class="wraper__form-input">
                    <p>{{$user->email}}</p>
                </div>
                <a href="/" id="wraper__form-button">Back</a>
                </section>
            </div>
        </div>
    </div>
</div>  

@endsection