<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <p class="factura">Descargar la factura <form method="post" action="factura.php">
        <button type="submit" name="descargar_factura">Descargar factura en PDF</button>
    </form></p>
        <p>¿Volver al Inicio?</p>
        <button type="button" class="botonpago"><a href="index.php">Inicio</a></button>
        </div>
        <?php
    } else{
        echo "No has iniciado sesion";
    }
    ?>
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