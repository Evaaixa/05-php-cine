<?php

function obtener_peliculas(){
    // importar conexión
    require 'database.php';

    // preparar la consulta
    $sql = "SELECT * FROM pelicula;";

    // realizar la consulta
    $resultado = mysqli_query($conexion, $sql);
    $datos = mysqli_fetch_assoc($resultado);

    echo '<pre>';
    var_dump($resultado);
    echo '</pre>';
}

obtener_peliculas();