<?php
include ('conexion.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comandas</title>
    <link rel="stylesheet" href="../menu/estilo.css" type="text/css">
    <link rel="stylesheet" href="./style.css" type="text/css">


</head>

<body class="fondo">
    <div class="circulo">

    </div>
    <div class="tit-base">
        <div class="div-logo">
            <a href="inicioSesion.html"><input type="submit" value="Cerrar sesion" class="CerrarS"
                    style="position: fixed;"></a>

            <img src="../menu/imagenes/logo.png" width="100px" style="margin-top: -5px; margin-left: 45%;">
        </div>
        Chempanadas
    </div>
    <div class="opciones">
        <div>Nueva comanda</div>
    </div>

    <!-- boton volver -->
    <div class="volver">
        <a href="../menu/menu.html"><img src="../comandas/imagenes/flecha1.png" height="50px" width="50px"
                alt="Botón"></a>

    </div>

    <!-- FORMULARIO -->

    <section class="container">
        <div class="row">


            <br /><br />
            <form action="comanda.php" enctype="multipart/form-data" method="post">

                <!-- REGISTRO DE NOMBRE -->
                <div class="datos_personales">
                    <input type="text" style="text-transform:uppercase; width: 100%;" id="nombre" name="Nombre"
                        placeholder="Nombre " required />
                    <span id="mnombre"></span>
                    <br />


                    <!-- REGISTRO DE APELLIDO -->
                    <div>
                        <input type="text" style="text-transform:uppercase; width: 100%; " id="apellido" name="apellido"
                            placeholder="apellido " required />
                        <span id="mnombre"></span>
                        <br />
                    </div>


                    <!-- REGISTRO DE DIRECCION -->
                    <input type="text" style="text-transform:uppercase; width: 100%;" id="direccion"
                        placeholder="direccion " required />
                    <span id="mnombre"></span>
                    <br />


                    <!-- REGISTRO DE TELEFONO -->
                    <input type="number" style="text-transform:uppercase; width: 100%;" id="ntelefono" name="ntelefono"
                        placeholder="numero de telefono" required />
                    <span id="mstock"></span>
                    <br />
                </div>

                <div class="containe">
                    <label for="producto" style="margin-right: 5%;">Producto </label>

                    <select name="producto" id="lang">
                        <option value="empanada">EM.carne</option>
                        <option value="empanada">Em.jamon y queso</option>

                    </select>
                    <br /><br />

                    <label for="cantidad" style="margin-left: 18%; margin-right: -5%;">Cantidad</label>
                    <input type="number" min="1" onkeypress="return event.charCode>=1 && event.charCode<=100"
                        id="cantidad" name="cantidad" placeholder="solo numeros" required />
                    <span id="mtelefono"></span>
                    <br /><br />

                </div>
                <br>

                <div class="containe">
                    <label for="precio" style="margin-right: 5%; text-align: center; height: 100%;">Modo de pago</label>
                    <select name="metodo_pago">

                        <?php
                        $query2 = ("SELECT * FROM metodo_de_pago");

                        $consulta2 = mysqli_query($conexion, $query2);



                        while ($obj = mysqli_fetch_object($consulta2)) { ?>



                            <option value="<?php echo $obj->id_metodo_pago ?>"><?php echo $obj->descripcion; ?>
                            </option>

                        <?php } ?>
                    </select>

                    <br /><br />

                    <label for="precio" style="margin-left: 23%; margin-right: -15%;">Forma de entrega</label>
                    <select name="modo_pago" id="lang" style="margin-left: 23%; ">
                        <option value="efectivo">Envio a domicilio</option>
                        <option value="mercado_pago">Retiro del local</option>

                    </select>
                    <br /><br />
                </div>
                <br>
                <br>
                <div class="precio">
                    <br>
                    <label for="precio">Precio</label>
                    <input style="margin-left: 50%;" type="number" min="1"
                        onkeypress="return event.charCode>=1 && event.charCode<=100" id="precio" name="precio"
                        placeholder="solo numeros" required />
                    <span id="mstock"></span>
                    <br /><br />

                </div>

        </div>
    </section>

    <br>
    <br>
    <button class="button" name="submit">Agregar</button>
    </form>


    <script type="text/javascript" src="../productos.js"></script>
</body>

</html>