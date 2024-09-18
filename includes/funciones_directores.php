<?php

function obtener_directores(){
    // importar conexión
    require 'database.php';

    // preparar la consulta
    $sql = "SELECT * FROM director;";

    // realizar la consulta
    $resultado = mysqli_query($conexion, $sql);
   return $resultado;
}

