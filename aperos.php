<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <?php session_start();?>
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
        <title>Document</title>
        <link rel="stylesheet" href="css/productos.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <body class="productos">
        <a name="arriba"></a>
        <?php require_once("header.php"); ?>
        <div class="container">
            <div class="row">
                <h1 class="titulo display-2">APEROS</h1>
            </div>
        </div>
        <div class="container">
            <?php
            require_once("config.php");
            $conn = new mysqli($host,$username,$password,$bbdd);?>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                        $sql12 = "SELECT * FROM productos WHERE tipo='Sembradora' AND id='12'";
                        $res = mysqli_query($conn, $sql12);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b>&nbsp;&nbsp;
                                <b>Nombre: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta12" name="inserta12" class="btnproducto"
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
                        $sql13 = "SELECT * FROM productos WHERE tipo='Abonadora' AND id='13'";
                        $res = mysqli_query($conn, $sql13);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b>&nbsp;&nbsp;
                                <b>Nombre: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta13" name="inserta13" class="btnproducto"
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
                        $sql14 = "SELECT * FROM productos WHERE tipo='Sembradora' AND id='14'";
                        $res = mysqli_query($conn, $sql14);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>&nbsp;&nbsp;
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta14" name="inserta14" class="btnproducto"
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
                        $sql15 = "SELECT * FROM productos WHERE tipo='Abonadora' AND id='15'";
                        $res = mysqli_query($conn, $sql15);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>&nbsp;&nbsp;
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta15" name="inserta15" class="btnproducto"
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
                        $sql16 = "SELECT * FROM productos WHERE tipo='Cultivador' AND id='16'";
                        $res = mysqli_query($conn, $sql16);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b>&nbsp;&nbsp;
                                <b>Nombre: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta16" name="inserta16" class="btnproducto"
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
                        $sql17 = "SELECT * FROM productos WHERE tipo='Arado' AND id='17'";
                        $res = mysqli_query($conn, $sql17);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b>&nbsp;&nbsp;
                                <b>Nombre: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta17" name="inserta17" class="btnproducto"
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
                        $sql20 = "SELECT * FROM productos WHERE tipo='Sembradora' AND id='20'";
                        $res = mysqli_query($conn, $sql20);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'],0,",",".");
                        ?>
                        <img src='images/Maquinaria/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>'
                            class='card-img'>
                        <div class="card-body">
                            <span class="card-text texto-dest">
                                <b>Tipo: </b>&nbsp;&nbsp;
                                <b>Modelo: </b><br>
                                <span class="spantipo"><?php echo $tipo; ?></span>
                                <span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>&nbsp;&nbsp;
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="aperos.php" method="post">
                                    <input type="submit" id="inserta20" name="inserta20" class="btnproducto"
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
                    if (isset($_POST['inserta12'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='12'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta13'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='13'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta14'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='14'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta15'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='15'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta16'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='16'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta17'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,tipo,categoria,marca,nombre,precio,imagen FROM productos WHERE id='17'";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
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
                    if (isset($_POST['inserta20'])) {
                        if (isset($_SESSION['usu'])) {
                            $usu = $_SESSION['usu'];
                            $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='20'";
                            $resultado = $conn->query($sql);
                            if ($resultado->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    $id = $row['id'];
                                    $cat = $row['categoria'];
                                    $tipo = $row['tipo'];
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
