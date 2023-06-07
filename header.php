<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/header.css">
        
        <title>Document</title>
    </head>

    <body>
    <nav class="navbar navbar-expand-lg ">
            <img class="imagen" src="images/logo6.png">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse"
           data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <button type="button" class="nav-link"><a href="index.php" class="a--header">Inicio</a></button>
              </li>
              <li class="nav-item dropdown">
                <select class="nav-link" id="categorias">
                    <option>Categorias</option>
                    <optgroup label="Maquinaria">
                        <option value="tractores.php">Tractores</option>
                        <option value="cosechadoras.php">Cosechadoras</option>
                        <option value="aperos.php">Aperos</option>
                    </optgroup>
                    <optgroup label="Remolques">
                        <option value="remolques.php">Remolques</option>
                    </optgroup>
                    <optgroup label="Semillas">
                        <option value="cultivos.php">Semillas</option>
                    </optgroup>
                    <optgroup label="Fertilizantes">
                        <option value="abonos.php">Abonos</option>
                    </optgroup>
                </select>
                <script>
                    let select = document.getElementById('categorias');
                    select.addEventListener('change', () => {
                        let selectOption = select.options[select.selectedIndex];
                        if (selectOption.value) {
                            window.location.href = selectOption.value;
                        }
                    });
                    </script>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link"><a class="a--header" href="registro.php">Registro</a></button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link"><a class="a--header" href="login.php">Login</a></button>
              </li>
              <li class="nav-item">
                <button type="button" class="btn-outline nav-link" data-bs-toggle="modal"
                            data-bs-target="#modal-ejemplo">
                            Mi perfil
                        </button>
                        <div class="modal fade" data-bs-backdrop="static" id="modal-ejemplo">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <h4 class="modal-header">Elije una opcion</h4>
                                    <div class="modal-body">
                                        <a class="a--header-modal" href="miperfil.php">Ver perfil</a>
                                        <hr />
                                        <a class="a--header-modal" href="carrito.php">Carrito</a>
                                        <hr>
                                        <a class="a--header-modal" href="cerrarsesion.php">Cerrar sesion</a>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
              </li>
            </ul>
          </div>
          <a class="titulo--pagina" href="#">Vida Agricola</a>
        </nav>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>
