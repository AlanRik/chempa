<?php
include ('conexion.php');

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];

$insertar1="INSERT INTO `persona`(`nombre`, apellido) VALUES ('$nombre','$apellido')";
$insertar1="INSERT INTO `persona`(`nombre`, apellido) VALUES ('$nombre','$apellido')";


$resultado=mysqli_query($conexion,$insertar1);

header("Location: menuusuario.html ");




?>