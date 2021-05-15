<?php 
   include_once("conexion.php");
   $sql = "INSERT INTO empleados VALUES (default,'".$_POST["nombre"]."','".$_POST["direccion"]."','".$_POST["telefono"]."','".$_POST["rfc"]."','".$_POST["correo"]."','".$_POST["usuario"]."','".$_POST["contrasena"]."','".$_POST["categoria"]."')";
   $result = mysqli_query($conexion, $sql);
      
   if($result!=null)
      header('location: ../agregarEmp.php');
?>
