<?php
include('../conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM datos WHERE ID = $id";

    if ($con->query($sql) === TRUE) {
        header("Location: leer.php");
    } else {
        echo "Error eliminando el registro: " . $con->error;
    }
}

$con->close();
?>
