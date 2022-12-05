<?php
    require("conexion.php");

    //recibimos los datos de la imagen
    $nombre_imagen = $_FILES['img_imagen']['name'];
    $tipo_imagen = $_FILES['img_imagen']['type'];
    $tamano_imagen = $_FILES['img_imagen']['size'];

    $reId = $_POST['id'];
    $reCategoria = $_POST['cbxCategorias'];
    $reNombre = $_POST['txtNombre'];
    $rePrecio = $_POST['txtPrecio'];
    $reDescripcion = $_POST['txtDescripcion'];
    $reUrl = $_POST['url'];
    $reFoto = $nombre_imagen;

    //controlar el tipo de archivo que solo suba imagenes
    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {

        //vamos a limitar el peso de las imagenes que se van a subir
        //1000000 = 1MB
        if ($tamano_imagen <= 1000000) {

            //Ruta de la carpeta destino del servidor Xampp
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/pruevas PHP/icommer/img/';

            //si no hay nada en la carpeta file
            if($carpeta_destino = ""){
                $carpeta_destino = $reUrl;

            }

            //Movemos la imagen de la carpeta temporal al direectorio escogido
            move_uploaded_file($_FILES['img_imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);

            //***********************CATEGORIA DE CONSOLAS********************* */
            if($reCategoria == 1){
                //sql para actualizar la tarea
                $sql = "UPDATE consolas SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio',
                descripcion ='$reDescripcion', foto ='$reFoto' WHERE id = $reId";

                //ejecutar la sentencia sql
                $resultado = mysqli_query($conexion,$sql);

                if($resultado == false){
                    echo("Error actualizar el Producto ".mysqli_error($conexion));
                }else{
                    //cargar la pagina de productos de nuevo
                    header("location:menuAdministrador.php");
                }       
            }
            //***********************CATEGORIA DE START WARS********************* */
            if($reCategoria == 2){
                //sql para actualizar la tarea
                $sql = "UPDATE starwars SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio',
                descripcion ='$reDescripcion', foto ='$reFoto' WHERE id = $reId";

                //ejecutar la sentencia sql
                $resultado = mysqli_query($conexion,$sql);

                if($resultado == false){
                    echo("Error actualizar el Producto ".mysqli_error($conexion));
                }else{
                    //cargar la pagina de productos de nuevo
                    header("location:menuAdministrador.php");
                }       
            }
                    //***********************CATEGORIA DE DIVERSOS********************* */
            if($reCategoria == 3){
                //sql para actualizar la tarea
                $sql = "UPDATE diversos SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio',
                descripcion ='$reDescripcion', foto ='$reFoto' WHERE id = $reId";

                //ejecutar la sentencia sql
                $resultado = mysqli_query($conexion,$sql);

                if($resultado == false){
                    echo("Error actualizar el Producto ".mysqli_error($conexion));
                }else{
                    //cargar la pagina de productos de nuevo
                    header("location:menuAdministrador.php");
                }       
            }
        }
    }else{
        //***********************CATEGORIA DE CONSOLAS********************* */
        if($reCategoria == 1){
            //sql para actualizar la tarea
            $sql = "UPDATE consolas SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio', descripcion ='$reDescripcion' WHERE id = $reId";

            //ejecutar la sentencia sql
            $resultado = mysqli_query($conexion,$sql);

            if($resultado == false){
                echo("Error actualizar el Producto ".mysqli_error($conexion));
            }else{
                //cargar la pagina de productos de nuevo
                header("location:menuAdministrador.php");
            }       
        }
//***********************CATEGORIA DE START WARS********************* */
        if($reCategoria == 2){
            //sql para actualizar la tarea
            $sql = "UPDATE starwars SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio',
            descripcion ='$reDescripcion' WHERE id = $reId";

            //ejecutar la sentencia sql
            $resultado = mysqli_query($conexion,$sql);

            if($resultado == false){
                echo("Error actualizar el Producto ".mysqli_error($conexion));
            }else{
                //cargar la pagina de productos de nuevo
                        header("location:menuAdministrador.php");
            }       
        }
        //***********************CATEGORIA DE DIVERSOS********************* */
        if($reCategoria == 3){
            //sql para actualizar la tarea
            $sql = "UPDATE diversos SET categoria = '$reCategoria', nombre_pro ='$reNombre', precio ='$rePrecio',
            descripcion ='$reDescripcion' WHERE id = $reId";

            //ejecutar la sentencia sql
            $resultado = mysqli_query($conexion,$sql);

            if($resultado == false){
                echo("Error actualizar el Producto ".mysqli_error($conexion));
            }else{
                //cargar la pagina de productos de nuevo
                header("location:menuAdministrador.php");
            }       
        }
    }
?>