<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blen artesanales - Art</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
  <header>
    <div class="gratis">
      <p>
      <strong> Envío GRATIS a partir de $10.000 </strong>
      <strong>/cuotas sin interes "Ahora 3"</strong>
     </p>
     </div>
     <div class="imagen">
    <img src="./css/imagenes/logo5.png" alt="logo">
    </div>
  </header>
  <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="listarencards.php">Catalogo</a>
                <a href="tepuros.php">Té puros</a>
                <a href="blends.php">Blends</a>
                <a href="Infusiones.php">Infusiones herbales</a>
                <a href="accesorios.php">Accesorios</a>
            </div>
            <div class="admin">
              <a href="login.html">Ingresar</a>
          </div>
          </div>
        </div>
  </nav>
 
   <!--CARRUSEL-->
   <div class="carrusel d-none d-sm-block">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item imagen1 active">
                <img src="./css/imagenes/2.png" class="d-block w-100" alt="imagen1">
                <div class="carousel-caption d-none d-sm-block capa">
                 
                </div>
              </div>
              <div class="carousel-item imagen1">
                <img src="./css/imagenes/1.png"  class="d-block w-100" alt="imagen2">
                <div class="carousel-caption d-none d-sm-block capa">
                 
                </div>
              </div>
              <div class="carousel-item imagen1">
                <img src="./css/imagenes/3.png"  class="d-block w-100" alt="imagen3">
                <div class="carousel-caption d-none d-sm-block capa">
              
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    
  
  

    <?php require('./footer.php') ?>   

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>