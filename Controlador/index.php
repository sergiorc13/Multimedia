<?php

//Incluir el modelo ORM
include_once('../Modelo/ORM.inc.php');

//Incluir el controlador general
include_once('../Controlador/controladorGeneral.php');

//Mostrar la vista principal
include_once('../Vistas/Principal.php');

if(isset ($_GET['vista']) && $_GET['vista'] === "peliculas"){
    include_once('../Vistas/vistaPeliculas.php');
} elseif (isset ($_GET['vista']) && $_GET['vista'] === "libros"){
    include_once('../Vistas/vistaLibros.php');
} elseif (isset ($_GET['vista']) && $_GET['vista'] === "discos"){
    include_once('../Vistas/vistaDiscos.php');
} elseif (isset($_GET['vista']) && $_GET['vista'] === "mostrarPelicula") {
    // Cargar vistaMostrarPelicula y pasar la película como datos
    include_once "../Vistas/mostrarPelicula.php";
} elseif (isset($_GET['vista']) && $_GET['vista'] === "mostrarLibro") {
    // Cargar vistaMostrarLibro y pasar el libro como datos
    include_once "../Vistas/mostrarLibro.php";
} elseif (isset($_GET['vista']) && $_GET['vista'] === "mostrarDisco") {
    // Cargar vistaMostrarDisco y pasar el disco como datos
    include_once "../Vistas/mostrarDisco.php";
} elseif (isset($_GET['vista']) && $_GET['vista'] === "agregarPelicula") {
    include_once "../Vistas/agregarPeliculaForm.php";
} elseif (isset($_GET['vista']) && $_GET['vista'] === "agregarLibro") {
    include_once "../Vistas/agregarLibroForm.php";
} elseif (isset($_GET['vista']) && $_GET['vista'] === "agregarDisco") {
    include_once "../Vistas/agregarDiscoForm.php";
} 
?>


