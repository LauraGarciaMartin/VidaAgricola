<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img class="imagen" src="images/logo6.png">
    <div class="navbar-brand d-flex">
        <a class="titulo--pagina" href="#">Vida Agricola</a>
      </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><span class="cat">MAQUINARIA</span></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tractores.php">Tractores</a></li>
            <li><a class="dropdown-item" href="cosechadoras.php">Cosechadoras</a></li>
            <li><a class="dropdown-item" href="aperos.php">Aperos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><span class="cat">REMOLQUES</span></li>
            <li><a class="dropdown-item" href="remolques.php">Remolques</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><span class="cat">SEMILLAS</span></li>
            <li><a class="dropdown-item" href="cultivos.php">Semillas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><span class="cat">FERTILIZANTES</span></li>
            <li><a class="dropdown-item" href="abonos.php">Abonos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesion</a>
        </li>
        <li class="nav-item">
          <button type="button" class=" nav-link" data-bs-toggle="modal" data-bs-target="#modal-ejemplo">
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
  </div>
</nav>
</body>
</html>