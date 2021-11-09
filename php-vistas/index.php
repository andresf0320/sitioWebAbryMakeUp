
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
            <a class="tex" href="../php-vistas/conocenos.php">CONÓCENOS</a> |
            <a class="tex" href="../php-vistas/productos.php">PRODUCTOS</a> |
            <a class="tex" href="../php-vistas/contactenos.php">CONTÁCTENOS</a> |
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
            <h4 class="conct">Iniciar Sesión</h4>
                <label for="usuario" class="txt"><strong>Usuario: </strong></label>
                <input type="text" name="usuario" id="usuario" class="txt" placeholder="Ingrese usuario"><br><br>
                <label for="contraseña" class="txt"><strong> Contraseña: </strong></label>
                <input type="password" name="contraseña" id="contraseña" class="txt" placeholder="Ingrese contraseña"><br><br>
                <a href=""><button class="icon-ingresar"><i class="fas fa-sign-in-alt"></i></button></a><br>
                <a href="../Sitio web AybriMakeUp/php/crear_cuenta.php" class="crear txt">Crear cuenta</a>
        </div>
    </div>
</div>
-->

<body class="body"><br>
  
    <div class="container">
        <section class="row"><br>
            <div class="col-sm-6"><br><br>
                <h4 class="conct" align="center">Bienvenido(a)</h4>
                <h6 class="text2" allign="center">¡Qué agrado tenerte con nosotros!</h6><br>
                <p class="txt" allign="text-justify">Gracias por visitarnos, aqui encontrarás una experiencia completa
                    apoyada de la asesoria de los expertos en maquillaje y estética.</p>
                <a href="productos.php"><button class="btn_buy"><i class="fas fa-shopping-cart"></i> Comprar
                        Ahora</button></a>
            </div>
            <div class="col-sm-6">
                <div class="carrusel" align="center">
                    <ul class="carrusel-fotos">
                        <li id=foto1><img src="../img/cartagena.jpg"></li>
                        <li id=foto2><img src="../img/Iluminador.jpg"></li>
                        <li id=foto3><img src="../img/Cairo.png"></li>
                        <li id=foto4><img src="../img/Eye.jpg"></li>
                        <li id=foto5><img src="../img/huda.jpg"></li>
                        <li id=foto6><img src="../img/Engol_2.jpg"></li>
                        <li id=foto7><img src="../img/minerizado.jpg"></li>
                        <li id=foto8><img src="../img/Paleta_1.jpg"></li>
                    </ul>
                    <ul class="carrusel-menu">
                        <li><a href="#foto1"><img src="../img/cartagena.jpg"></a></li>
                        <li><a href="#foto2"><img src="../img/Iluminador.jpg"></a></li>
                        <li><a href="#foto3"><img src="../img/Cairo.png"></a></li>
                        <li><a href="#foto4"><img src="../img/Eye.jpg"></a></li>
                        <li><a href="#foto5"><img src="../img/huda.jpg"></a></li>
                        <li><a href="#foto6"><img src="../img/Engol_2.jpg"></a></li>
                        <li><a href="#foto7"><img src="../img/minerizado.jpg"></a></li>
                        <li><a href="#foto8"><img src="../img/Paleta_1.jpg"></a></li>
                    </ul>
                </div><br>
            </div>
        </section>
    </div> <br>

    <flooter>
        <div class="flooter">
            <section class="row contenido">
                <div class="col-sm" align="center">
                    <h3 class="Social">Información</h3>
                    <div>
                        <p class="info"><i class="fas fa-map-marker"></i> Calle 25 # 4-79 San Mateo | <i
                                class="fas fa-globe-americas"></i> Cúcuta, Colombia </p>
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
                    <a href="mailto:aybrimakeup@gmail.com?subject=Solicitar asesoría&body=Cordial saludo,solicito asesoría referente a unos productos y/o guia de envio."
                        target="_blank"><button class="redes"><i class="far fa-envelope"></i></button></a>              
                
                    </div>
            </section>
        </div>
    </flooter>
 
</body>

</html>