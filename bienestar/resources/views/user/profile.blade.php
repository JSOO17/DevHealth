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
                
                <section class="wraper">
                    <form  action="/user/{{$user->id}}" method="PUT" autocomplete="off" class="wraper__form">
                      <p class="wraper__title2">Profile</p>
                    <div class="wraper__icono">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        <input class="wraper__form-input" type="text" id="name" name="name" value="{{$user->name}}" required>
                    </div>
                    <div class="wraper__icono">
                        <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        <input class="wraper__form-input" type="text" value="{{$user->email}}" id="email" name="email" required>
                    </div>
                    <div>
                        <button type="submit" class="wraper__form-button">Update</button>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <a href="/" id="wraper__form-button">Back</a>
                    </div>
                </form>
                </section>    
            </div>
        </div>
    </div>
</div>  

@endsection