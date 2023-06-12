<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Mi perfil</title>
</head>
<body class="claseperfil">
    <?php 
    require_once("header.php");
    
    if(isset($_SESSION['usu'])){
    $usu = $_SESSION['usu']; ?>
    <div class="perfil">
        <h1 class="titulo"><?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['ape1'];?></h1>
        <div class='icono'>
            <form action='imagenes.php' method='post' enctype='multipart/form-data'>
                <button id='nueva' name='nueva' class='boton-cambio'><img src='./images/perfil/cambios.png'
                        class='icon'>
                        Cambiar imagen</button></td>
                </button>
            </form>
        </div>
        <?php
        require_once("config.php");
        if(file_exists("images/perfil/".$usu."/".$usu.".png")){
            ?>
            
                <img src='images/perfil/<?php echo $usu;?>/<?php echo $usu;?>.png' alt='1' class='pordefecto'>
            
            <table class="table-perfil">
                        <tr>
                            <td class="td-perfil"><i>NOMBRE Y APELLIDOS:</i><br><b><?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['ape1'];?> <?php echo $_SESSION['ape2'];?></b></td>
                        </tr>
                        <tr>
                            <td class="td-perfil"><i>EMAIL: </i><br><b><?php echo $_SESSION['email'];?></b></td>
                        </tr>
                        <tr>
                            <td class="td-perfil"><i>DIRECCION: </i><br><b><?php echo $_SESSION['dir'];?></b></td>
                        </tr>
                        <tr>
                            <td class="td-perfil"><i>CODIGO POSTAL: </i><br><b><?php echo $_SESSION['codpostal'];?></b></td>
                        </tr>
                        <tr>
                            <td class="td-perfil"><i>TELEFONO: </i><br><b><?php echo $_SESSION['tel'];?></b></td>
                        </tr>
                    </table>
            
            
                <button id='login' name='login' class='boton2'><a href='index.php'>Volver al inicio</a></button>
            
            <?php
        } else{
            echo "<img class='pordefecto' src='images/perfil/default.png' alt='2'>"; //si no existe muestra una imagen por defecto
        }
        ?>
    </div>
    <div class="perfil__responsive">
        <h1 class="perfil__responsive-titulo"><?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['ape1'];?></h1>
        
        <form action='imagenes.php' method='post' enctype='multipart/form-data'  class="perfil__responsive-icono">
            <button id='nuevafoto' name='nuevafoto' class='perfil__responsive-cambio'><img src='./images/perfil/cambios.png'
                class='responsive-icon'>
                Cambiar imagen</button>
            </button>
        </form>
    
    
        <?php
        if(file_exists("images/perfil/".$usu."/".$usu.".png")){
            ?>
            
                <img src='images/perfil/<?php echo $usu;?>/<?php echo $usu;?>.png' alt='1' class='perfil__responsive-pordefecto'>
            
                <table class="perfil__responsive-perfil-tabla">
                    <tr>
                        <td class="td-perfil"><i>NOMBRE Y APELLIDOS:</i><br><b><?php echo $_SESSION['nombre'];?> <?php echo $_SESSION['ape1'];?> <?php echo $_SESSION['ape2'];?></b></td>
                    </tr>
                    <tr>
                        <td class="td-perfil"><i>EMAIL: </i><br><b><?php echo $_SESSION['email'];?></b></td>
                    </tr>
                    <tr>
                        <td class="td-perfil"><i>DIRECCION: </i><br><b><?php echo $_SESSION['dir'];?></b></td>
                    </tr>
                    <tr>
                        <td class="td-perfil"><i>CODIGO POSTAL: </i><br><b><?php echo $_SESSION['codpostal'];?></b></td>
                    </tr>
                    <tr>
                        <td class="td-perfil"><i>TELEFONO: </i><br><b><?php echo $_SESSION['tel'];?></b></td>
                    </tr>
                </table>
            
                <button id='login' name='login' class='perfil__responsive-boton2'><a href='index.php'>Volver al inicio</a></button>
            
            <?php
        } else{
            echo "<img class='perfil__responsive-pordefecto' src='images/perfil/default.png' alt='2'>"; //si no existe muestra una imagen por defecto
        }
        ?>
    </div>
    <?php
    } else{
        echo "No has iniciado sesion";
    }
    ?>
    <footer class="footer footer-19">
    <div class="container">
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