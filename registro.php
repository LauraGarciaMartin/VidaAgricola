<!DOCTYPE html>
<html lang="en">
<head>
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
        <h1 class="titulo">Registrate</h1>
        <form id="formregistro" name="formregistro" class="formregistro" action="registro.php" method="post">
            <div class="izquierda">
                <label>Nombre de usuario: </label><br>
                <input type="text" id="user" name="user"><br>
                <label>Contraseña: </label><br>
                <input type="password" id="pass" name="pass"><br>
                <label>Confirma contraseña: </label><br>
                <input type="password" id="passconfirm" name="passconfirm"><br>
                <a id="error">Las contraseñas no coinciden</a><br>
                <label>Nombre: </label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label>Apellido 1: </label><br>
                <input type="text" id="ape1" name="ape1">
            </div>
            <div class="derecha">
                <label>Apellido 2: </label><br>
                <input type="text" id="ape2" name="ape2"><br>
                <label>Correo electronico: </label><br>
                <input type="text" id="email" name="email"><br>
                <a id="error4">El correo no es valido</a><br>
                <label>Direccion: </label><br>
                <input type="text" id="dir" name="dir"><br>
                <label>Codigo postal: </label><br>
                <input type="text" id="codpostal" name="codpostal"><br>
                <a id="error2">El codigo postal tiene que tener 5 digitos</a><br>
                <label>Telefono: </label><br>
                <input type="text" id="tel" name="tel"><br>
                <a id="error3">El telefono tiene que tener 9 digitos</a>
            </div>
            <div class="abajo">
                <input type="submit" id="registrar" name="registrar" value="Enviar" class="btnregistro">
            </div>
        </form>
    </div>
    
     <div class="formulario__responsive">
        <h1 class="formulario__responsive-titulo">Registrate</h1>
        <form id="formregistroresponsive" name="formregistroresponsive" class="formulario__responsive-formregistro" action="registro.php" method="post">
            <label>Nombre de usuario: </label><br>
            <input type="text" id="user" name="user"><br>
            <label>Contraseña: </label><br>
            <input type="password" id="pass" name="pass"><br>
            <label>Confirma contraseña: </label><br>
            <input type="password" id="passconfirm" name="passconfirm"><br>
            <a id="error">Las contraseñas no coinciden</a><br>
            <label>Nombre: </label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <label>Apellido 1: </label><br>
            <input type="text" id="ape1" name="ape1"><br>
            <label>Apellido 2: </label><br>
            <input type="text" id="ape2" name="ape2"><br>
            <label>Correo electronico: </label><br>
            <input type="text" id="email" name="email"><br>
            <a id="error4">El correo no es valido</a><br>
            <label>Direccion: </label><br>
            <input type="text" id="dir" name="dir"><br>
            <label>Codigo postal: </label><br>
            <input type="text" id="codpostal" name="codpostal"><br>
            <a id="error2">El codigo postal tiene que tener 5 digitos</a><br>
            <label>Telefono: </label><br>
            <input type="text" id="tel" name="tel"><br>
            <a id="error3">El telefono tiene que tener 9 digitos</a>
            <input type="submit" id="registrarse" name="registrarse" value="Enviar" class="formulario__responsive-btnregistro">
        </form>
    </div>

    <?php
    require_once("config.php");
    if (isset($_POST['registrar']) || isset($_POST['registrarse'])) {
        if (
            !empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['passconfirm']) &&
            !empty($_POST['nombre']) && !empty($_POST['ape1']) && !empty($_POST['ape2']) &&
            !empty($_POST['email']) && !empty($_POST['dir']) && !empty($_POST['codpostal']) && !empty($_POST['tel'])
        ) {
            $user = htmlspecialchars($_POST['user']);
            $pass = htmlspecialchars($_POST['pass']);
            $passconfirm = htmlspecialchars($_POST['passconfirm']);
            $nombre = htmlspecialchars($_POST['nombre']);
            $ape1 = htmlspecialchars($_POST['ape1']);
            $ape2 = htmlspecialchars($_POST['ape2']);
            $email = htmlspecialchars($_POST['email']);
            $dir = htmlspecialchars($_POST['dir']);
            $codpostal = htmlspecialchars($_POST['codpostal']);
            $tel = htmlspecialchars($_POST['tel']);

            function compruebaContrasena(){
                if($_POST['pass'] == $_POST['passconfirm']){
                    return true;
                } else{
                    return false;
                }
            }
            function compruebaCodigo(){
                if(strlen($_POST['codpostal']) == 5){
                    return true;
                } else{
                    return false;
                }
            }
            function compruebaCorreo(){
                if(strpos($_POST['email'], "@") !== false && strpos($_POST['email'], ".") !== false){
                    return true;
                } else{
                    return false;
                }
            }
            function compruebaTelefono(){
                if(strlen($_POST['tel']) == 9){
                    return true;
                } else{
                    return false;
                }
            }

            $conn = new mysqli($host, $username, $password, $bbdd);

            $query = "SELECT user FROM usuarios WHERE user='$user'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                echo "ya existe";
            } else {
                if(compruebaContrasena() == true && compruebaCorreo() == true && compruebaCodigo() == true && compruebaTelefono() == true){
                    $sql = "INSERT INTO usuarios(user,contrasenia,nombre,apellido1,apellido2,email,direccion,codigo_postal,telefono) 
                        VALUES('$user',md5('$pass'),'$nombre','$ape1','$ape2','$email','$dir','$codpostal','$tel')";
                    $resultado = $conn->query($sql);
                    echo "subida correcta";
                } else{
                    echo "<b class='error'>Error. Comprueba que:<br>Las contraseñas coincidan.<br>El correo contenga los caracteres @ y .<br>
                    El codigo postal contenga 5 digitos.<br>El telefono contenga 9 digitos.</b>";
                }
            }
            
        } else {
            echo "No pueden estar vacios";
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