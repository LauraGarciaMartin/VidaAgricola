<?php
require_once("config.php");
$conn = new mysqli($host,$username,$password,$bbdd);
$sql = "SELECT num_pedido,tipo_producto,producto,nombre,apellido1,apellido2,precio,fecha_compra FROM pedidos";
$res = $conn->query($sql);
if($res -> num_rows > 0){
    while($row = $res -> fetch_assoc()){
        $num_pedido = $row['num_pedido'];
        $tipo_producto = $row['tipo_producto'];
        $producto = $row['producto'];
        $nombre = $row['nombre'];
        $apellido1 = $row['apellido1'];
        $apellido2 = $row['apellido2'];
        $precio = number_format($row['precio'],0,",",".");;
        $fecha = $row['fecha_compra'];
    }
}

require_once('library/tcpdf/tcpdf.php');

function generarFactura($num_pedido, $tipo_producto, $producto, $nombre, $apellido1, $apellido2, $precio, $fecha) {
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
    $pdf->SetTitle('Factura');
    $pdf->AddPage();

    $contenidoFactura = <<<EOD
    <h1>Factura</h1>
    <p>Número de pedido: $num_pedido</p>
    <p>Producto: $tipo_producto $producto</p>
    <p>Cliente: $nombre $apellido1 $apellido2</p>
    <hr>
    <p>Precio total: $precio</p>
    <p>Fecha de compra: $fecha</p>
    EOD;

    $pdf->writeHTML($contenidoFactura, true, false, true, false, '');

    $pdf->Output('factura.pdf', 'D');
}

$num_pedido = $num_pedido;
$tipo_producto = $tipo_producto;
$producto = $producto;
$nombre = $nombre;
$apellido1 = $apellido1;
$apellido2 = $apellido2;
$precio = $precio;
$fecha = $fecha;

if (isset($_POST['descargar_factura'])) {
    generarFactura($num_pedido, $tipo_producto, $producto, $nombre, $apellido1, $apellido2, $precio, $fecha);
}
?>

</form>