<?php
require_once("../Modelo/ORM.inc.php"); 
include_once("../Controlador/controladorGeneral.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $table = "discos";

    // Intentamos realizar la eliminación suave utilizando la función del ORM
    $result = ORM::softDelete($table, $id);

    if ($result > 0) {
        //Éxito al eliminar suavemente
        header("Location: ../Controlador/index.php");
        exit();
    } else {
        // Error al eliminar suavemente
        echo "eeeh";
    }
} else {
    // Manejo de solicitud incorrecta
    echo "Solicitud incorrecta.";
}
?>