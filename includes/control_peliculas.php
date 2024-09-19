<?php
session_start();

require 'funciones_peliculas.php';

if(isset ($_POST) && isset ($_POST['metodo'])){
    $metodo = $_POST['metodo'];
}

if(isset($_POST) && isset($_POST['metodo']) && $_POST['metodo'] === 'crear'){
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $director = $_POST['directores'];

    $respuesta = crear_Pelicula($titulo, $precio, $director);

    if($respuesta){
        $_SESSION['mensaje'] = "Los datos se insertaron correctamente.";
        $_SESSION['datos_insertados'] = [
            'titulo' => $titulo,
            'precio' => $precio,
            'director' => $director,
        ];
    }else{
        $_SESSION['mensaje'] = "Error: " . mysqli_connect_error();
    }
    header("Location: ../crearPelicula.php");
    exit();
}

if(isset($_POST["metodo"]) && $_POST['metodo'] === 'delete') {
    $id = $_POST['id'];
    $respuesta = eliminar_pelicula($id);
    if($respuesta){
        echo json_encode(['success'=> true,'message'=> 'Película eliminada']);
    }else{
        echo json_encode(['success'=> false,'message'=> 'Datos inválidos']);
    }
}else{
    // no vienen los datos necesarios
        echo json_encode(['success'=> false,'message'=> 'Método no permitido']);
}

if($metodo === 'modificar') {
    $id = $_POST['id'];
    //llamar a crearPelicula.php
    // pasarle el id de la película a modificar
    header("Location: ../crearPelicula.php?id=");
    exit();
}