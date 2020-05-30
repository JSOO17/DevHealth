<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevHealth</title>
    <!--Estilos-->
    <link rel="stylesheet" href="../css/estilosLogin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color:#0EA8E5;">
<div class="contenedor">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="wraper">
                    <img src="../img/3.jpeg" class="card__img">
                    <form action="Login" method="POST" autocomplete="off" class="wraper__form">
                        
                        <p class="wraper__title2"></p>
                        <span class="wraper__icono">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                            <input class="wraper__form-input" type="text" placeholder="Nombre" name="nom" required>
                        </span>
                        <span class="wraper__icono">
                            <input class="wraper__form-inputF" type="text" placeholder="E-mail" name="mail" required>
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <span class="wraper__icono">
                            <input class="wraper__form-inputF" type="text" placeholder="Telefono" name="tel" required>
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <span class="wraper__icono2">
                            <input class="wraper__form-input" type="password" placeholder="Contraseña" name="clave" required>
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <span class="wraper__icono2">
                            <input class="wraper__form-inputF" type="password" placeholder="Confirmar contraseña" name="confClave" required>
                            <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                        </span>
                        <div><button class="wraper__form-button">Registrar</button></div>
                        
                    </form>  
                </section>  
            </div>
        </div>
    </div>
</div>  
</body>
</html>