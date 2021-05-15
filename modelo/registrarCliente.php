<?php 
   include_once("conexion.php");

   if($_POST["telefono"] == "")
      $sql = "INSERT INTO clientes VALUES (default,'".$_POST["nombre_cliente"]."','".$_POST["usuario"]."','".$_POST["correo"]."','".$_POST["password"]."', default)";
   else 
      $sql = "INSERT INTO clientes VALUES (default,'".$_POST["nombre_cliente"]."','".$_POST["usuario"]."','".$_POST["correo"]."','".$_POST["password"]."','".$_POST["telefono"]."')";

   $result = mysqli_query($conexion, $sql);

   if($_POST["direccion"] != ""){
      $sql = "SELECT * FROM clientes WHERE nombre_cliente = '".$_POST["nombre_cliente"]."'";
      $result = mysqli_query($conexion, $sql);
      $cliente = $result->fetch_array();

      $sql = "INSERT INTO direcciones VALUES (default, '".$cliente['id_cliente']."','".$_POST["direccion"]."')";
      $result = mysqli_query($conexion, $sql);
   }
      
   if($result!=null)
      header('location: ../crearCuenta.php');
?>