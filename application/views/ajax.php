<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAG</title>

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>//hacer prueba para interno y externo
$(document).ready(function(){
        $("#login_btn").click(function(){
           var user = $("#usuario").val();
           var pass = $("#password").val();
           var confirmapass = $("#cpassword").val();

           if (pass==confirmapass){
             $.ajax({
               method: "post",
               url: "postInterno",
               data: "&matricula="+user+"&pass="+pass,
               success: function(data){
                 $("#login_error").html(data);
               }
      });
    }
    else {
      $("#login_error").html("tu password y confirmar password no coinciden");
    }

    });




    $("#login_btn_externo").click(function(){
       var nombre = $("#nombre_e").val();
       var email = $("#email_e").val();
       var pass = $("#password_e").val();
       var confirmapass = $("#cpassword_e").val();
       if(pass==confirmapass){
         $.ajax({
           method: "post",
           url: "postExterno",
           data: "&email="+email+"&nombre="+nombre+"&pass="+pass,
           success: function(data){
             $("#login_error").html(data);
           }
    });
    }
    else {
      $("#login_error").html("tu password y confirmar password no coinciden");
    }
    });






    $('#login_btn_l').click(function(){
      var user=$("#usuario_l").val();
      var pass=$("#password_l").val();

      $.ajax({
        method: "post",
        url: "iniciarSesion",
        data: "&user="+user+"&pass="+pass,
        success: function(data){
          if(data==="ingreso"){
            window.location=("<?php echo site_url().'/sesion/index';?>");

          }
          else if(data=="error"){

            $("#login_error").html("Error en usuario y/o contraseña");

          }
        }
      });
    });



});
</script>
<body>
<input type="text" id="usuario">
<input type="text" id="password">
<input type="text" id="cpassword">
<button id="login_btn">Aceptar</button>

<br>


<input type="text" id="nombre_e">
<input type="email" id="email_e">
<input type="text" id="password_e">
<input type="text" id="cpassword_e">
<button id="login_btn_externo">Aceptar</button>
<div id="login_error"></div>


<br>


<input type="text" id="usuario_l">
<input type="text" id="password_l">
<button id="login_btn_l">Aceptar</button>
</body>
