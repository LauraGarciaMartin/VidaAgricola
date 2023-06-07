<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Mi perfil</title>
</head>
<body class="claseperfil">
    <?php 
    require_once("header.php");
    require_once("config.php");
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