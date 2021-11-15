<?php
include "conexion_db.php";
error_reporting(0);
session_start();



if(isset($_SESSION["usuario"])){
    header("Location: panel.php");
}

if(isset($_POST["ingresar"])){
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña'])){
    $usuario=$_POST["usuario"];
    $contraseña=md5($_POST["contraseña"]);

    $consulta = "SELECT * FROM persona WHERE pers_usuario ='$usuario' AND pers_contraseña ='$contraseña'";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado->num_rows >0){
        $row = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: ../php/panel.php");

    }else{
        echo"<script>alert('La contraseña o el usuario son incorrectos')</script>";

    }
   }else{
       echo"<script>alert('Por favor complete los campos')</script>"; 
   }

}


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://kit.fontawesome.com/1d1992211d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cookie&family=Patua+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href= "../css/normalizacion.css">

    <title>Aybri Make Up</title>
</head>
<header>
    <div class="fondo" align="center">
        <img src="../img/nombre.jpeg" class="nombre">
    </div>
</header>
<div class="navegador">
    <nav class="principal">
        <div class="menu">
            | <a class="tex" href="../index.html">INICIO</a> |
            <a class="tex" href="../conocenos.html">CONÓCENOS</a> |
            <a class="tex" href="../productos.html">PRODUCTOS</a> |
            <a class="tex" href="../contactenos.html">CONTÁCTENOS</a> |
        </div>
        <div class="derecha">
          <a href="../php/login.php">  <button class="icon btn-usuario"onclick="document.getElementById('modal').style.display='block'" ><i class="fas fa-user-circle"></i></button></a>
        </div>
    </nav>

        
</div>
<!--
<div class="modal" id="modal" tabindex="-1">
    <div class="contenedor" align="center">
        <div class="barra-cerrar">
            <button id="close" class="closes" onclick="cerrar()"><i class="far fa-times-circle"></i></button>
        </div>
-->
<div class="contenedor" align="center">
        <div class="barra-cerrar">
            <button id="close" class="closes" onclick="cerrar()"></button>
        </div>
        <form method="post">
            <h4 class="conct">Iniciar Sesión</h4>
                <label for="usuario" class="txt"><strong>Usuario: </strong></label>
                <input type="text" name="usuario" id="usuario" class="txt" placeholder="Ingrese usuario"><br><br>
                <label for="contraseña" class="txt"><strong> Contraseña: </strong></label>
                <input type="password" name="contraseña" id="contraseña" class="txt" placeholder="Ingrese contraseña"><br><br>
                <a href=""><button class="icon-ingresar" name="ingresar"><i class="fas fa-sign-in-alt"></i></button></a><br>
                <a href="../php-vistas/crear_cuenta.php" class="crear txt">Crear cuenta</a>

                </form>       
        </div>
    </div>
</div>
</div>

</html>