<!DOCTYPE html>
<html lang="en">
<!--No consigo que me funcione la validacion:( lo conseguire para la presentación, ya no me da tiempo para entregarlo en tiempo-->
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Carrito</title>
    
</head>

<body class="carrito">
    <?php
    require_once("header.php");   //no consigo que me funcione, para la presentacion lo conseguiré 
    ?>
    
    <div class="formulario">
            <h3 class="titulo--pago">Datos de Facturación:</h3>
            <form id="formpago" name="formpago" class="formpago" action="pago.php" method="post">
                <label>Numero: </label>
                <input type="text" id="num" name="num">
                <a id="errornumeroc">Numero de cuenta incorrecto</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>Fecha Validez: </label>
                <input type="date" id="fec" name="fec">
                <a id="errorfecvalidez">La fecha no puede ser anterior a la fecha de compra</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>CVV: </label>
                <input type="text" id="cvv" name="cvv">
                <a id="errorcvv">El CVV solo puede contener 3 digitos</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>Nombre Titular: </label>
                <input type="text" id="tit" name="tit">
                <a id="vacio">Campo obligatorio</a><br><p></p>
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
        <div class="formulario__responsive">
        <h3 class="formulario__responsive-titulo--pago">Datos de Facturación:</h3>
            <form id="formpago" name="formpago" class="formulario__responsive-formpago" action="pago.php" method="post">
                <label>Numero: </label>
                <input type="text" id="num" name="num">
                <a id="errornumeroc">Numero de cuenta incorrecto</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>Fecha Validez: </label>
                <input type="date" id="fec" name="fec">
                <a id="errorfecvalidez">La fecha no puede ser anterior a la fecha de compra</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>CVV: </label>
                <input type="text" id="cvv" name="cvv">
                <a id="errorcvv">El CVV solo puede contener 3 digitos</a><br>
                <a id="vacio">Campo obligatorio</a><br>
                <label>Nombre Titular: </label>
                <input type="text" id="tit" name="tit">
                <a id="vacio">Campo obligatorio</a><br>
                <script>
                    var onloadCallback = function() {
                        grecaptcha.render('html_element', {
                            'sitekey': '6LfZ5esjAAAAAO7A8sw-6kn35LW3ICuH-Y42yEaa'
                        });
                    };
                </script>
                <p></p>
                <div id="html_element" class="g-recaptcha" data-sitekey="6LfZ5esjAAAAAO7A8sw-6kn35LW3ICuH-Y42yEaa">
                </div>
                <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
                </script>
                <p></p>
                <input type="submit" id="pagarr" name="pagarr" value="Pagar" class="formulario__responsive-botonpago">
            </form>
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