<?php

    require("conexion.php");

    //recibimos los datos de la imagen
    $nombre_imagen = $_FILES['img_imagen']['name'];
    $tipo_imagen = $_FILES['img_imagen']['type'];
    $tamano_imagen = $_FILES['img_imagen']['size'];

    $reId = 0;
    $reCategoria = $_POST['cbxCategorias'];
    $reNombre = $_POST['txtNombre'];
    $rePrecio = $_POST['txtPrecio'];
    $reDescripcion = $_POST['txtDescripcion'];
    $reFoto = $nombre_imagen;

    //controlar el tipo de archivo que solo suba imagenes
    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {

    //vamos a limitar el peso de las imagenes que se van a subir
    //1000000 = 1MB
        if ($tamano_imagen <= 1000000) {

            //Ruta de la carpeta destino del servidor Xampp
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/pruevas PHP/icommer/img/';

            //Movemos la imagen de la carpeta temporal al direectorio escogido
            move_uploaded_file($_FILES['img_imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);

            //***********************CATEGORIA DE CONSOLAS********************* */
            if($reCategoria == 1){

                $sql = "INSERT INTO consolas (id,categoria,nombre_pro,precio,descripcion,foto) VALUES (?,?,?,?,?,?)";
            
                $resultado = mysqli_prepare($conexion, $sql);
                
                $datos = mysqli_stmt_bind_param($resultado, "ssssss", $reId,$reCategoria,$reNombre,$rePrecio,$reDescripcion,$reFoto);
                
                $datos = mysqli_stmt_execute($resultado);
                
                if ($datos == false) {
                    echo ("Error al insertar el producto, Posiblemente ya se encuntra registrado");
                } else {

                    //cargar la pagina de productos de nuevo
                    header("location:addProducto.php");
                
                    mysqli_stmt_close($resultado);
                }

            }

            //***********************CATEGORIA DE STAR WARS********************* */
            if($reCategoria == 2){
                $sql = "INSERT INTO starwars (id,categoria,nombre_pro,precio,descripcion,foto) VALUES (?,?,?,?,?,?)";
            
                $resultado = mysqli_prepare($conexion, $sql);
                
                $datos = mysqli_stmt_bind_param($resultado, "ssssss", $reId,$reCategoria,$reNombre,$rePrecio,$reDescripcion,$reFoto);
                
                $datos = mysqli_stmt_execute($resultado);
                
                if ($datos == false) {
                    echo ("Error al insertar el producto, Posiblemente ya se encuntra registrado");
                } else {

                    //cargar la pagina de productos de nuevo
                    header("location:addProducto.php");
                
                    mysqli_stmt_close($resultado);
                }
            }

            //***********************CATEGORIA DE DIVERSOS********************* */
            if($reCategoria == 3){
                $sql = "INSERT INTO diversos (id,categoria,nombre_pro,precio,descripcion,foto) VALUES (?,?,?,?,?,?)";
            
                $resultado = mysqli_prepare($conexion, $sql);
                
                $datos = mysqli_stmt_bind_param($resultado, "ssssss", $reId,$reCategoria,$reNombre,$rePrecio,$reDescripcion,$reFoto);
                
                $datos = mysqli_stmt_execute($resultado);
                
                if ($datos == false) {
                    echo ("Error al insertar el producto, Posiblemente ya se encuntra registrado");
                } else {

                    //cargar la pagina de productos de nuevo
                    header("location:addProducto.php");
                
                    mysqli_stmt_close($resultado);
                }
            }
           

        } else {
            echo ("El tamaño de la imagen deve ser meñor a 1MB");
        }
    }else {
        echo ("Solo se puede subir imagenes jpeg/jpg/png/gif");
    }

?>
