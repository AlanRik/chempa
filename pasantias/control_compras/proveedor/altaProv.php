<?php
include ('conexion.php');

if(isset($_POST['Nombre'])){
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $cuit=$_POST['cuit'];
    $fecha_nac=$_POST['fecha_nac'];    
    $telefono=$_POST['telefono'];
}

$query=("INSERT INTO personas(nombre, apellido, fecha_nac)
    VALUES ('$nombre', '$apellido', '$fecha_nac');");
$consulta=mysqli_query($conexion,$query);
$ultimo_id=mysqli_insert_id($conexion);





$query2=("INSERT INTO proveedores(id_persona,cuit)
    VALUES ('$ultimo_id', '$cuit');");
$consulta=mysqli_query($conexion,$query2);
?>
