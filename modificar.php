<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion=mysqli_connect("127.0.0.1","root","");
 mysqli_select_db($conexion,"tiendadete");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];
// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM productos WHERE id=$id";
// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$repuesta=mysqli_query ($conexion, $consulta);
// 5) Transformamos el registro obtenido a un array
$datos=mysqli_fetch_array($repuesta);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificar</title>
 
        <link rel="stylesheet" href="./css/stilos.css">
    </head>
    <body>

        <header>
            <div class="imagen">
            <img src="./css/imagenes/logo5.png" alt="logo">
            </div>
        </header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="listar.php">Volver</a>
                    </div>
                </div>
            </div>
        </nav>

        <?php
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $tipo_de_producto=$datos["tipo_de_producto"];
        $categoria=$datos["categoria"];
        $variedad=$datos["variedad"];
        $gramos=$datos["gramos"];
        $precio=$datos["precio"];
        $imagen=$datos['imagen'];
        ?>

        

        <h2>Modificar producto</h2>
        <p>Ingrese los nuevos datos.</p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>tipodeproducto</label>
            <input type="text" name="tipo_de_producto"  value="<?php echo "$tipo_de_producto"; ?>">
            <label>categoria</label>
            <input type="text" name="categoria"  value="<?php echo "$categoria"; ?>">
            <label>variedad</label>
            <input type="text" name="variedad"  value="<?php echo "$variedad"; ?>">
            <label>gramos</label>
            <input type="text" name="gramos"  value="<?php echo "$gramos"; ?>">
            <label>Precio</label>
            <input type="text" name="precio"  value="<?php echo "$precio"; ?>">
            <label>Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="listar.php">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
            // addslashes(file_get_contents($_FILES['ID NOMBRE DE LA IMAGEN EN EL FORMULARIO']['tmp_name']))
            $tipo_de_producto=$_POST['tipo_de_producto'];
            $categoria=$_POST['categoria'];
            $variedad=$_POST['variedad'];
            $gramos=$_POST['gramos'];
            $precio=$_POST['precio'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE productos SET tipo_de_producto ='$tipo_de_producto', categoria='$categoria', variedad='$variedad', gramos='$gramos',  precio='$precio', imagen='$imagen' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);
            // a) rederigir a index
            header('location: listar.php');
          } ?>

    </body>
</html>
