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
<body class="body">
 
    <!-- PRODUCTOS-->
    <div class="container"><br>
        <section class="row">
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Eye Shadow</h5>
                <p class="p"><strong>Marca:</strong> Miss Rose</p>
                <p class="p">Paleta de sombras de 9 tonos</p>
                <img class="image" id="img" src="../img/Eye.jpg"><br>
                <span class="precio" id="precio"><strong>$10.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Cartagena</h5>
                <p class="p"><strong>Marca:</strong> Miss Cosmetics</p>
                <p class="p">Paleta de sombras de 30 tonos</p>
                <img class="image" id="img" src="../img/cartagena.jpg">
                <span class="precio" id="precio"><strong>$30.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Glow Kit</h5>
                <p class="p"><strong>Marca:</strong> Miss Cosmetics</p>
                <p class="p">Paleta de iluminadores de 4 tonos</p>
                <img class="image" id="img" src="../img/Iluminador.jpg"><br>
                <span class="precio" id="precio"><strong>$20.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Minerizado</h5>
                <p class="p"><strong>Marca:</strong> Miss Cosmetics</p>
                <p class="p">Paleta de rubor de 5 tonos</p>
                <img class="image" id="img" src="../img/minerizado.jpg"><br>
                <span class="precio" id="precio"><strong>$25.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
        </section><br>
        <section class="row">
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Nude</h5>
                <p class="p"><strong>Marca:</strong> Huda Beauty</p>
                <p class="p">Paleta de sombras de 18 tonos</p>
                <img class="image" id="img" src="../img/Paleta_1.jpg"><br>
                <span class="precio" id="precio"><strong>$10.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Cairo</h5>
                <p class="p"><strong>Marca:</strong> Miss Cosmetics</p>
                <p class="p">Paleta de sombras de 30 tonos</p>
                <img class="image" id="img" src="../img/Cairo.png"><br>
                <span class="precio" id="precio"><strong>$28.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Majectis Colombia</h5>
                <p class="p"><strong>Marca:</strong> Engol Collections</p>
                <p class="p">Paleta de sombras de 42 tonos</p>
                <img class="image" id="img" src="../img/Engol_2.jpg">
                <span class="precio" id="precio"><strong>$40.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
            <div class="product col-sm">
                <h5 class="text-center ref">Paleta Obsesions</h5>
                <p class="p"><strong>Marca:</strong> Miss Rose</p>
                <p class="p">Paleta de sombras de 9 tonos</p>
                <img class="image" id="img" src="../img/huda.jpg"><br>
                <span class="precio" id="precio"><strong>$10.000</strong></span><button class="btn_buy"><i
                        class="fas fa-shopping-cart"></i> Comprar</button>
            </div>
        </section> <br>
    </div>
        <!-- CARRITO DE COMPRAS-->
        <section class="shopping-cart">
        <div class="container">
            <h1 class="text-center conct">Carrito de compras</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <div class="shopping-cart-header">
                        <h6 class="text2">Producto</h6>
                    </div>
                </div>
                <div class="col-2">
                    <div class="shopping-cart-header">
                        <h6 class="text-truncate text2">Precio</h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="shopping-cart-header">
                        <h6 class="text2">Cantidad</h6>
                    </div>
                </div>
            </div>

            <!-- ? PRODUCTOS DEL CARRITO  -->
            <div class="shopping-cart-items shoppingCartItemsContainer">
            </div>

            <!--  TOTAL -->
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-total d-flex align-items-center">
                        <p class="mb-0 text2">Total : </p>
                        <p class="ml-4 mb-0 shoppingCartTotal"> 0 $</p>
                        <div class="toast ml-auto bg-info" role="alert" aria-live="assertive" aria-atomic="true"
                            data-delay="2000">
                            <div class="toast-header">
                                <span>✅</span>
                                <strong class="mr-auto ml-1 text-secondary">Elemento en el carrito</strong>
                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="toast-body text-white">
                                Se aumentó correctamente la cantidad
                            </div>
                        </div><br>
                        <button class="btn btn-success ml-auto comprarButton" type="button" data-toggle="modal"
                            data-target="#comprarModal">Comprar</button>
                    </div>
                </div>
            </div>

            <!-- MODAL COMPRA BOSTRAP-->
            <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text2" id="comprarModalLabel">Detalles de compra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p class="txt">Opciones de pago:</p>
                            <ul>
                                <li class="txt"><strong>Nequi o Daviplata:</strong> 3229333001</li>
                                <li class="txt"><strong>Efecty</strong></li>
                                <li class="txt"><strong>Bancolombia</strong></li>
                            </ul>
                            <hr>
                            <p class="txt"><a href="contactenos.php" class="crear" align="center">Solicitar información necesaria con los asesores</a>, y una vez realizado el pago, enviar comprobante para realizar envio de su pedido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FLOOTER-->
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
    <script src="../js/carrito.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
    
</body>

</html>
</html>