$(document).ready(function(){

    //Al iniciar solo muestra el contenido principal y oculta las secciones 
    $('#contElSer').hide();
    $('#contCulturaFisica').hide();
    $('#contArte').hide();
    $('#contSalud').hide();
    $('#contBelleza').hide();
    $('#contPrincipal').show();


    //funcion click del enlace principal    
    $('#principal').click(function(){
        $('#contElSer').hide();
        $('#contCulturaFisica').hide();
        $('#contArte').hide();
        $('#contSalud').hide();
        $('#contBelleza').hide();
        $('#contPrincipal').show();
    });

    //funcion click del enlace ortiencacion al ser
    $('#orientacionAlSer').click(function(){
        
        $('#contCulturaFisica').hide();
        $('#contArte').hide();
        $('#contSalud').hide();
        $('#contBelleza').hide();
        $('#contPrincipal').hide();
        $('#contElSer').show();

    });

    //funcion click del enlace cultura fisica
    $('#culturaFisica').click(function(){
       
        $('#contArte').hide();
        $('#contSalud').hide();
        $('#contBelleza').hide();
        $('#contPrincipal').hide();
        $('#contElSer').hide();
        $('#contCulturaFisica').show();

    });

    //funcion click del enlace arte
    $('#arte').click(function(){
        
        $('#contSalud').hide();
        $('#contBelleza').hide();
        $('#contPrincipal').hide();
        $('#contElSer').hide();
        $('#contCulturaFisica').hide();
        $('#contArte').show();

    });

    //funcion click del enlace salud
    $('#salud').click(function(){
        
        $('#contBelleza').hide();
        $('#contPrincipal').hide();
        $('#contElSer').hide();
        $('#contCulturaFisica').hide();
        $('#contArte').hide();
        $('#contSalud').show();
    });

    //funcion click del enlace belleza
    $('#belleza').click(function(){
        
        $('#contPrincipal').hide();
        $('#contElSer').hide();
        $('#contCulturaFisica').hide();
        $('#contArte').hide();
        $('#contSalud').hide();
        $('#contBelleza').show();
    });

    

});
  