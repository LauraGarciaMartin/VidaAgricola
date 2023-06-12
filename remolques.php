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
        <title>Remolques</title>
        <link rel="stylesheet" href="css/productos.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <body class="productos">
        <a name="arriba"></a>
        <?php require_once("header.php"); ?>
        <div class="container">
            <div class="row">
                <h1 class="titulo display-2">REMOLQUES</h1>
            </div>
        </div>
        <div class="container">
            <?php
        require_once("config.php");
        $conn = new mysqli($host, $username, $password, $bbdd);
        
        ?>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                    $sql18 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='18'";
                    $res = mysqli_query($conn, $sql18);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta18" name="inserta18" class="btnproducto"
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
                    $sql19 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='19'";
                    $res = mysqli_query($conn, $sql19);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta19" name="inserta19" class="btnproducto"
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
                    $sql19 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='32'";
                    $res = mysqli_query($conn, $sql19);
                    while ($fila = mysqli_fetch_array($res)) {
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $tipo = $fila['tipo'];
                        $marca = $fila['marca'];
                        $descripcion = $fila['descripcion'];
                        $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta32" name="inserta32" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                        $sql19 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='33'";
                        $res = mysqli_query($conn, $sql19);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta33" name="inserta33" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>
                    <?php
                        } ?>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                        $sql19 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='34'";
                        $res = mysqli_query($conn, $sql19);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta34" name="inserta34" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>
                    <?php
                        } ?>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-6">
                    <div class="card">
                        <?php
                        $sql19 = "SELECT * FROM productos WHERE tipo='Basculante' AND id='35'";
                        $res = mysqli_query($conn, $sql19);
                        while ($fila = mysqli_fetch_array($res)) {
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $tipo = $fila['tipo'];
                            $marca = $fila['marca'];
                            $descripcion = $fila['descripcion'];
                            $precio = number_format($fila['precio'], 0, ",", ".");
                    ?>
                        <img src='images/Remolque/<?php echo $nombre ?>/<?php echo $fila['imagen'] ?>' class='card-img'>
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
                                <form action="remolques.php" method="post">
                                    <input type="submit" id="inserta35" name="inserta35" class="btnproducto"
                                        value="Añadir al Carrito">
                                    <button class="btn">
                                        <img id="favoritos" name="favoritos"
                                            src="images/logos/globo-de-corazonsinrelleno.png" alt="fav"
                                            class="favoritos" name="favoritos">
                                    </button>
                                </form>
                            </span>
                        </div>
                    </div>
                    <?php
                        } ?>
                </div>
            </div>
            <?php
                    }
                    if (isset($_POST['inserta18'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                            $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='18'";
                            $resultado = $conn->query($sql);
                            if ($res->num_rows > 0) {
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
                        } else{
                            echo "NO HAS INICIADO SESION";
                        }
                    }
                    if (isset($_POST['inserta19'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='19'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
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
                    } else{
                        echo "NO HAS INICIADO SESION";
                    }
                    }
                    if (isset($_POST['inserta32'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='32'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
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
                    } else{
                        echo "NO HAS INICIADO SESION";
                    }
                    }
                    if (isset($_POST['inserta33'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='33'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
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
                    } else{
                        echo "NO HAS INICIADO SESION";
                    }
                    }
                    if (isset($_POST['inserta34'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='34'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
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
                    } else{
                        echo "NO HAS INICIADO SESION";
                    }
                    }
                    if (isset($_POST['inserta35'])) {
                        if(isset($_SESSION['usu'])){
                            $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='18'";
                        $resultado = $conn->query($sql);
                        if ($res->num_rows > 0) {
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
                    } else{
                        echo "NO HAS INICIADO SESION";
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
