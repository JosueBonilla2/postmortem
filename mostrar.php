<?php
    include "conexion.php";

    $sql = $con->prepare("SELECT id,nombre,precio,sabor,cant_alcohol FROM licor WHERE activos=1");
    $sql->execute();
    $resultado = $con->prepare()
?>
