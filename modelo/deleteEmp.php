<?php  
        include_once("conexion.php");

        if(isset($_GET['Buscar'])){
            $busqueda = $_GET['busc'];  
             
            $sql="SELECT * from empleados where id_empleado like '%$busqueda'";
            $result=mysqli_query($conexion,$sql);
        
                if($mostrar=mysqli_fetch_array($result)){   
?>
                    <tr>
                        <td><?php echo $mostrar['id_empleado']?></td>
                        <td><?php echo $mostrar['nombre_emp']?></td>
                        <td><?php echo $mostrar['rol']?></td>
                        <td><?php echo $mostrar['telefono']?></td>
                        <td><?php echo $mostrar['rfc']?></td>
                        <td><?php echo $mostrar['correo_electronico']?></td>
                    </tr>
                <?php    
            }
    }
                
    if(isset($_GET['Eliminar'])){
         $busqueda = $_GET['busc'];  
        $sql = "delete from empleados where id_empleado like '%$busqueda'";
        $result =mysqli_query($conexion, $sql);
        if($result!=null)
   	       print("Empleado eliminado con exito ");   
        
        else
  	        print("No se pudo eliminar");   
    }        
?>