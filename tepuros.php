<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilos.css">

  <title>Todos los productos</title>

</head>
<body>


<!--Header-->
  <header>

  <div class="gratis">
      <p>
      <strong>Envío GRATIS por compras sobre $10.000 </strong>
     </p>
     </div>



        <div class="imagen">
        <img src="./css/imagenes/logo5.png" alt="logo">
        </div>
  </header>

  <!-- Nav -->

  <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="index.php">Inicio</a>
           
                <a href="listarencards.php">Catalogo</a>
                <a href="tepuros.php">te</a>
                <a href="infusiones.php">Infusiones herbales</a>
                <a href="accesorios.php">Accesorios</a>
               
            </div>
            
          </div>
        </div>
  </nav>

  
  <section>

  <h4>Todos los productos</h4>

    <div class="container">
      <div class="row card-row">


        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tiendadete");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta="SELECT * FROM productos WHERE categoria = 'bebida'";
      

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-2">
            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>"alt="" width="100px" height="100px">
            <div class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['tipo_de_producto']) ?></h3>
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['categoria']) ?></h3>
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['variedad']) ?></h3>
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['gramos']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </div>
           
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  <?php require('./footer.php') ?>
  <!-- JavaScript del bootstrap -->
  <script src="https://kit.fontawesome.com/315fd0feab.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
