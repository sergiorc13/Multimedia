<?php
require_once("../Modelo/ORM.inc.php"); 
include_once("../Controlador/controladorGeneral.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $table = "peliculas";

    // Intentamos realizar la eliminación suave utilizando la función del ORM
    $result = ORM::softDelete($table, $id);

    if ($result > 0) {
        // Éxito al eliminar suavemente
        header("Location: principal");
        exit();
    } else {
        // Error al eliminar suavemente
        echo "error al eliminar";
    }
} else {
    // Manejo de solicitud incorrecta
    echo "Solicitud incorrecta.";
}
?>
