<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Document</title>
    </head>

    <body class="claselogin">
        <?php require_once("header.php"); ?>
        <div class="container">
            <div class="row">
            <h1 class="titulo--cambio">CAMBIAR CONTRASEÑA</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4">
                <form id="formcambio" name="formcambio" action="cambiopassword.php" method="post"
                    class="formcambio">
                    <label>Correo:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label>Nueva contraseña:</label><br>
                    <input type="password" id="nuevapass" name="nuevapass"><br>
                    <label>Confirma nueva contraseña: </label><br>
                    <input type="password" id="confirmnpass" name="confirmnpass"><br>
                    <p></p>
                    <input type="submit" id="cambiar" name="cambiar" value="Enviar" class="botoncambio">
            </form>
                </div>
            </div>
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
            <tr>
              <th class="titulo--footer">Numero Contacto</th>
            </tr>
            <tr>
              <td class="text--footer">912834582</td>
            </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table">
            <tr>
              <th class="titulo--footer">Correo Contacto</th>
            </tr>
            <tr>
              <td class="text--footer">info@gmail.com</td>
            </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table">
            <tr>
              <th class="titulo--footer">Donde estamos</th>
            </tr>
            <tr>
              <td class="text--footer">Avenida Madrid,1 28341,Valdemoro,Madrid</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
    </footer>
    </body>

</html>
