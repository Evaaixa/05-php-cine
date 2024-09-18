<?php
$conexion = mysqli_connect('localhost', 'root', '', 'cinedb');

// echo '<pre>';
// var_dump($conexion);
// echo '</pre>';
if(mysqli_connect_errno()){
    echo 'La conexión a la base de datos ha fallado'. mysqli_connect_error();
    exit();
}