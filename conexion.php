<?php 
function conexion (){
    $servidor = 'localhost';//127.0.0.1
    $usuario = 'root';
    $password = ''; //por defecto no tiene password
    $base = 'webconexion1';
    $puerto = 3306;

    $conexion = mysqli_connect(
        $servidor, 
        $usuario,
        $password,
        $base,
        $puerto
    );
    return $conexion;
}
?>