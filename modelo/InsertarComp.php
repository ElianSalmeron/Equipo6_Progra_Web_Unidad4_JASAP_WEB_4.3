<?php 
   include_once("conexion.php");
   $sql = "INSERT INTO componentes VALUES (default,'".$_POST["nombre"]."','".$_POST["categoria"]."','".$_POST["existencias"]."','".$_POST["precio"]."','".$_POST["descripcion"]."')";
   $result = mysqli_query($conexion, $sql);
      
   if($result!=null)
      header('location: ../agregarComp.php');
?>