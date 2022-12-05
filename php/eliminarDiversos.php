<?php
    require("conexion.php");
    
    $id = $_POST['id'];

    $sql1 = "SELECT * FROM diversos WHERE id = '$id'";

    $resultado1 = mysqli_query($conexion,$sql1);

    $numero_registros = mysqli_num_rows($resultado1);


        $sql = "DELETE FROM diversos WHERE id = $id";

        $resultado = mysqli_query($conexion,$sql);

        if(!$resultado){

            echo("Error al eliminar el Producto verique que exista el Producto");

        }else{
            
            echo("Producto eliminado con exito");
        }

?>