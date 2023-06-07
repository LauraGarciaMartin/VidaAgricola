<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Document</title>
    </head>

    <body class="claselogin">
        <?php require_once("header.php"); ?>
        <div class="formulario">
            <h1 class="titulo--cambio">CAMBIAR CONTRASEÑA</h1>
            <form id="formcambio" name="formcambio" action="cambiopassword.php" method="post"
                class="formcambio">
                <label>Correo:</label><br>
                <input type="text" id="email" name="email"><br>
                <label>Nueva contraseña:</label><br>
                <input type="password" id="nuevapass" name="nuevapass"><br>
                <label>Confirma nueva contraseña: </label><br>
                <input type="password" id="confirmnpass" name="confirmnpass"><br>
                <a id="error">Las contraseñas no coinciden</a>
                <p></p>
                <input type="submit" id="cambiar" name="cambiar" value="Enviar" class="botoncambio">
            </form>
        </div>
        <div class="formulario__responsive">
        <h1 class="formulario__responsive-titulo--cambio">CAMBIAR CONTRASEÑA</h1>
            <form id="formcambio" name="formcambio" action="cambiopassword.php" method="post"
                class="formulario__responsive-formcambio">
                <label>Correo:</label><br>
                <input type="text" id="email" name="email"><br>
                <label>Nueva contraseña:</label><br>
                <input type="password" id="nuevapass" name="nuevapass"><br>
                <label>Confirma nueva contraseña: </label><br>
                <input type="password" id="confirmnpass" name="confirmnpass"><br>
                <a id="error">Las contraseñas no coinciden</a>
                <p></p>
                <input type="submit" id="cambiar" name="cambiar" value="Enviar" class="formulario__responsive-botoncambio">
            </form>
        </div>
                    <?php
                require_once("config.php");
                if (isset($_POST['cambiar'])) {
                ?>
                    <script src="js/validaNuevaContrasena.js"></script>
                    <?php
                    if (!empty($_POST['email']) && !empty($_POST['nuevapass']) && !empty($_POST['confirmnpass'])) {
                        $usu = htmlspecialchars($_POST['email']);
                        $nuevapass = htmlspecialchars($_POST['nuevapass']);
                        $conn = new mysqli($host, $username, $password, $bbdd);
                        $sql = "SELECT email,contrasenia FROM usuarios WHERE email='$usu'";
                        $res = $conn->query($sql);
                        if ($res->num_rows > 0) {
                            while ($row = $res->fetch_assoc()) {
                                $query = "UPDATE usuarios SET contrasenia=md5('$nuevapass')
                                    WHERE email='$usu'";
                                $resu = $conn->query($query);
                                echo "Contraseña cambiada";
                            }
                        } else {
                            echo "El usuario no existe";
                        }
                    }
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
