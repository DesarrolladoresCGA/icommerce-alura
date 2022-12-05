<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row logo">
                <div class="logo-logo col-md-2 col-ms-4">
                    <img src="img/Logo.png" alt="logo">
                    
                </div>
                <div class="boton-header col-md-10 col-ms-8 d-flex justify-content-between">
                    <input type="search" placeholder="¿Que deseas buscar?" class="buscar">
                    <form action="php/iniciar.php">
                        <input type="submit" value="Login" id="btnLogin">
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
        <section class="row encabezado-pro">
                <div class="titulo-pro col-6">
                    <h2>Star Wars</h2>
                </div>
                <div class="ver-todo col-6">
                    <a href="#"><h6>Ver todo</h6></a>
                </div>
                <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
            </section>
            <section class="row encabezado-pro starwars">
                <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
            </section>
    </section>
    <section>
        <section class="row encabezado-pro">
            <div class="titulo-pro col-6">
                <h2>Consolas</h2>
            </div>
            <div class="ver-todo col-6">
                <a href="#"><h6>Ver todo</h6></a>
            </div>
            <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
        </section>
        <section class="row encabezado-pro consolas">
            <div class="titulo-pro col-6">
                <h2>Consolas</h2>
            </div>
            <div class="ver-todo col-6">
                <a href="#"><h6>Ver todo</h6></a>
            </div>
            <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
        </section>
    </section>
    <section>
    <section class="row encabezado-pro">
                <div class="titulo-pro col-6">
                    <h2>Diversos</h2>
                </div>
                <div class="ver-todo col-6">
                    <a href="#"><h6>Ver todo</h6></a>
                </div>
                <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
            </section>
            <section class="row encabezado-pro diversos">
                <div class="titulo-pro col-6">
                    <h2>Consolas</h2>
                </div>
                <div class="ver-todo col-6">
                    <a href="#"><h6>Ver todo</h6></a>
                </div>
                <!--CODIGO PARA GENERAR LAS CARD CON SUS IMAGGENES-->
            </section>
    </section>
    <section class="row pie-pagina">
        <div class="pie-logo-quienes-somos col-lg-6  d-flex justify-content-between">
            <div class="pie-logo col-lg-4">
                <img src="img/Logo.png" alt="">
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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cod.js"></script>
</body>
</html>