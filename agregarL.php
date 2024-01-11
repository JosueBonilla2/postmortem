<?php
    include "conexion.php";

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $sabor = $_POST['sabor'];
    $cantidad = $_POST['cantidad'];

    $sql = mysqli_query($con, "INSERT INTO licor (id,nombre,precio,sabor,cant_alcohol) VALUES (0,'$nombre','$precio','$sabor','$cantidad')");

    if($sql){
        echo "<br> Licor agregado";
    }else{
        echo "<br> Error" .$sql. "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
    
?>