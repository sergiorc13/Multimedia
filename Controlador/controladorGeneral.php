<?php
$orm = new ORM();

// Obtener datos de películas con información de multimedia
$peliculas = $orm->findAllWithMultimedia('peliculas');
$libros = $orm->findAllWithMultimedia('libros');
$discos = $orm->findAllWithMultimedia('discos');

// Mostrar según el id si se proporciona en la URL
$id = isset($_GET['id']) ? $_GET['id'] : null;
$pelicula = $orm->find('Peliculas', $id);
$libro = $orm->find('Libros', $id);
$disco = $orm->find('Discos', $id);
?>