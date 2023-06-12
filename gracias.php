<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Gracias</title>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body class="carrito">
    <?php require_once("header.php");
    
    require_once("config.php");
    $conn = new mysqli($host, $username, $password, $bbdd);
    if(isset($_SESSION['usu'])){
        $usu = $_SESSION['usu'];
        $sql = "SELECT * FROM carrito WHERE Usuario='$usu'";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            $query = "DELETE FROM carrito";
            $resultado = $conn->query($query);
        }
    ?>
    
    <div class="pagina--resumen">
        <h1 class="titulo">Gracias por su compra</h1>
        <table class="table-carrito">
            <tr>
                <th class='th-carrito'>Numero Pedido</th>
                <th class='th-carrito'>Tipo</th>
                <th class='th-carrito'>Nombre</th>
                <th class='th-carrito'>Precio Total</th>
            </tr>
            <?php
            $sql2 = "SELECT * FROM pedidos WHERE usuario='$usu'";
            $result = $conn->query($sql2);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $num_pedido = $row['num_pedido'];
                    $tipo = $row['tipo_producto'];
                    $producto = $row['producto'];
                    $precio = $row['precio'];

                    echo "<tr>";
                    echo "<td class='td-carrito'>$num_pedido</td>";
                    echo "<td class='td-carrito'>$tipo</td>";
                    echo "<td class='td-carrito'>$producto</td>";
                    echo "<td class='td-carrito'>$precio</td>";
                    echo "</tr>";
                    
                }
            } else{
                echo "<td class='td-carrito' colspan='4'>NO HAS REALIZADO NINGUN PEDIDO</td>";
            }

            ?>
        </table>
        <p class="factura">Descargar la factura</p> <form method="post" action="factura.php">
        <button type="submit" name="descargar_factura" class="descargar">Descargar factura en PDF</button>
    </form><br>
        <p class="volver">¿Volver al Inicio?</p>
        <button class="botonindex"><a href="index.php">Inicio</a></button>
        </div>
        <?php
    } else{
        echo "No has iniciado sesion";
    }
    ?>
    <footer class="footer">
    <div class="container-fluid">
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