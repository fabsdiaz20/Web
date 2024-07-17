<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['Genero'];
    $correo = $_POST['correo'];
    $opciones = $_POST['opciones'];
    $contra = $_POST['contra'];

    // Crear conexión
    $con = new mysqli($host, $user, $pass, $db);

    // Verificar conexión
    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }

    // Construir la consulta SQL sin preparar
    $sql = "INSERT INTO datos (Nombre, Apellido, Fecha_Nacimiento, Genero, Correo, Grado, pass, Usuario) VALUES ('$nombre', '$apellido', '$fecha', '$genero', '$correo', '$opciones', '$contra', '$usuario')";

    // Ejecutar consulta SQL
    if ($con->query($sql) === TRUE) {
        
        header("Location: iniciosesion.php");
    }

} 
?>