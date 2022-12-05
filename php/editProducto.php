<?php
    $reId = $_POST['txtid'];

    require("conexion.php");

    $sql = "SELECT * FROM consolas WHERE id= $reId";

    $resultado = mysqli_query($conexion,$sql);

    while($fila = mysqli_fetch_array($resultado)){

        //identificar los elementos y almacenarlos en las variables
        $reCategoria = $fila["categoria"];
        $reNombre = $fila["nombre_pro"];
        $rePrecio = $fila["precio"];
        $reDescripcion = $fila["descripcion"];
        $reFoto = $fila["foto"];

        $urlFoto = "/pruevas PHP/icommer/img/" . $reFoto;
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilosMenuAdmin.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row logo">
                <div class="logo-logo col-md-2 col-ms-4">
                    <img src="../img/Logo.png" alt="logo">
                </div>
                <div class="boton-header col-md-10 col-ms-8 d-flex justify-content-between">
                    <input type="search" placeholder="¿Que deseas buscar?" class="buscar">
                    <form action="../php/menuAdministrador.php">
                        <input type="submit" value="Menú Administrador" id="btnMenuAdminitrador">
                    </form>
                </div>
            </div>
            <div class="row imagen">
                <div class="imagen-header">
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="formulario col-lg-12 d-flex justify-content-center">
            <form action="editarProducto.php" class="col-12 col-md-11 col-lg-4" method="post" enctype="multipart/form-data">
                <div class="mb-3"style=" text-align: center;">
                    <img src="<?php echo("$urlFoto") ?>">
                    <input type="hidden" id="url" name="url" value="<?php echo("$urlFoto") ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo("$reId")?>">
                </div>
                <div class="mb-3">
                    <h2 class="mb-3" style=" text-align: center;">Editar producto</h2>
                    <input type="file" class="form-control" name="img_imagen">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="cbxCategorias">
                        <?php
                            if($reCategoria == 1){
                                echo('<option value="1">Consolas</option>');
                            }else if ($reCategoria == 2){
                                echo('<option value="2">Star Wars</option>');
                            }elseif ($reCategoria == 3){
                                echo('<option value="3">Diversos</option>');
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="txtNombre" value="<?php echo("$reNombre")?>">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="txtPrecio" value="<?php echo("$rePrecio")?>">
                </div>
                <div class="mb-3">
                    <textarea id="mensaje"  name="txtDescripcion" class="form-control" ><?php echo("$reDescripcion")?></textarea>
                </div>
                <input type="submit" value="Guardar producto" class="btn btn-primary col-12">
            </form>
        </div>
    </section>
    <section class="row pie-pagina">
        <div class="pie-logo-quienes-somos col-lg-6  d-flex justify-content-between">
            <div class="pie-logo col-lg-4">
                <img src="../img/Logo.png" alt="">
            </div>
            <div class="pie-quienes-somos col-lg-8 d-flex justify-content-center">
                <div class=" d-flex flex-column">
                    <a href="#">Quienes somos</a>
                    <a href="#">Politicas de privacidad</a>
                    <a href="#">Programa de fidelidad</a>
                    <a href="#">Nuestras tiendas</a>
                    <a href="#">Quiero ser franquiciado</a>
                    <a href="#">Anuncie aqui</a>
                </div>
            </div>
        </div>
        <div class="pie-formulario col-lg-6 mb-3">
            <form action="">
                <div class="mb-3">
                    <h3>Hable con nosotros</h3>
                    <input type="text" class="form-control" placeholder="Nombre:">
                </div>
                <div class="mb-3">
                    <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Escribe tu mensaje:"></textarea>
                </div>
                <input type="button" value="Enviar mensaje" class="btn btn-primary">
            </form>
        </div>
    </section>
    <footer class="d-flex justify-content-center">
        <h3>Desarrollado por luis de tal 2022</h3>
    </footer>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>