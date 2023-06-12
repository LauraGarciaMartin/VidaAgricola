<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <?php session_start(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <title>Cultivos</title>
        <link rel="stylesheet" href="css/productos.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <body class="productos">
        <a name="arriba"></a>
        <?php require_once("header.php"); ?>
        <div class="container">
            <div class="row">
                <h1 class="titulo display-2">SEMILLAS</h1>
            </div>
        </div>
        <div class="container">
            <?php require_once("config.php");
        $conn = new mysqli($host, $username, $password, $bbdd); ?>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql1 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='22'";
                    $res = mysqli_query($conn, $sql1);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta22" name="inserta22" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql2 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='23'";
                    $res = mysqli_query($conn, $sql2);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta23" name="inserta23" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql3 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='24'";
                    $res = mysqli_query($conn, $sql3);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta24" name="inserta24" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql4 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='25'";
                    $res = mysqli_query($conn, $sql4);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta25" name="inserta25" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql5 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='26'";
                    $res = mysqli_query($conn, $sql5);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta26" name="inserta26" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql6 = "SELECT * FROM productos WHERE categoria='Cultivo' AND id='27'";
                    $res = mysqli_query($conn, $sql6);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Cultivo/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
                        <div class="card-body">
                            <span class="card-text">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cultivos.php" method="post">
                                    <input type="submit" id="inserta27" name="inserta27" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                if (isset($_POST['inserta22'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='22'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta23'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='23'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta24'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='24'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta25'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='25'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta26'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='26'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta27'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='27'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $tipo = $row['tipo'];
                                $cat = $row['categoria'];
                                $marca = $row['marca'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                $imagen = $row['imagen'];
                                $query = "INSERT INTO carrito(Num_producto,Usuario,Articulo,Categoria,Marca,Nombre,Precio,Imagen)
                        VALUES('$id','$usu','$tipo','$cat','$marca','$nombre','$precio','$imagen')";
                                if (mysqli_query($conn, $query)) {
                                    echo "subida correcta";
                                } else {
                                    echo "error " . mysqli_error($conn);
                                }
                            }
                        }
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                ?>
                </div>
            </div>
        </div>
        <footer class="footer footer-19">
        <div class="container">
    <div class="row">
      <div class="col-md-12">
        <span class="copyright-text">Todos los derechos reservados</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <table class="table">
          <thead>
            <tr>
              <th class="titulo--footer">Numero Contacto</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text--footer">912834582</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table">
          <thead>
            <tr>
              <th class="titulo--footer">Correo Contacto</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text--footer">info@gmail.com</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table">
          <thead>
            <tr>
              <th class="titulo--footer">Donde estamos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text--footer">Avenida Madrid,1 28341,Valdemoro,Madrid</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    </footer>
    </body>

</html>
