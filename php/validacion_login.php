<?php 
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

include('conexion_db.php');
$consulta="SELECT*FROM persona WHERE pers_usuario= '$usuario' and pers_contraseña = '$contraseña'";
$resultado=mysqli_query($conex,$consulta);

?>