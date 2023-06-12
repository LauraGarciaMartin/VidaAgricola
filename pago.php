<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Pagar</title>
</head>
<body class="carrito">
<?php
    require_once("header.php");    
    ?>
    <div class="container">
        <div class="row">
            <h3 class="titulo--pago">Datos de Facturación:</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
            <form id="formpago" name="formpago" class="formpago" action="pago.php" method="post">
                <label>Numero: </label>
                <input type="text" id="num" name="num"><br>
                <label>Fecha Validez: </label>
                <input type="date" id="fec" name="fec"><br>
                <label>CVV: </label>
                <input type="text" id="cvv" name="cvv"><br>
                <label>Nombre Titular: </label>
                <input type="text" id="tit" name="tit"><br>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
                <form id="demo-form" action="?" method="POST">
      <button class="g-recaptcha" data-sitekey="6LeT9VUmAAAAAPMh9i3se2w7Og2jKzj-IygJvee9" data-callback="onSubmit">No soy un robot</button>
      <br/>
                <p></p>
                <input type="submit" onclick="comprobarTodo()" id="pagar" name="pagar" value="Pagar" class="botonpago">
            </form>
            </div>
        </div>
    </div>
    <?php
                
                if(isset($_SESSION['usu'])){
                    $user = $_SESSION['usu'];
                    $nombre_us = $_SESSION['nombre'];
                    $ape1 = $_SESSION['ape1'];
                    $ape2 = $_SESSION['ape2'];
                    if(isset($_POST['pagar'])){
                        
                    
                    require_once("config.php");
                    $conn = new mysqli($host,$username,$password,$bbdd);
                    if(!empty($_POST['num']) && !empty($_POST['fec']) && !empty($_POST['cvv']) && !empty($_POST['tit'])){
                        $num = htmlspecialchars($_POST['num']);
                        $fec = htmlspecialchars($_POST['fec']);
                        $cvv = htmlspecialchars($_POST['cvv']);
                        $tit = htmlspecialchars($_POST['tit']);

                        function compruebaNumero(){
                            if(strlen($_POST['num']) == 10){
                                return true;
                            } else{
                                return false;
                            }
                        }
                        function compruebaFecha(){
                            $hoy = new DateTime();
                            $fec = new DateTime($_POST['fec']);
                            if($fec > $hoy){
                                return true;
                            } else{
                                return false;
                            }
                        }
                        function compruebaCVV(){
                            if(strlen($_POST['cvv']) == 3){
                                return true;
                            } else{
                                return false;
                            }
                        }
                        
                        $sql = "SELECT * FROM pagotarjeta WHERE numero='$num'";
                        $res = $conn->query($sql);
                        if($res->num_rows>0){
                            echo "Tus datos ya estan guardados";
                            echo "<form action='gracias.php' method='post'>
                    <input type='submit' id='irresumen' name='irresumen' value='Pagar' class='btnpagar'>
                </form>";
                        } else{
                        if(compruebaNumero() == true && compruebaFecha() == true && compruebaCVV() == true){
                            $query = "INSERT INTO pagotarjeta(nombre_titular,numero,fecha,CVV)
                            VALUE('$tit','$num','$fec','$cvv')";
                            if ($conn->query($query) === TRUE) {
                                echo "Datos insertados correctamente.";
                                echo "<form action='gracias.php' method='post'>
                    <input type='submit' id='irrresumen' name='irrresumen' value='Pagar' class='btnpagar'>
                </form>";
                            } 
                            } else {
                                echo "<b class='error'>Error. Comprueba que:<br>El numero tiene que contener 10 digitos.<br>
                                La fecha tiene que ser mayor a la de hoy.<br>
                    El CVV tiene que contener 3 digitos.</b>";
                            
                        
                    }
                }
            }
        }
            } else{
                echo "NO HAS INICIADO SESION.";
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