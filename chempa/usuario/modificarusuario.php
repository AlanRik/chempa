<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="fondo">
<div class="circulo">
    
</div>
    <div class="tit-base">
        <div class="div-logo">
            <a href="inicioSesion.html"><input type="submit" value="Cerrar sesion" class="CerrarS" style="position: fixed;"></a>

            <img src="logo.png" width="100px" style="margin-top: -5px;">
        </div>
        Chempanadas
    </div>
    <div class="opciones">
<div>Seccion Usuario</div>
    </div>
     <style>
    section {
      padding: 62px 0;
      overflow: hidden;

    }
    #footer .creditos {
      float: right;
      font-size: 13px;
    }
    #footer .creditos a {
      transition: 0.3s;
    }
    
    .contact .php-email-form {
      width: 100%;
      border-top: 3px solid #000000;
      border-right: 3px solid #000000;
      border-left: 3px solid #000000;
      border-bottom: 3px solid #000000;
      padding: 30px;
      background: #fff;
      box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
      border-radius: 8px;
    }
    
    .form-group {
      padding-bottom: 8px;
      margin-bottom: 20px;
    }
    .contact button[type=submit] {
      background: #e9d900;
      border: 0;
      padding: 7px 24px;
      color: #000000;
      transition: 0.4s;
      border-radius: 10px;
      cursor: pointer;
    }
      </style>
    </head>
    <body>
    
      <header id="encabezado" class="fixed-top ">
      </header>
      <center>
        <section id="container" class="d-flex align-items-center">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up" style="align-items:center ;">
                  
    
                          </div>
                            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                              <form method="post" action=""  class="php-email-form">
                                <div class="row">
                                  <label for="name">Seleccione el usuario</label>
                                  <?php
                                  include 'conexion.php';
                                  if ($conexion->connect_error) {
                                      die("Error de conexión: " . $conexion->connect_error);
                                  }

                                  // Consulta para obtener los datos de las dos tablas
                                  $consulta = "SELECT u.id_empleado, c.nombre FROM empleados u
                                              JOIN personas c ON u.id_persona = c.id_persona";

                                  // Ejecutar la consulta
                                  $resultado = $conexion->query($consulta);

                                  // Crear la lista desplegable con los datos obtenidos
                                  echo '<select name="mi_lista">';

                                  while ($fila = $resultado->fetch_assoc()) {
                                      echo '<option value="' . $fila['id_empleado'] . '">' . $fila['nombre'] . '</option>';
                                  }

                                  echo '</select>';

                                  // Cerrar la conexión
                                  $conexion->close();
                                  ?>
                                  <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="txtusuario" class="form-control" style="width:255px;" id="Nombre" required>
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label for="name">Contraseña</label>
                                  <input type="password" class="form-control" name="txtpassword" id="passwordrequired">
                                </div>
                          </form>

                          <div class="text-center"><button type="submit">Modificar usuario</button></div>
                        </div>
                </div>
            </section>
        </section>
    </center>
</body>
</html>