<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Carrito</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/footer.css">
        <script>
        function recargarPagina() {
            location.reaload(true);
        }
    </script>
</head>
<body class="carrito">
    <?php require_once("header.php");?>
    <?php
        require_once("config.php");

        $conn = new mysqli($host, $username, $password, $bbdd);
        if (isset($_SESSION['usu'])) {
            $user = $_SESSION['usu'];
            $nombre_us = $_SESSION['nombre'];
            $ape1 = $_SESSION['ape1'];
            $ape2 = $_SESSION['ape2'];
            $total = 0;
            $cont = 0;
        
        
?>
<div class="pagina--carrito">
    <div class="container mt-9">
        <div class="row">
            
                <h1 class="titulo">Tus Productos</h1>
                    <div class="table-responsive">
                        <table class="table-carrito">
                            <tr>
                                <th class="th-carrito">Imagen</th>
                                <th class="th-carrito">Producto</th>
                                <th class="th-carrito">Modelo</th>
                                <th class="th-carrito">Nombre</th>
                                <th class="th-carrito">Precio</th>
                            </tr>
                    <?php
                    $cont = 0;
                    $sql = "SELECT * FROM carrito";
            $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $Num_producto = $row['Num_producto'];
                            $nombre_pr = $row['Nombre'];
                            $tipo = $row['Articulo'];
                            $categoria = $row['Categoria'];
                            $marca = $row['Marca'];
                            $precio = number_format($row['Precio'],0,",",".");

                            echo "<tr>";
                            echo "<i class='td-carrito' id='id'>$Num_producto</i>";
                            echo "<td class='td-carrito'><img src='images/".$categoria."/".$nombre_pr."/".$row['Imagen']. "' class='imgproducto'></td>";
                            echo "<td class='td-carrito'>$tipo</td>";
                            echo "<td class='td-carrito'>$marca</td>";
                            echo "<td class='td-carrito'>$nombre_pr</td>";
                            echo "<td class='td-carrito'>$precio €</td>";
                            echo "</tr>";
                            $cont++;
                        }
                    } else {
                        echo "<tr><td class='td-carrito' colspan='3'>No hay productos en el carrito.</td></tr>";
                    }
                        
                        ?>
                </table>
                    </div>
            
            <div class="row">
                    <?php
                    $sql2 = "SELECT SUM(Precio) AS total FROM carrito";
                    $result = $conn->query($sql2);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $total = number_format($row['total'],0,",",".");
                        ?> 
                <p class="producto--precio"><b class="tot">Total: </b><span class="sp"><?php echo $total ?>€</span></p>
                <?php
    }
    ?>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-4">
                <form action="carrito.php" method="post">
                    <button id='borrar' name='borrar' class='btn-tooltip' data-id='$nombre_pr'>
                    <img src='images/logos/borrar.png' class='logborrar' alt='borrar'><br>
                    <span class='tooltip'>Eliminar el carrito</span></button>
                    <input type="submit" id="pagar" name="pagar" value="Comprar" class="btncomprar">
                    <!-- <input type="button" onclick="location.reload()" id="recargar" name="recargar" class="btnrecarga" value="Recarga Pagina"> -->
                    <button onclick="location.reload()" id="recargar" name="recargar" class="btn-tooltip">
                        <img src="images/logos/recargar.png" class="logrecarga"><br>
                        <span class="tooltip">Recargar Pagina</span>
                    </button>
                </form>
                </div>
            </div>
    <?php
            if(isset($_POST['borrar'])){
                $sql3 = "SELECT * FROM carrito";
                $result = $conn->query($sql3);
                if($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()){  
                        $query = "DELETE FROM carrito WHERE Nombre='$nombre_pr'";
                        $res = $conn->query($query);
                        echo "producto eliminado";
                    }
                }
            }
            if(isset($_POST['pagar'])){
                $sql4 = "SELECT Num_producto,Articulo,Categoria,Marca,Nombre,Precio FROM carrito WHERE Usuario='$user'";
                $res4 = $conn->query($sql4);
                if($res4->num_rows>0){
                    while($row = $res4->fetch_assoc()){
                        $num_pedido = rand(1,100);
                        $fecha_compra = date('Y-m-d');
                        $Num_producto = $row['Num_producto'];
                        $nombre_pr = $row['Nombre'];
                        $tipo = $row['Articulo'];
                        $categoria = $row['Categoria'];
                        $marca = $row['Marca'];
                        $precio = $row['Precio'];
                        $query = "INSERT INTO pedidos(num_pedido,num_producto,tipo_producto,producto,usuario,nombre,apellido1,apellido2,precio,fecha_compra)
                        VALUES('$num_pedido','$Num_producto','$tipo','$nombre_pr','$user','$nombre_us','$ape1','$ape2','$precio','$fecha_compra')";
                        $res = $conn->query($query); 
                    }
                }
                ?>
                <div class="row">
                <form action="pago.php" method="post">
                    <input type="submit" id="irpago" name="irpago" value="Pagar" class="btnpagar">
                </form>
                </div>
                <?php               
                            
                        
            }
            
            } else {
                echo "<p>No has iniciado sesion</p>";
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