<?php
    include "../conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $region = $_POST['region'];
    $comida = $_POST['comida'];

    $sql = "UPDATE t_animales SET nombre = '$nombre', region = '$region', comida = '$comida' WHERE id = '$id'";

    $respuestas = mysqli_query($conexion, $sql);



    if ($respuestas) {
        header('location:../index.php');
    }else{
        echo "no se puede actualizar";
    }

?>