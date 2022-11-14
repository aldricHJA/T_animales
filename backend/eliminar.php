<?php
include "../conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];

    $sql = "DELETE FROM t_animales WHERE id = '$id'";
    $respuestas = mysqli_query($conexion, $sql);



    if ($respuestas){
        header('location:../index.php');
    }else {
        echo "No se pudo eliminar";
    }


?>