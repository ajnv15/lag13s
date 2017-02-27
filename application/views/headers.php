<!DOCTYPE html>
<html lang="en">
<head>
  <title>LAG</title>

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://use.fontawesome.com/42fc8e7dc1.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<style>
body{
  background-color: #691f38 !important;
}

</style>

<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/images/13_sesion.png';?>" alt=""></a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#pagos" data-toggle="tab"><i class="fa fa-money fa-2x" aria-hidden="true"></i>  Pagos</a></li>
        <!--<li><a href="#asientos" data-toggle="tab">Asientos <span class="sr-only">(current)</span></a></li>-->
        <li><a href="#qr" data-toggle="tab"> <i class="fa fa-qrcode fa-2x" aria-hidden="true"></i>  Código QR</a></li>
        <li><a href="#telegram" data-toggle="tab"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i>  Telegram</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="<?php echo site_url()."/sesion/cerrarSesion";?>" ><i class="fa fa-power-off fa-2x" aria-hidden="true"></i>  Cerrar sesión</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#">Cerrar Sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
  <div class="tab-content">
