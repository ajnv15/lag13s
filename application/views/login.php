<!DOCTYPE html>
<html lang="en">
<head>
  <title>sesion</title>

  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<body>
  <div style="width:200px-,margin:auto;">
    <center><h1>Iniciar Sesion</h1></center>
    <p>Inicia sesión con tu cuenta</p>
    <div id="login_error"></div>
    <p>
      <strong>Username</strong>
    </p>
    <p>
      <input id="username" type="username" placeholder="Username">
    </p>
    <p>
      <strong>Password</strong>
    </p>
    <p>
      <input id="password" type="password">
    </p>
<center><button id="login_btn">Log In</button></center>
</div>


<?php
  $user=$_POST['user'];
  $pass=$_POST['pass'];

    $con= mysqli_connect("localhost","root","","lag");

      $query=mysqli_query($con, "SELECT 'id' FROM 'usuario' WHERE 'username'='$username' AND 'password'='$pass'");
      $fetch = mysqli_fetch_assoc($query);
      $id=$fetch['id'];
      $num= mysqli_num_rows($query);
if(!$user & !$pass){
  echo "Todos los campos son requeridos";
  }
  elseif (!$user) {
    echo "Usuario Requerido";
  }
  elseif (!$pass) {
    echo"Password requerido";
  }
  elseif($num == 0){
    echo "Usuario Incorrecto";
  }
  {
    else{
        session_start();
        $_SESSION['id']= $id;
        echo "<script>window.location.href='sesion.php';</script>";

    }
?>
