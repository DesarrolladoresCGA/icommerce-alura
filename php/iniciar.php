<?php
    $email = $_POST['txtCorreo'];
    $password = $_POST['txtContrasena'];
    
    require("conexion.php");

    try{

        //para que php respete ls tildes en la base de datos
        mysqli_set_charset($conexion, "UTF8");

        //consultar SQL si el usuario esta registrado e la BBDD
        $sql = "SELECT * FROM administrador WHERE correo ='$email' AND password ='$password'";

        $resultado = mysqli_query($conexion,$sql);

        $numero_registros = mysqli_num_rows($resultado);

        if($numero_registros !=0){
            header("location:../php/menuAdministrador.php");
        }else{
            //si el usuario no exite no lo dejamospasar a la otra ventana
            header("location:../iniciarSecion.html");
        }

    }catch(Exception $e){
        die("Error: ".$e->getMessage());
    }

?>