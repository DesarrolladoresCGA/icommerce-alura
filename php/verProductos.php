<?php
require("conexion.php");

$sql= ("SELECT * FROM consolas");

$resultado = mysqli_query($conexion,$sql);

if($resultado == false){
    echo("Error no se ha posido Cargar los Productos");
}else{
    $json = array();
    while($fila = mysqli_fetch_array($resultado)){
        $json[] = array(
            'id' => $fila['id'],
            'categoria' => $fila['categoria'],
            'nombre' => $fila['nombre_pro'],
            'precio' => $fila['precio'],
            'descripcion' => $fila['descripcion'],
            'foto' => $fila['foto']
        );
    }
    //convertir objecto json en texto
    $jsonString = json_encode($json);

    echo($jsonString);
}
?>