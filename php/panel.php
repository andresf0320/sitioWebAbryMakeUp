<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location:../index.html");
}

?>
<h1>BIENVENIDO A SU CUENTA</h1><br><br>
<a href="logout.php">Desconectar</a>