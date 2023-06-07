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
        <title>Tractores</title>

        <link rel="stylesheet" href="css/productos.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <body class="productos">
        <a name="arriba"></a>
        <?php
    require_once("header.php");
    ?>
        <div class="container">
            <div class="row">
                <h1 class="titulo display-2">TRACTORES</h1>
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
                    $sql1 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='1'";
                    $res = mysqli_query($conn, $sql1);
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
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta1" name="inserta1" class="btnproducto"
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
                    $sql2 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='2'";
                    $res = mysqli_query($conn, $sql2);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta2" name="inserta2" class="btnproducto"
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
                    $sql3 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='3'";
                    $res = mysqli_query($conn, $sql3);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta3" name="inserta3" class="btnproducto"
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
                    $sql4 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='4'";
                    $res = mysqli_query($conn, $sql4);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta4" name="inserta4" class="btnproducto"
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
                        $sql5 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='5'";
                        $res = mysqli_query($conn, $sql5);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta5" name="inserta5" class="btnproducto"
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
                        $sql6 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='6'";
                        $res = mysqli_query($conn, $sql6);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta6" name="inserta6" class="btnproducto"
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
                        $sql7 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='7'";
                        $res = mysqli_query($conn, $sql7);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta7" name="inserta7" class="btnproducto"
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
                        $sql21 = "SELECT * FROM productos WHERE tipo='Tractor' AND id='21'";
                        $res = mysqli_query($conn, $sql21);
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
                                <b>Tipo: </b><span class="spantipo"><?php echo $tipo; ?></span>&nbsp;
                                <b>Modelo: </b><span class="spanmarca"><?php echo $marca; ?></span><br>
                                <b>Nombre: </b>
                                <span class="spannombre"><?php echo $nombre; ?></span><br>
                                <b>Descripcion: </b><br>
                                <span class="span"><?php echo $descripcion; ?></span><br>
                                <b>Precio: </b>
                                <span class="span"><?php echo $precio; ?>€</span>
                                <p></p>
                                <form action="tractores.php" method="post">
                                    <input type="submit" id="inserta21" name="inserta21" class="btnproducto"
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
                if (isset($_POST['inserta1'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='1'";
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
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                if (isset($_POST['inserta2'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='2'";
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
                if (isset($_POST['inserta3'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='3'";
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
                if (isset($_POST['inserta4'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='4'";
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
                if (isset($_POST['inserta5'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='5'";
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
                if (isset($_POST['inserta6'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='6'";
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
                if (isset($_POST['inserta7'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='7'";
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
                if (isset($_POST['inserta21'])) {
                    if (isset($_SESSION['usu'])) {
                        $usu = $_SESSION['usu'];
                        $sql = "SELECT id,categoria,tipo,marca,nombre,precio,imagen FROM productos WHERE id='21'";
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
                    } else {
                        echo "Inicia sesion primero";
                    }
                }
                ?>
                </div>
            </div>
        </div>
        <footer class="footer footer-19">
            <div class="container my-2">
                <div class="row align-items-end">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-column-3 t2">
                            <span class="copyright-text">Todos los derechos reservados</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-column-4">
                            <div class="informaciones">
                                <table class="info">
                                    <tr>
                                        <th class="titulo--footer contacto">Numero Contacto</th>
                                        <th class="titulo--footer correo">Correo Contacto</th>
                                        <th class="titulo--footer localizacion">Donde estamos</th>
                                    </tr>
                                    <tr>
                                        <td class="text--footer contacto">912834582</td>
                                        <td class="text--footer correo">info@gmail.com</td>
                                        <td class="text--footer localizacion">Avenida Madrid,1 28341,Valdemoro,Madrid</td>
                                    </tr>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    </body>

</html>
