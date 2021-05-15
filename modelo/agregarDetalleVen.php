<?php 
        include_once("conexion.php");
        
        if(isset($_POST['agregar'])){
            $id_comp = $_POST['busc'];  
                
            $sql = "SELECT * FROM componentes WHERE id_componente = '".$id_comp."'";
            $result = mysqli_query($conexion,$sql);
            $numRegistros = $result->num_rows;

            if($numRegistros > 0){
        
                if($componente = mysqli_fetch_array($result)){ 
                
                    $_SESSION["venta"][] = array($componente['nombre'], $_POST['cantidad'], $componente['precio'], $_POST['cantidad'] * $componente['precio'], $id_comp, $componente['existencias']);
                    $_SESSION["monto_total"] += $_POST['cantidad'] * $componente['precio'];
                    
                    for($i=0; $i<count($_SESSION["venta"]); $i++){
                    ?>
                        <tr>
                            <td><?php echo $_SESSION["venta"][$i][0]; ?></td>
                            <td><?php echo $_SESSION["venta"][$i][1]; ?></td>
                            <td>$<?php echo $_SESSION["venta"][$i][2]; ?></td>
                            <td>$<?php echo $_SESSION["venta"][$i][3]; ?></td>
                        </tr>
                    <?php 
                    }
                }

            }
        } 
?>