<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location:../php-vistas/index.php");
}
include_once("conexion_db.php")

?>
