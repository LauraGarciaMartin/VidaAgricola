<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Pacifico&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Bienvenido</title>
    </head>

    <body>
        <?php require_once("header.php");?>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-2">
                    <div class="row cajas--texto">
                        <p class="cajas--parrafo">DESTACADOS</p>
                    </div>
                    <div class="cajas mt-1">
                        <div class="row">
                            <div class="caja">
                            <?php
                            
                            require_once("config.php");
                            $con = new mysqli($host,$username,$password,$bbdd);
                            $sql = "SELECT id,tipo,nombre,precio,imagen FROM productos WHERE tipo='Tractor' AND id='2'";
                            $res = mysqli_query($con,$sql);
                            while($fila = mysqli_fetch_array($res)){
                                $id = $fila['id'];
                                $nombre = $fila['nombre'];
                                $precio = number_format($fila['precio'],0,",",".");
                                $tipo = $fila['tipo'];
                                ?>
                                <img src="images/Maquinaria/<?php echo $nombre?>/<?php echo $fila['imagen']?>" class="card-img">
                                <hr>
                                
                            <div class="card-body">
                                <span class="card-text text--destacado">
                                   <?php echo $tipo;?><br>
                                    <?php echo $nombre?><br>
                                    <p class="text-muted text--precio"><?php echo $precio;?>€</p>
                                </span>
                            </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="caja">
                            <?php
                            
                            require_once("config.php");
                            $con = new mysqli($host,$username,$password,$bbdd);
                            $sql = "SELECT id,tipo,nombre,precio,imagen FROM productos WHERE tipo='Cosechadora' AND id='9'";
                            $res = mysqli_query($con,$sql);
                            while($fila = mysqli_fetch_array($res)){
                                $id = $fila['id'];
                                $nombre = $fila['nombre'];
                                $precio = number_format($fila['precio'],0,",",".");
                                $tipo = $fila['tipo'];
                                ?>
                                <img src="images/Maquinaria/<?php echo $nombre?>/<?php echo $fila['imagen']?>"
                                 class="card-img">
                                <hr>
                                
                            <div class="card-body">
                                <span class="card-text text--destacado">
                                   <?php echo $tipo;?><br>
                                    <?php echo $nombre?><br>
                                    <p class="text-muted text--precio"><?php echo $precio;?>€</p>
                                </span>
                            </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="caja">
                            <?php
                            
                            require_once("config.php");
                            $con = new mysqli($host,$username,$password,$bbdd);
                            $sql = "SELECT id,tipo,nombre,precio,imagen FROM productos WHERE tipo='Sembradora' AND id='20'";
                            $res = mysqli_query($con,$sql);
                            while($fila = mysqli_fetch_array($res)){
                                $id = $fila['id'];
                                $nombre = $fila['nombre'];
                                $precio = number_format($fila['precio'],0,",",".");
                                $tipo = $fila['tipo'];
                                ?>
                                <img src="images/Maquinaria/<?php echo $nombre?>/<?php echo $fila['imagen']?>" class="card-img">
                                <hr>
                                
                            <div class="card-body">
                                <span class="card-text text--destacado">
                                   <?php echo $tipo;?><br>
                                    <?php echo $nombre?><br>
                                    <p class="text-muted text--precio"><?php echo $precio;?>€</p>
                                </span>
                            </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="carousel slide carousel-dark carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                <img class="img-fluid" src="images/fotos/foto1.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img class="img-fluid" src="images/fotos/foto2.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img class="img-fluid" src="images/fotos/foto3.png" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img class="img-fluid" src="images/fotos/foto4.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img class="img-fluid" src="images/fotos/foto5.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img class="img-fluid" src="images/fotos/foto4.jpg" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img class="img-fluid" src="images/fotos/foto5.jpg" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#mi-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mi-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                        <div class="carousel-indicators">
                            <button class="active" data-bs-target="#mi-carousel" data-bs-slide-to="0"
                                aria-label="Slide 1" type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="1" aria-label="Slide 2"
                                type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="2" aria-label="Slide 3"
                                type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="3" aria-label="Slide 4"
                                type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="4" aria-label="Slide 5"
                                type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="6"
                                aria-label="Slide 6" type="button"></button>
                            <button class="" data-bs-target="#mi-carousel" data-bs-slide-to="7" aria-label="Slide 7"
                                type="button"></button>
                            
                        </div>
                    </div>
                    <hr>
                    <div class="row linea">
                        <span class="linea--parrafo">TIENDA</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><a href="maquinaria.php">MAQUINARIA</div>
                                <div class="card-body card--tienda">
                                    <img src="images/Maquinaria/tractormccormick.jpg" alt="1" class="img-fluid">
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><a href="remolques.php">REMOLQUES</div>
                                <div class="card-body card--tienda">
                                    <img src="images/Remolque/remolquebañeramacias.jpg" alt="1" class="img-fluid">
                                </div></a>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header"><a href="cultivos.php">SEMILLAS</div>
                                <div class="card-body card--tienda">
                                    <img src="images/Cultivo/cebadafoto.jpg" alt="1" class="img-fluid">
                                </div></a>
                            </div>
                        </div>
                         <div class="col-lg-6 mt-2">
                            <div class="card">
                                <div class="card-header"><a href="abonos.php">ABONOS</div>
                                <div class="card-body card--tienda">
                                    <img src="images/Fertilizante/abonosgranos.jpg" alt="1" class="img-fluid">
                                </div></a>
                            </div>
                        </div> 
                    </div>
                    <hr>
                    <div class="row linea">
                        <span class="linea--parrafo">NOTICIAS</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <div class="card">
                                <a
                                    href="https://www.infobierzo.com/la-sequia-amenaza-a-castilla-y-leon-tras-un-abril-muy-seco-y-los-agricultores-ya-hablan-de-ano-muy-malo-o-catastrofico/784107/" target="_blank">
                                    <img src="https://www.infobierzo.com/wp-content/uploads/2023/04/sequia-cultivos-980x653.jpg"
                                        alt="2" class="card-img-top">
                                    <div class="card-body">
                                        <h6 class="card-title text-dark">La sequía amenaza a Castilla y León tras un
                                            abril muy
                                            seco y
                                            los agricultores ya hablan de año “muy malo o catastrófico”</h6>
                                            <span class="card-text">La vegetación sufre, aparecen nuevas enfermedades
                                                que
                                                afectan a los árboles de los bosques, las cosechas se merman y
                                                probablemente, de continuar con esta tendencia de días tórridos y
                                                ausencia
                                                de precipitaciones, algunas zonas de Castilla y León sufrirán en verano
                                                restricciones de agua. </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <a class="not"
                                    href="https://www.elnortedecastilla.es/somoscampo/agricultores-castilla-leon-siembran-80000-hectareas-trigo-20230327095610-nt.html" target="_blank">
                                    <img src="https://s3.ppllstatics.com/elnortedecastilla/www/multimedia/2023/03/27/trigo-kta-U1901008309093hPH-758x531@El%20Norte.jpg"
                                        alt="2" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Los agricultores de Castilla y León siembran casi 80.000 hectáreas menos de
                                            trigo
                                        </h5>
                                        <span class="card-text">La primera estimación del Ministerio de Agricultura
                                            sobre la siembra de cereal en Castilla y León refleja un pérdida de casi
                                            60.000 hectáreas respecto a la campaña anterior, hasta un total de 1,7
                                            millones de hectáreas de trigo, la cebada, avena, centeno y triticale</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <a
                                    href="https://sorianoticias.com/noticia/2023-05-02-la-diputacion-completa-las-ayudas-a-agricultura-con-unos-500-000-para-3-lineas-distintas-100122" target="_blank">
                                    <img src="https://img.sorianoticias.com/imagenes/2023-05/th300/Feria_de_Ganado_Feria_Ganadera_5_230502115209.jpg"
                                        alt="2" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            La Diputación completa las ayudas a Agricultura con unos 500.000€ para 3
                                            líneas distintas
                                        </h5>
                                        <span class="card-text">Ferias, jóvenes agricultores y seguridad en el trabajo
                                            son los protagonistas de estas subvenciones.<br>La última Junta de Gobierno
                                            de la Diputación Provincial
                                            ha servido para aprobar, entre otros asuntos, tres líneas de subvenciones
                                            dentro del área de Agricultura. En total, se invertirán unos 500.000 euros
                                            en tres líneas de ayudas</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="row cajas--texto">
                        <p class="cajas--parrafo">CURIOSIDADES</p>
                    </div>
                    <div class="cajas mt-1">
                        <div class="row">
                                <div class="card caja">
                                    <img src="images/fotos/tierraagricola.jpg" alt="3" class="card-img">
                                    <div class="card-body">
                                        <span class="card-text">
                                            <span class="enfasis">El suelo de las tierras pueden tener diferentes colores:</span><br>
                                            Unas pueden ser más anaranjadas, otras más marrones,
                                            otras más rosadas...<br>
                                        </span>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="row mt-3">
                            <div class="card caja">
                                <img src="images/fotos/abonoscolores.jpg" alt="3" class="card-img">
                                <div class="card-body">
                                    <span class="card-text">
                                        <span class="enfasis">Los abonos también pueden ser de varios colores:</span><br>
                                        Los puede haber morados, azules, negros, grises, verdes...<p></p>
                                        <span class="aviso">*Aviso: despues del uso del abono(dando igual el color) recomendable lavar la abonadora<br>
                                        ya que al poco tiempo, si se deja, se oxidará la abonadora.*</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <div class="card caja">
                                <img src="images/fotos/girasol.jpg" alt="3" class="card-img">
                                <div class="card-body">
                                    <span class="card-text">
                                        La temporada de siembra de girasoles es en primavera.<p></p>
                                        Al contrario que el trigo, la cebada, la colza... la época de cosecha de girasoles es a partir de octubre.<p></p>
                                        Para el aceite, el girasol se cosecha cuando se ha secado, no cuando esta amarillo.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
