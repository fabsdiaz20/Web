<?php
include('../conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM datos WHERE ID = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "Usuario no encontrado.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $genero = $_POST['Genero'];
    $opciones = $_POST['opciones'];
    $contra = $_POST['contra'];
    $usuario = $_POST['usuario'];

    $sql = "UPDATE datos SET Nombre='$nombre', Apellido='$apellido', Correo='$correo', Fecha_Nacimiento='$fecha', Genero='$genero',Grado='$opciones', pass='$contra', Usuario='$Usuario' WHERE ID=$id";

    if ($con->query($sql) === TRUE) {
        header("Location: leer.php");
    } else {
        echo "Error actualizando el registro: " . $con->error;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" type="text/css" href="../Estilos/crud.css">
</head>
<body>
    <h2>Editar Usuario</h2>
    <form method="post" action="actualizar.php">
        <input type="hidden" name="id" value="<?php echo $user['ID']; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $user['Nombre']; ?>"><br><br>
        Apellido: <input type="text" name="apellido" value="<?php echo $user['Apellido']; ?>"><br><br>
        Correo: <input type="email" name="correo" value="<?php echo $user['Correo']; ?>"><br><br>
        Fecha:<input type="date" name="fecha" value="<?php echo $user['Fecha_Nacimiento'];?>"><br><br>
        Genero:<input type="text" name="Genero" value="<?php echo $user['Genero'];?>"><br><br>
        Grado:<input type="text" name="opciones" value="<?php echo $user ['Grado'];?>"><br><br>
        Contraseña:<input type="text" name="contra" value="<?php echo $user['pass'];?>"><br><br>
        Usuario:<input type="text" name="usuario" value="<?php echo $user['Usuario'];?>"><br><br>

        <input type="submit" value="Actualizar">
    </form>
</body>

</html>
