<?php
require 'conexion.php';
$id=$_POST['id_empleado'];
$cambiar= "DELETE FROM `empleados` WHERE `empleados`.`documento` ='$DNI'";
$query = pg_query($conexion,$cambiar);
?>