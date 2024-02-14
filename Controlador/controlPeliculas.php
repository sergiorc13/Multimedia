<?php
include_once('../Modelo/ORM.inc.php');

$orm = new ORM();

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Recoger datos del formulario
    $nuevaPelicula = array( 
        'titulo' => $_POST['titulo'],
        'publicacion' => $_POST['publicacion'],
        'ano' => $_POST['ano'],
        'genero' => $_POST['genero'],
        'director' => $_POST['director'],
        'duracion' => $_POST['duracion'],
        'reparto' => $_POST['reparto'],
        'imagen' => $_POST['imagen']
    );

    // Insertar la nueva película
    $idInsertado = $orm->insert('peliculas', $nuevaPelicula);

    if ($idInsertado != -1) {
        header("Location: ../Controlador/index.php");
        echo "Película insertada con éxito. ID del nuevo registro: $idInsertado";
    } else {
        echo "Error al insertar la película";
    }
} else {
    // Mostrar el formulario
    include_once('../Vistas/agregarPeliculaForm.php');
}

?>
