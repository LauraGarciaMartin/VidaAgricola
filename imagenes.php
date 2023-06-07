<!DOCTYPE html>
<html lang="en">

    <head>
        <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/perfil.css">
    </head>

    <body class="perfil">
    <?php require_once("header.php");?>
        <form class="imagenes" id='form' action='imagenes.php' method='post' enctype='multipart/form-data'>
            <input type='file' id='img' name='img' size='20'><br>
            <input type='submit' id='cambiar' name='cambiar' class='boton' value='Cambiar'>
        </form>

        <button id='volver' class='volver'><a href='miperfil.php'>Volver</a></button>
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

    </body>

</html>
