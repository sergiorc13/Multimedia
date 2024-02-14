<?php
include_once('../Modelo/ORM.inc.php');

$orm = new ORM();

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Recoger datos del formulario
    $nuevoLibro = array(
        'titulo' => $_POST['titulo'],
        'publicacion' => $_POST['publicacion'],
        'ano' => $_POST['ano'],
        'genero' => $_POST['genero'],
        'autor' => $_POST['autor'],
        'extension' => $_POST['extension'],
        'isbn' => $_POST['isbn'],
        'imagen' => $_POST['imagen']
    );

    // Insertar el nuevo libro
    $idInsertado = $orm->insert('libros', $nuevoLibro);

    if ($idInsertado != -1) {
        header("Location: ../Controlador/index.php");
        echo "Libro insertado con éxito. ID del nuevo registro: $idInsertado";
    } else {
        echo "Error al insertar el libro";
    }
} else {
    // Mostrar el formulario
    include_once('../Vistas/agregarLibroForm.php');
}
?>
