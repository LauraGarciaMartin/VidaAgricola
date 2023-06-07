<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <title>Document</title>
</head>
<body class="claselogin">
    <?php require_once("header.php");?>
<div class="formulario">
    <h1 class="titulo">Iniciar Sesion</h1>
    
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
        <button type="button" class="boton"><a href="registro.php">Registrarse</a></button>
        <button type="button" class="boton2"><a href="index.php">Volver</a></button>
    </div>
    <div class="formulario__responsive">
        <h1 class="formulario__responsive-titulo">Iniciar Sesion</h1>
        <form id="formloginresponsive" name="formloginresponsive" class="formulario__responsive-formlogin" action="login.php" method="post">
            <label>Usuario: </label><br>
            <input type="text" id="usu" name="usu"><br>
            <label>o Correo electronico: </label><br>
            <input type="text" id="email" name="email"><br>
            <label>Contraseña: </label><br>
            <input type="password" id="passw" name="passw"><br>
            <a href="cambiopassword.php" class="olvido">¿Has olvidado tu contraseña?</a>
            <p></p>
            <input type="submit" id="login" name="login" value="Iniciar sesion" class="formulario__responsive-botonlogin">
        </form>
        <div class="formulario__responsive-botones">
            <button type="button" class="formulario__responsive-boton"><a href="registro.php">Registrarse</a></button>
            <button type="button" class="formulario__responsive-boton2"><a href="index.php">Volver</a></button>
        </div>
    </div>
    
    <?php
    require_once("config.php");
    if (isset($_POST['login'])) {
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