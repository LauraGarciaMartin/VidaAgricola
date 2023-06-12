<!DOCTYPE html>
<html lang="en">

    <head>
        <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Cambiar foto</title>
    </head>

    <body class="claseperfil">
    <?php require_once("header.php");?>
    <div class="container">
        <div class="row">
            <h1 class="titulo">CAMBIAR FOTO DE PERFIL</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
            <form class="imagenes" id='form' action='imagenes.php' method='post' enctype='multipart/form-data'>
            <input type='file' id='img' name='img' size='20'><br>
            <input type='submit' id='cambiar' name='cambiar' class='boton' value='Cambiar'>
        </form>

        <button id='volver' class='volver'><a href='miperfil.php'>Volver</a></button>
            </div>
        </div>
    </div>
        
        <?php

require_once("config.php");

if(isset($_POST['cambiar'])){
    if(isset($_FILES['img'])){
        $usu = $_SESSION['usu'];
        
        $errors = array();
        $file_name = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];

        $tmp = explode('.',$file_name);
        $file_ext = strtolower(end($tmp));
        $extensions = array("png");

        if(in_array($file_ext,$extensions) == false){
            $errors[] = "Extension no permitida. La imagen tiene que ser .png";
        }
        if($file_size > 2097152){
            $errors[] = "El tamaño de la imagen es superior";
        }
        
        if(empty($errors)){
            if(!is_dir("./images/perfil/$usu")){
                @mkdir("./images/perfil/$usu") or die("Fallo al crear la carpeta");
            } else{
                $maxsize = 5 * 1024 * 1024;
                if($file_size > $maxsize){ 
                    recorta("./images/perfil/$usu/"."$usu");
                }
                move_uploaded_file($file_tmp,"./images/perfil/$usu/".$usu.".png");
                echo "subida correcta";
            }           
            
        } else{
            print_r($errors);
        }
    } 
} 
function recorta($r){
    $newwidth = 500;
    $newheight = 500; 

    $im = imagecreatefrompng($file_name);
    $size = min(imagesx($im), imagesy($im));

    $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
    $thumb = imagecreatetruecolor($newwidth, $newheight);

    imagecopyresized($thumb, $im2, 0, 0, 0, 0, $newwidth, $newheight, $size, $size);

    if ($im2 !== FALSE) {
        imagepng($thumb, $file_name.'-cropped.png');
        imagedestroy($im2);
    }
    imagedestroy($im);
}
?>
<footer class="footer-cambio">
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
