<?php
require_once("../Modelo/ORM.inc.php"); 
include_once("../Controlador/controladorGeneral.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $table = "peliculas";

    // Intentamos realizar la modificación utilizando la función del ORM
    $result = ORM::updateGuardadoStatus($table, $id);

    if ($result > 0) {
        // Éxito al modificar
        header("Location: principal");
        exit();
    } else {
        echo "Error al modificar";
    }
} else {
    // Manejo de solicitud incorrecta
    echo "Solicitud incorrecta.";
}
?>
