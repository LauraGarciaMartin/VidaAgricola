<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Registro</title>
</head>
<body class="claselogin">
    <?php require_once("header.php");?>
    <div class="container">
        <div class="row">
            <h1 class="titulo">Registrate</h1>
        </div>
        <div class="row justify-content-center">
            <div class=" col-md-6 col-sm-4 col-xs-2">
                <form id="formregistro" name="formregistro" class="formregistro" action="registro.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-4">
                            <label>Nombre de usuario: </label><br>
                            <input type="text" id="user" name="user"><br>
                            <label>Contraseña: </label><br>
                            <input type="password" id="pass" name="pass"><br>
                            <label>Confirma contraseña: </label><br>
                            <input type="password" id="passconfirm" name="passconfirm"><br>
                            <label>Nombre: </label><br>
                            <input type="text" id="nombre" name="nombre"><br>
                            <label>Apellido 1: </label><br>
                            <input type="text" id="ape1" name="ape1">
                        </div>
                        <div class="col-md-6">
                            <label>Apellido 2: </label><br>
                            <input type="text" id="ape2" name="ape2"><br>
                            <label>Correo electronico: </label><br>
                            <input type="text" id="email" name="email"><br>
                            <label>Direccion: </label><br>
                            <input type="text" id="dir" name="dir"><br>
                            <label>Codigo postal: </label><br>
                            <input type="text" id="codpostal" name="codpostal"><br>
                            <label>Telefono: </label><br>
                            <input type="text" id="tel" name="tel"><br>
                        </div>
</div>
<div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <input type="submit" id="registrar" name="registrar" value="Enviar" class="btnregistro">
                    </div>
</div>
                </form>
</div>
        </div>
    </div>
    <?php
    require_once("config.php");
    if (isset($_POST['registrar'])) {
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