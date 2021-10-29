<?php
include("conexion_db.php");

if (isset($_POST['register'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['identificacion']) >= 1 && strlen($_POST['ciudad']) >=1 &&
    strlen($_POST['correo']) >=1 && strlen($_POST['apellido1'])>=1  && strlen($_POST['cel'])>=1 && strlen($_POST['dirección'])>=1 
    && strlen($_POST['apellido2'])>=1  && strlen($_POST['barrio']) >=1 && strlen($_POST['usuario-new'])>=1 && strlen($_POST['contraseña-new'])>=1){
        $nombre = trim($_POST['nombre']);
        $identificacion = trim($_POST['identificacion']);
        $ciudad = trim($_POST['ciudad']);
        $correo = trim($_POST['correo']);
        $apellido1 = trim($_POST['apellido1']);
        $cel =  trim($_POST['cel']);
        $direccion = trim($_POST['dirección']);
        $apellido2 = trim($_POST['apellido2']);
        $barrio = trim($_POST['barrio']);
        $usuario = trim($_POST['usuario-new']);
        $contraseña = trim($_POST['contraseña-new']);

        $consulta = "INSERT INTO persona(pers_nombre, pers_apellido1, pers_apellido2, pers_identificacion, pers_celular, pers_ciudad, pers_direccion, pers_barrio, 
        pers_correo, pers_usuario, pers_contraseña) VALUES ('$nombre','$apellido1','$apellido2','$identificacion','$cel','$ciudad','$direccion','$barrio','$correo',
        '$usuario','$contraseña')";

        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?> 
	    	<h3 class="ok">Registro completado</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>