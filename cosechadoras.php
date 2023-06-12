<!DOCTYPE html>
<html lang="en">

    <head>
        <?php session_start();?>
        <meta charset="UTF-8">
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
        <title>Cosechadoras</title>

        <link rel="stylesheet" href="css/productos.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <body class="productos">
    <?php
    require_once("header.php");
    ?>
        <a name="arriba"></a>
        
        <div class="container">
            <div class="row">
                <h1 class="titulo display-2">COSECHADORAS</h1>
            </div>
        </div>
        <div class="container">
            <?php
        require_once("config.php");
        $conn = new mysqli($host, $username, $password, $bbdd);
        ?>
            <div class="row">
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql8 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='8'";
                        $res = mysqli_query($conn, $sql8);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta8" name="inserta8" class="btnproducto"
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
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql9 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='9'";
                        $res = mysqli_query($conn, $sql9);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta9" name="inserta9" class="btnproducto"
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
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql10 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='10'";
                        $res = mysqli_query($conn, $sql10);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta10" name="inserta10" class="btnproducto"
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
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql11 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='11'";
                        $res = mysqli_query($conn, $sql11);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta11" name="inserta11" class="btnproducto"
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
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql36 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='36'";
                        $res = mysqli_query($conn, $sql36);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta36" name="inserta36" class="btnproducto"
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
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="card">
                        <?php
                        $sql37 = "SELECT * FROM productos WHERE tipo='Cosechadora' AND id='37'";
                        $res = mysqli_query($conn, $sql37);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='img-grande card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="cosechadoras.php" method="post">
                                    <input type="submit" id="inserta37" name="inserta37" class="btnproducto"
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
            <?php
                        if (isset($_POST['inserta8'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='8'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $tipo = $row['tipo'];
                                    $marca = $row['marca'];
                                    $cat = $row['categoria'];
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
                        if (isset($_POST['inserta9'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='9'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $tipo = $row['tipo'];
                                    $marca = $row['marca'];
                                    $cat = $row['categoria'];
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
                        if (isset($_POST['inserta10'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='10'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $tipo = $row['tipo'];
                                    $marca = $row['marca'];
                                    $cat = $row['categoria'];
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
                        if (isset($_POST['inserta11'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='11'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $tipo = $row['tipo'];
                                    $marca = $row['marca'];
                                    $cat = $row['categoria'];
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
                        if (isset($_POST['inserta36'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='36'";
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
                        if (isset($_POST['inserta37'])) {
                            if (isset($_SESSION['usu'])) {
                                $usu = $_SESSION['usu'];
                            $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='37'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $tipo = $row['tipo'];
                                    $marca = $row['marca'];
                                    $cat = $row['categoria'];
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
