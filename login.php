<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Login</title>
</head>
<body class="claselogin">
    <?php require_once("header.php");?>
    <div class="container">
        <div class="row">
            <h1 class="titulo">Iniciar Sesion</h1>
        </div>
        <div class="row justify-content-center">
            <!-- <div class="row justify-content-center"> -->
                <div class="col-sm-6 col-md-4 ">
                    <form id="formlogin" name="formlogin" class="formlogin" action="login.php" method="post">
                        <label>Usuario: </label><br>
                        <input type="text" id="usu" name="usu"><br>
                        <label>o Correo electronico: </label><br>
                        <input type="text" id="email" name="email"><br>
                        <label>Contraseña: </label><br>
                        <input type="password" id="passw" name="passw"><br>
                        <a href="cambiopassword.php" class="olvido">¿Has olvidado tu contraseña?</a>
                        <p></p>
                        <input type="submit" id="login" name="login" value="Iniciar sesion" class="botonlogin">
                    </form>
                </div>
            <!-- </div> -->
                <div class="col-12">
                    <button type="button" class="boton"><a href="registro.php">Registrarse</a></button>
                    <button type="button" class="boton2"><a href="index.php">Volver</a></button>
                </div>
                </div>
    </div>
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
    
    <?php
    require_once("config.php");
    if(isset($_POST['login'])){
        if (((!empty($_POST['usu']) && empty($_POST['email'])) || (empty($_POST['usu']) && !empty($_POST['email']))) &&
            !empty($_POST['passw'])) {
            $usu = htmlspecialchars($_POST['usu']);
            $email = htmlspecialchars($_POST['email']);
            $passw = htmlspecialchars($_POST['passw']);

            $conn = new mysqli($host, $username, $password, $bbdd);

            $sql = "SELECT user,contrasenia,nombre,apellido1,apellido2,email,direccion,codigo_postal,telefono FROM usuarios 
                WHERE user='$usu' OR email='$email'";

            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {              
                    if ((($usu == $row['user']) || $email == $row['email']) && (md5($passw) == $row['contrasenia'])) {
                        $query = "SELECT * FROM usuarios WHERE user='$usu' OR email='$email'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);

                        $_SESSION['usu'] = $row['user'];
                        $_SESSION['nombre'] = $row['nombre'];
                        $_SESSION['ape1'] = $row['apellido1'];
                        $_SESSION['ape2'] = $row['apellido2'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['dir'] = $row['direccion'];
                        $_SESSION['codpostal'] = $row['codigo_postal'];
                        $_SESSION['tel'] = $row['telefono'];

                        echo "<span class='spanp2'>Inicio correcto</span>";
                        exit;
                    } else {
                        echo "<br><b class='b'>usuario no valido</b><br>";
                    }
                }
            } else {
                echo "no existe";
                
            }
        }
        
    }
    
    ?>
       <!-- <footer class="footer">
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
    </footer> -->
</body>
</html>