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
        <link href="CSS/pedidos.css?5.0" type="text/css" rel="stylesheet">
        <title>Registro Pedidos</title>
    </head>

    <body>

        <header>
            <?php include_once("header.html"); ?>
        </header>

        <nav>
            <?php include_once("menu.php") ?>
        </nav>

        <div class="form-con-div">
            <h1><span>Registro de Pedidos</span></h1>
            <div class="iconos">        
                <section>
                    <a href="consultarPed.php"><img src="Img/Iconos/consultar.png"></a>
                    <h3>Consultar</h3>
                </section>
                <section id="selected">
                    <a href="agregarPed.php"><img src="Img/Iconos/agregar.png"></a> 
                    <h3>Agregar</h3>
                </section>
            </div>

            <form method="post" action="modelo/InsertarPed.php" id="form-prov">
                <div class="general">
                    <label>Proveedor: </label>
                    <select class="cat" name="proveedor">
                        <?php 
                            include_once("modelo/conexion.php");
                            $sql = "SELECT * FROM proveedores";
                            $result = mysqli_query($conexion, $sql);

                            while($proveedor = $result->fetch_array()){
                        ?>
                        <option> <?php echo $proveedor['nombre'];  ?> </option>
                        <?php }?>
                    </select>
                </div>
            </form>

            <form method="post">
                <div class="buscarcom">
                    <label>Buscar componente: </label>
                    <input type="text" id="buscarcom" name="busc" placeholder="">
                </div>

                <div class="cantidad">
                    <label>Cantidad: </label>
                    <input type="text" id="cantidad" name="cantidad" required>
                    <input type="submit" id="boton" name="agregar" value="Agregar">
                </div>
            </form>

            <div class="mostrar">
                <table>
                    <tr class="cabt">
                        <td><strong> Componente</strong></td>
                        <td><strong> Cantidad</strong></td>
                        <td><strong> Precio unitario</strong></td>
                        <td><strong> Precio total</strong></td>
                    </tr>
                    
                    <?php include_once("modelo/agregarDetallePed.php"); ?>

                </table>
            </div>

            <div class="totales">
                <label for="total">Total: </label>
                <input type="text" name="total" value=$<?php echo $_SESSION["monto_total_ped"]; ?> disabled>
            </div>

            <div class="botones">
                <input type="submit" id="boton" name="confirmar" value="Confirmar" form="form-prov">
                <input type="button" id="boton" name="cancelar" value="Cancelar" onclick="location.href='cancelarPed.php'">
            </div>
        </div>

        <footer>
            <?php include_once("footer.html") ?>
        </footer>
    </body>
</html>