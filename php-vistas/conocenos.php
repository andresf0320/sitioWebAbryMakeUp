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
    <div class="fondo" align ="center">
        <img src="../img/nombre.jpeg" class="nombre">
    </div>
</header>
<div class="navegador">
    <nav class="principal">
        <div class="menu">
            |<a class="tex" href="../php-vistas/index.php">INICIO</a> |
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

    <div class="container"><br>
        <section class="row"><br>
            <div class="col-sm-4 body izq">
                <h5 class="title">Misi??n</h5>
                <p class="txt desc" align="justify">Cosm??ticos Aybri Make Up es una empresa que comercializa marcas
                    l??deres o reconocidas, de manera que sus productos son altamente competitivos en calidad y precio,
                    adem??s de ofrecer un servicio que satisfaga las necesidades de los clientes, al igual que mantener
                    una comunicaci??n ??ptima para de esta forma generar confiabilidad con la realizan los pedidos.</p>

                <h5 class="title">Visi??n</h5>
                <p class="txt desc" align="justify">Ser l??deres y referencia en el mercado de productos de alta calidad
                    a precios accesibles, as?? como ser la empresa que mejor asista, entienda y satisfaga las necesidades
                    de sus clientes. Asimismo, ser reconocida por su responsabilidad, ??tica y transparencia en el manejo
                    de la empresa.</p>

            </div>
            <div class="col-sm-4 body izq">

                <h5 class="title">Objetivos corporativos</h5>
                <ul class="txt desc" allign="justify">
                    <li>Atraer clientes potenciales, mediante las publicaciones de los productos y el dise??o del sitio
                        web.</li>
                    <li>Establecer un control detallado de los productos en cuanto a su calidad y gesti??n de inventario.
                    </li>
                    <li>Implementar una mejor comunicaci??n, para que de esta forma mejore la satisfacci??n del cliente.
                    </li>
                    <li>Determinar los productos preferencia de los clientes.</li>
                    <li>Planear una estrategia s??lida para las ventas.</li>
                    <li>Categorizar por un alto desempe??o de ventas en el mercado</li>
                </ul>

            </div>
            <div class="col-sm-4 der">
                <img class="logo" src="../img/logo.jpeg">
                <h5 class="text-center title">??Quienes somos?</h5>
                <p class="txt desc" align="justify">Cosm??ticos Aybri Make Up, es una empresa dedicada a la venta y
                    distribuci??n de productos cosm??tica, a c??modos precios, asimismo que proporcionar una buena calidad
                    de estos, para poder alcanzar un nivel de competitividad muy alto, logrando satisfacer las
                    necesidades de nuestros clientes.</p>
            </div>
        </section>
    </div><br>

    <flooter>
        <div class="flooter">
            <section class="row contenido">
                <div class="col-sm" align="center">
                    <h3 class="Social">Informaci??n</h3>
                    <div>
                        <p class="info"><i class="fas fa-map-marker"></i> Calle 25 # 4-79 San Mateo | <i
                                class="fas fa-globe-americas"></i> C??cuta, Colombia </p>
                        <p class="info"><i class="fas fa-envelope info"></i> aybrimakeup@gmail.com | <i
                                class="fas fa-phone info"></i> +57 3229333001 </p>
                    </div>
                </div>

                <div class="col-sm" align="center">
                    <h3 class="Social">Redes Sociales</h3>
                    <a href="https://wa.link/wvqp2q" target="_blank"><button class="redes"><i
                                class="fab fa-whatsapp"></i></button></a>
                    <a href="https://instagram.com/aybrimakeup?utm_medium=copy_link" target="_blank"><button
                            class="redes"><i class="fab fa-instagram"></i></button></a>
                    <a href="mailto:aybrimakeup@gmail.com?subject=Solicitar asesor??a&body=Cordial saludo,solicito asesor??a referente a unos productos y/o guia de envio."
                        target="_blank"><button class="redes"><i class="far fa-envelope"></i></button></a>
                </div>
            </section>
        </div>
    </flooter>

</body>

</html>
</body>

</html>