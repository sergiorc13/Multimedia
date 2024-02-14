<?php
include_once('../Modelo/ORM.inc.php');

$orm = new ORM();

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Recoger datos del formulario
    $nuevoDisco = array(
        'titulo' => $_POST['titulo'],
        'publicacion' => $_POST['publicacion'],
        'ano' => $_POST['ano'],
        'genero' => $_POST['genero'],
        'grupoOMusico' => $_POST['grupoOMusico'],
        'duracion' => $_POST['duracion'],
        'iswc' => $_POST['iswc'],
        'imagen' => $_POST['imagen']
    );

    // Insertar el nuevo disco
    $idInsertado = $orm->insert('discos', $nuevoDisco);

    if ($idInsertado != -1) {
        header("Location: ../Controlador/index.php");
        echo "Disco insertado con éxito. ID del nuevo registro: $idInsertado";
    } else {
        echo "Error al insertar el disco";
    }
} else {
    // Mostrar el formulario
    include_once('../Vistas/agregarDiscoForm.php');
}
?>
