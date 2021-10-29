
<?php 
session_start();
include("conexion_db.php");

if(!empty($_POST['usuario'] && !empty($_POST['contraseña']))) {
    $records = $conex->prepare("SELECT pers_usuario,pers_contraseña FROM persona WHERE pers_usuario =:usuario ");
    $records->bindParam(':usuario',$_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message =  '';
    if(count($results)> 0 && contraseña_verify($_POST['contraseña'],$results['pers_contraseña'])){
          $_SESSION['usuario'] = $results['pers_usuario'];
          header('locationn: ../Sitio web AybriMakeUp/index.html');

    }else{
        $message = 'no coinciden las credenciales';
    }

}
?>