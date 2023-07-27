<?php
include ('conexion.php');

if(isset($_POST['Nombre'])){
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['apellido'];
    $cuit=$_POST['cuit'];
    $fecha_nac=$_POST['fecha_nac'];    
    $telefono=$_POST['telefono'];
    $tipo_contacto=$_POST['tipo_contacto'];
    $tipo_proveedor=$_POST['tipo_proveedor'];
}

// PERSONAS
$query=("INSERT INTO personas(nombre, apellido, fecha_nac)
    VALUES ('$nombre', '$apellido', '$fecha_nac');");
$consulta=mysqli_query($conexion,$query);
$ultimo_id=mysqli_insert_id($conexion);


// CONTACTOS
$query3 = ("INSERT INTO contactos(id_persona,id_tipo_contacto, valor)
    VALUES ('$ultimo_id',$tipo_contacto, $telefono)");
$consulta=mysqli_query($conexion,$query3);
$ultimo_id2=mysqli_insert_id($conexion);


// PROVEEDORES
$query2=("INSERT INTO proveedores(id_persona,cuit, id_contacto, id_tipo_proveedor)
    VALUES ('$ultimo_id', '$cuit', '$ultimo_id2', $tipo_proveedor);");
$consulta=mysqli_query($conexion,$query2);

header("cargar_proveedor.php");

?>
