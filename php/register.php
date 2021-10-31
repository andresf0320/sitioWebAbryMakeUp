<?php

include "conexion_db.php";
error_reporting(0);
session_start();




if(isset($_SESSION["usuario"]))
{
    header("Location: panel.php");
}

if(isset($_POST["register"])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['identificacion']) >= 1 && strlen($_POST['ciudad']) >=1 &&
    strlen($_POST['correo']) >=1 && strlen($_POST['apellido1'])>=1  && strlen($_POST['cel'])>=1 && strlen($_POST['dirección'])>=1 
    && strlen($_POST['apellido2'])>=1  && strlen($_POST['barrio']) >=1 && strlen($_POST['usuario-new'])>=1 && strlen($_POST['contraseña-new'])>=1){

    $nombre = ($_POST['nombre']);
    $identificacion = ($_POST['identificacion']);
    $ciudad = ($_POST['ciudad']);
    $correo = ($_POST['correo']);
    $apellido1 = ($_POST['apellido1']);
    $cel =  ($_POST['cel']);
    $direccion = ($_POST['dirección']);
    $apellido2 = ($_POST['apellido2']);
    $barrio = ($_POST['barrio']);
    $usuario = ($_POST['usuario-new']);
    $contraseña = md5($_POST['contraseña-new']);
    $c_contraseña=md5($_POST['c_contraseña-new']);

    
    if($contraseña==$c_contraseña){
        $consulta="SELECT * FROM persona WHERE pers_correo='$correo'";
        $result= mysqli_query($conex, $consulta);
        if(!$result->num_rows > 0){
            
            $consulta="INSERT INTO persona(pers_nombre, pers_apellido1, pers_apellido2, pers_identificacion, pers_celular, pers_ciudad, pers_direccion, pers_barrio, 
            pers_correo, pers_usuario, pers_contraseña) VALUE ('$nombre','$apellido1','$apellido2','$identificacion','$cel','$ciudad','$direccion','$barrio','$correo',
            '$usuario','$contraseña')";
            $result=mysqli_query($conex,$consulta);
    
            
            if($result){
                echo "<script>alert('Usuario registrado con éxito')</script>";
                $nombre = "";
                $identificacion = "";
                $ciudad = "";
                $correo = "";
                $apellido1 = "";
                $cel =  "";
                $direccion = "";
                $apellido2 = "";
                $barrio = "";
                $usuario = "";
                $_POST['contraseña-new']="";
                $_POST['c_contraseña-new']="";
            
            }else{
                ?> 
	    	    <h3 class="bad">¡Hay un error!</h3>
                <?php
            }
            
            
        }else{
            ?> 
	    	<h3 class="bad">¡El correo ya existe!</h3>
           <?php
        }
    }else{
        ?> 
        <h3 class="bad">¡Las contraseñas no coinciden!</h3>
       <?php        
    }
 }else{
    ?> 
    <h3 class="bad">¡Por favor complete los campos!</h3>
    <?php        
    }
}


