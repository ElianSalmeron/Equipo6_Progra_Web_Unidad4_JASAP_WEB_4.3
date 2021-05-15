<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="JASAP WEB">
        <meta name="author" content="Elian Salmerón, Eliel Pérez, Israel Serrano">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
        <link href="CSS/estilos.css?5.0" type="text/css" rel="stylesheet">
        <link href="CSS/fontello.css?5.0" rel="stylesheet">
        <link href="CSS/pedidos.css?8.0" type="text/css" rel="stylesheet">
        <title>Consultar Pedidos</title>
    </head>

    <body>

        <header>
            <?php include_once("header.html"); ?>
        </header>

        <nav>
            <?php include_once("menu.php") ?>
        </nav>

        <div class="form-con-div">
            <h1><span>Consulta de Pedidos</span></h1>
            <div class="iconos">        
                <section id="selected">
                    <a href="consultarPed.php"><img src="Img/Iconos/consultar.png"></a>
                    <h3>Consultar</h3>
                </section>
                <section>
                    <a href="agregarPed.php"><img src="Img/Iconos/agregar.png"></a> 
                    <h3>Agregar</h3>
                </section>
            </div>

            <form method="post">
                <div class="buscarcom">
                    <label>Id del pedido: </label>
                        <input type="text" id="buscarcom" name="id" placeholder="">
                        <input type="submit" id="boton" name="consultar-ped" value="Buscar">
                </div>
            </form>

                <hr>

            <?php include_once("modelo/mostrarPed.php"); ?>
        </div>
        <footer>
            <?php include_once("footer.html") ?>
        </footer>
    </body>
</html>