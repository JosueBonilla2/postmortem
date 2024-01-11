<?php
    include "conexion.php";

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $cel = $_POST['cel'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "INSERT INTO usuario (id,nombre,edad,estado,ciudad,direccion,correo,cel,password) VALUES (0,'$nombre','$edad','$estado','$ciudad','$direccion','$correo','$cel','$password')");

    if($sql){
        echo "<br> usuario agregado";
    }else{
        echo "<br> Error" .$sql. "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
    
?>