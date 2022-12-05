<?php

    require("conexion.php");

    $id =$_POST['id'];

    $nombre = $_POST['nombre'];

    $precio =$_POST['precio'];

    $descripcion = $_POST['total'];

    $foto = $_POST['fecha'];

    $sql1 = "SELECT * FROM consolas WHERE id = '$id'";

    $resultado1 = mysqli_query($conexion,$sql1);

    $numero_registros = mysqli_num_rows($resultado1);

    if($numero_registros !=0){
        //sql para actualizar la tarea
        $sql = "UPDATE consolas SET nombre_pro = '$nombre', precio ='$precio', descripcion ='$descripcion',
        foto ='$foto',WHERE id = $id";

        //ejecutar la sentencia sql
        $resultado = mysqli_query($conexion,$sql);

        if($resultado == false){
            echo("Error actualizar el Producto ".mysqli_error($conexion));
        }else{
            echo("Producto actualizado con exito");
        }       
    }else{
        echo("No de puede actualizar un Producto que no existe");
    }
?>