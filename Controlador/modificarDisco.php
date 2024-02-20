<?php
require_once("../Modelo/ORM.inc.php"); 
include_once("../Controlador/controladorGeneral.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $table = "discos";

    // Intentamos realizar la eliminación suave utilizando la función del ORM
    $result = ORM::updateGuardadoStatus($table, $id);

    if ($result > 0) {
        // Éxito al modificar
        header("Location: principal");
        exit();
    } else {
       
        echo "error al modificar";
    }
} else {
    // Manejo de solicitud incorrecta
    echo "Solicitud incorrecta.";
}
?>