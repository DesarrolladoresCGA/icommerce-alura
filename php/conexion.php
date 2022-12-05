<?php

    $conexion = mysqli_connect('localhost','root','','ecommerce');  

    if (mysqli_connect_errno()) {
        echo ("Error al conectarse con la BBDD");
        //despues de mostrar el error hay que salir de el codigo PHP
        exit();
    }
?>