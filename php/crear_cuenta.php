<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="../css/estilos.css">
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
    <link rel="stylesheet" type="text/css " href="../css/estilos.css">

    <title>Aybri Make Up</title>
</head>
<header>
    <div class="fondo" align="center">
        <img src="../img/nombre.jpeg" class="nombre">
        <hr class="separador">
    </div>
</header>

<body class="body">
    <h4 class="conct title2"> Formulario de registro</h4>
    <hr class="separador">
    <div class="container fnt">
        <div class="contForm">
            <form method="post">
            <section class="row">
                
                <div class="col-sm "><br>
                    <label for="nombre" class="txt"><strong>Nombre: </strong></label>
                    <input type="text" name="nombre" id="nombre" class="txt" placeholder="Ingrese nombre"> <br><br>
                    
                    <label for="apellido1" class="txt"><strong>Primer apellido: </strong></label>
                    <input type="text" name="apellido1" id="apellido1" class="txt"
                        placeholder="Ingrese primer apellido"><br><br>
                    
                        <label for="apellido2" class="txt"><strong>Segundo apellido: </strong></label>
                    <input type="text" name="apellido2" id="apellido2" class="txt"
                        placeholder="Ingrese segundo apellido"><br><br>
               
    

                </div>
                <div class="col-sm izq"><br>
                    <label for="identificacion" class="txt"><strong>Identificación: </strong></label>
                    <input type="text" name="identificacion" id="identificacion" class="txt" placeholder="Ingrese identificación">
                    <br><br>
                    
                    <label for="cel" class="txt"><strong>Celular: </strong></label>
                    <input type="text" name="cel" id="cel" class="txt" placeholder="Ingrese número de celular"><br><br>
                    
                    <label for="correo" class="txt"><strong>Correo: </strong></label>
                    <input type="text" name="correo" id="correo" class="txt" placeholder="Ingrese correo"><br><br>

                   
                </div>
                <div class="col-sm izq"><br>

                    <label for="ciudad" class="txt"><strong>Ciudad: </strong></label>
                    <input type="text" name="ciudad" id="ciudad" class="txt" placeholder="Ingrese ciudad"><br><br> 
                    
                    <label for="dirección" class="txt"><strong>Dirección: </strong></label>
                    <input type="text" name="dirección" id="dirección" class="txt"
                        placeholder="Ingrese dirección"><br><br>
                    
                    <label for="barrio" class="txt"><strong>Barrio: </strong></label>
                    <input type="text" name="barrio" id="barrio" class="txt" placeholder="Ingrese barrio">
                </div>

            </section><br>
            <div allign="center">
            <label for="usuario-new" class="txt" allign="center"><strong>Usuario: </strong></label>
            <input type="text" name="usuario-new" id="usuario-new" class="txt" placeholder="Ingrese usuario">

            <label for="contraseña-new" class="txt"><strong> Contraseña: </strong></label>
            <input type="password" name="contraseña-new" id="contraseña-new" class="txt"
                placeholder="Ingrese contraseña"><br><br>
            
            <label for="contraseña-new" class="txt"><strong>Confirmar Contraseña: </strong></label>
            <input type="password" name="c_contraseña-new" id="contraseña-new" class="txt"
            placeholder="Ingrese contraseña"><br><br>
                            
            <input type="checkbox" id="cbox2" value="checkbox"> <label for="cbox2" class="txt">Estoy de acuerdo con los
                <a href="" class="crear">Terminos y condiciones</a></label></div>
            <hr class="separador">
            <section class="row">
                <div class="col-sm"><a href=""><button class="icon-registrar" name="register" onclick="Registrar()"><strong>Crear cuenta</strong></button></a>
                </div>
                <div class="col-sm"></div>
            </section><br>
            
            </form>
            <div class="col-sm"><a href="../php/login.php"><button class="icon-atras"><i class="fas fa-arrow-circle-left"></i></button></a> </div>
            <?php
             include("register.php");
            ?>
    

        </div>
    </div><br>

</body>

</html>