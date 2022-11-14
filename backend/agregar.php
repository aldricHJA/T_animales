<?php 

include "../conexion.php";
$conexion = conexion();
$nombre = $_POST ['nombre'];
$region = $_POST ['region'];
$comida = $_POST ['comida'];
$sql = "INSERT INTO t_animales (nombre, region, comida) Value ('$nombre', '$region', '$comida')";
//$sql = "INSERT INTO t_animales (region) Value ('$region')";
//$sql = "INSERT INTO t_animales (comida) value ('$comida')";
$respuestas = mysqli_query($conexion, $sql);



if($respuestas){
    header('location:../index.php');
}else{
    echo "No se pudo insertar";
}
?>