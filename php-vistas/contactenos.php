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
    <link rel="stylesheet" href="../css/normalizacion.css">
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
            | <a class="tex" href="../php-vistas/index.php">INICIO</a> |
            <a class="tex" href="../php-vistas/conocenos.php">CON??CENOS</a> |
            <a class="tex" href="../php-vistas/productos.php">PRODUCTOS</a> |
            <a class="tex" href="../php-vistas/contactenos.php">CONT??CTENOS</a> |
        </div>
        <div class="derecha">
        <a href="../php/salir.php">  <button class="icon btn-usuario"onclick="document.getElementById('modal').style.display='block'" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
         <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
         </svg></button></a>
        <a href="../php/salir.php">  <button class="icon btn-usuario"onclick="document.getElementById('modal').style.display='block'" ><i class="fas fa-user-circle"></i></button></a>
     </div>
  </nav>
</div>
</div>
<!--
<div class="modal" id="modal" tabindex="-1">
    <div class="contenedor" align="center">
        <div class="barra-cerrar">
            <button id="close" class="closes" onclick="cerrar()"><i class="far fa-times-circle"></i></button>
        </div>
            <h4 class="conct">Iniciar Sesi??n</h4>
                <label for="usuario" class="txt"><strong>Usuario: </strong></label>
                <input type="text" name="usuario" id="usuario" class="txt" placeholder="Ingrese usuario"><br><br>
                <label for="contrase??a" class="txt"><strong> Contrase??a: </strong></label>
                <input type="password" name="contrase??a" id="contrase??a" class="txt" placeholder="Ingrese contrase??a"><br><br>
                <a href=""><button class="icon-ingresar"><i class="fas fa-sign-in-alt"></i></button></a><br>
                <a href="../Sitio web AybriMakeUp/php/crear_cuenta.php" class="crear txt">Crear cuenta</a>
        </div>
    </div>
</div>
-->


<body class="body">
    <div class="container"><br><br>
        <section class="row">
            <div class="producto col-sm" align="center"><br>
                <h5 class="conct">Ubicaci??n</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.0354282056265!2d-72.486484170848!3d7.880237728085887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645a5932759b5%3A0xfa1c49a435338ba8!2sCl.%2025%20%23479%2C%20C%C3%BAcuta%2C%20Norte%20de%20Santander!5e0!3m2!1ses!2sco!4v1622517348953!5m2!1ses!2sco"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <br><br>
            </div>
            <div class="producto col-sm" align="center"><br>
                <h3 class="conct">Redes Sociales</h3>
                <p class="txt des" allign="justify">
                    Las siguientes redes sociales las hemos habilitado para brindar asesoria en los productos y en las
                    guias de env??os. Utiliza la que sea de tu comodidad.
                </p>
                <p class="txt des" allign="justify"><strong>Nota:</strong> Se especifico con lo que deseas saber, anexar
                    fotograf??a del producto.
                </p>
                <a href="https://wa.link/wvqp2q" target="_blank"><button class="redes2"><i
                            class="fab fa-whatsapp"></i></button></a>
                <a href="https://instagram.com/aybrimakeup?utm_medium=copy_link" target="_blank"><button
                        class="redes2"><i class="fab fa-instagram"></i></button></a>
                <a href="mailto:aybrimakeup@gmail.com?subject=Solicitar asesor??a&body=Cordial saludo,solicito asesor??a referente a unos productos y/o guia de envio."
                    target="_blank"><button class="redes2"><i class="far fa-envelope"></i></button></a>
            </div>
        </section>
    </div><br>

</body>

</html>