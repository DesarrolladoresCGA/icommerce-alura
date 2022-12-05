<!DOCTYPE html>
<html lang="en">
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
                    <input type="submit" value="Menú Administrador" id="btnMenuAdminitrador">
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
            <form action="cargarImg.php" class="col-12 col-md-11 col-lg-4" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <h3 class="mb-3">Agregar nuevo producto</h3>
                    <input type="file" class="form-control" name="img_imagen" placeholder="URL de imagen:">
                </div>
                <div class="mb-3">
                    <select class="form-select" name="cbxCategorias">
                        <option value="1">Consolas</option>
                        <option value="2">Star Wars</option>
                        <option value="3">Diversos</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre del producto:">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="txtPrecio" placeholder="Precio del producto:">
                </div>
                <div class="mb-3">
                    <textarea id="mensaje"  name="txtDescripcion" class="form-control" placeholder="Descripcion del producto:"></textarea>
                </div>
                <input type="submit" value="Agregar producto" class="btn btn-primary col-12">
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
    <script src="../js/Administrador.js"></script>
</body>
</html>