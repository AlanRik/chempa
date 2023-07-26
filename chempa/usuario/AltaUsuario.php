<?php

require ("conexion.php");

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$insertar1="INSERT INTO `ususarios`(`nombre`, contraseña) VALUES ('$usuario','$contraseña')";
$resultado=mysqli_query($conexion,$insertar1);

header("Location: menuusuario.html ");


?>
