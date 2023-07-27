<?php 
include ("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carga_proveedor</title>
    <link rel="stylesheet" href="../../menu/estilo.css" type="text/css">
    <link rel="stylesheet" href="./proveedor_style.css" type="text/css">


</head>
<body class="fondo">
    <div class="circulo">
        
    </div>
        <div class="tit-base">
            <div class="div-logo">
                <a href="inicioSesion.html"><input type="submit" value="Cerrar sesion" class="CerrarS" style="position: fixed;"></a>
    
                <img src="../imagenes/logo.png" width="100px" style="margin-top: -5px; margin-left: 45%;">
            </div>
            Chempanadas
    </div>
    <div class="opciones">
        <div>Cargar nuevo proveedor</div>
    </div>

    <!-- boton volver -->
    <div class="volver">
        <a href="../../control_compras/menu_compra.html"><img src="../../comandas/imagenes/flecha1.png"
            height="50px" width="50px" 
            alt="Botón"></a>

    </div>

    <!-- FORMULARIO -->

    <section class="container">
		<div class="row">

            <br/><br/>
            <form action="altaProv.php" method="post">
            
            <!-- NOMBRE -->
            
            <div class="datos_personales" >
                <input type="text" style="text-transform:uppercase; width: 100%;" id="nombre" name="Nombre" placeholder="Nombre " required/>
                <span id="mnombre"></span>
                <br/>
                
                <!-- APELLIDO -->
                <div>
                    <input type="text" 
                    style="text-transform:uppercase; width: 100%; " id="apellido" name="apellido" placeholder="apellido " required/>
                    <span id="mnombre"></span>
                    <br/>
                </div>
                
                

                <!-- CUIT -->
                <input type="number" style="text-transform:uppercase; width: 100%;" id="cuit" name="cuit" placeholder="cuit" required/> 
                <span id="mstock"></span>
                <br/>
            </div>

                <!-- FECHA NACIMIENTO -->
                <label for="fechanac">Fecha de nacimiento</label>
                <input type="date" style="text-transform:lowercase;" id="fechanac" name="fecha_nac"  /> 
                <span id="fechanac"></span>
                <br/><br/>

                <!-- TELEFONO -->
                <label for="telefono">Telefono</label>
                <input type="number" id="telefono" name="telefono" onkeypress="return event.charCode>=1 && event.charCode<=100" placeholder="solo numeros" min="1000000000" max="9999999999" />
                <span id="mtelefono"></span>
                <br/><br/>

                <label for="contacto" style="margin-right: 5%;">Tipo contacto </label>
               
                <select name="tipo_contacto">

                    <?php
                    $query2 = ("SELECT * FROM tipo_contactos");

                    $consulta2 = mysqli_query($conexion, $query2);



                    while ($obj = mysqli_fetch_object($consulta2)) { ?>



                        <option value="<?php echo $obj->id_tipo_contacto ?>"><?php echo $obj->descripcion; ?>
                        </option>

                    <?php } ?>
                </select>
            <br/><br/>

                <label for="tipo_proveedor" style="margin-right: 5%;">Tipo proveedor</label>
               
                <select name="tipo_proveedor">

                    <?php
                    $query2 = ("SELECT * FROM tipos_de_proveedores");

                    $consulta2 = mysqli_query($conexion, $query2);



                    while ($obj = mysqli_fetch_object($consulta2)) { ?>



                        <option value="<?php echo $obj->id_tipo_proveedor ?>"><?php echo $obj->descripcion; ?>
                        </option>

                    <?php } ?>
                </select>
                <br/><br/>
            </div>
            <button class="button" type="submit" >Agregar</button>
        </form>
        </section>
    


</body>
</html>