<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location:../administrador/index-admin.html");
}
include_once("conexion_db.php")

?>