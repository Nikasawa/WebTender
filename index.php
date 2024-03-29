<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Valentin Polly">

    <link rel="shortcut icon" href="img/icono.png" type="img/icono.png">
    <link rel="stylesheet" href="css/index.css">
    
    <title>Web tender</title>
</head>
<body>

    <footer>
        <nav>

        <!--Contacto, informacion de cuenta-->

            <ul>
                <li class="activo"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Usuario</a></li>
                <li class="redes"><a href="#"></a><img width="150px" height="75px" class="icon" src="img/4552607_facebook_logo_icon.png" alt=""></li>
                <li class="redes"><a href="#"></a><img width="75px" height="75px" class="icon" src="img/777927_instagram_photo_photography_pictures_share_icon.png" alt=""></li>
                <li class="redes"><a href="#"></a><img width="75px" height="75px" class="icon" src="img/1860492_whatsapp_social media_icon.png" alt=""></li>
            </ul>
        </nav>

        <div class="titulos">
            <h1 class="primero"><strong class="strong">Web</strong>Tender</h1>
            <h1 class="segundo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, adipisci voluptatem omnis alias quas vero rerum tempore doloribus doloremque debitis! Id harum incidunt illum, cumque qui praesentium dignissimos beatae laudantium!</h1>
        </div>


        <div class="descripciones">
            <!--Descripcion de la pag-->
            <div class="uso">
                <p class="explicacion"><strong>En el marco izquierdo, usted puede seleccionar los ingredientes que le gustarian tomar. En el <strong>lado derecho</strong> apareceran los tragos que se pueden realizar con esos ingredientes.</strong></p>
            </div>
        </div>
    </footer>

    <div class="divisor">

        <!--dividir en dos partes las secciones de resultado-->

        <!--Productos disponibles-->

            <!-- Cuadro para poner las imagenes -->

            <div class="cuadro">

                <div class="busqueda">
                    <input type="search" class="ingreso" id="insumo" name="producto" placeholder    ="Buscar producto...">
                </div>

                <!--Img productos-->

                <div class="productos">

                    <div class="bebida" id="tomar">
                        <img src="img/baggio_de_naranja.png" alt="baggio de naranja" class="imagen">
                        <p class="nombre">Baggio</p>
                    </div>

                    <div class="bebida" id="tomar">
                        <img src="img/coca.jpg" alt="coca" class="imagen">
                        <p class="nombre">Coca</p>
                    </div>

                    <div class="bebida" id="tomar">
                        <img src="img/sprite.jpg" alt="sprite" class="imagen">
                        <p class="nombre">sprite</p>
                    </div>

                </div>
            </div>

        <div class="bar">

            <!--Productos disponibles-->
            
            <div class="busqueda" id="searchRight">
                <input type="search" class="ingreso" id="trago"
                name="alcohol" placeholder="Buscar trago...">
            </div>
            <div class="cuadro">
                <div class="bebida">
                    <img src="img/vokda.jpg" alt="vodka" id="vodka" class="imagen">
                    <p class="nombre">vodka</p>
                </div>
            </div>
        </div>
        
    </div>

    <div class="seleccion">

        <div class="indicativo"><p>Seleccionado:</p></div>

        <div class="lista">
            <div class="probar"></div>
        </div>

    </div>

    <!-- scripts -->
    
    <script src="js/IngredientesSeleccionados.js"></script>
    <script src="js/searchinput.js"></script>
    
</body>
</html>