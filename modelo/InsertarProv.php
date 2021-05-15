<?php 
   include_once("conexion.php");
   $sql = "INSERT INTO proveedores VALUES (default,'".$_POST["nombre"]."','".$_POST["rfc"]."','".$_POST["direccion"]."','".$_POST["telefono"]."')";  
   $result = mysqli_query($conexion, $sql);
      
   if($result!=null)
      header('location: ../agregarProv.php');
?>
