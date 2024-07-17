<?php
include('conexion.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = mysqli_real_escape_string($con, $_POST['correo']);
    $contra = $_POST['contra']; // Considera usar password_hash() y password_verify() para mayor seguridad

    $consulta = "SELECT * FROM datos WHERE Correo = '$correo' AND pass = '$contra'";
    $resultado = mysqli_query($con, $consulta);
    
    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION['ID'] = $fila['ID'];
        $_SESSION['Nombre'] = $fila['Nombre'];
        $_SESSION['correo'] = $fila['Correo'];
        
        header("Location: inicio.php");
        exit();
    } else {
        $error = "Correo electrónico o contraseña incorrectos";
    }
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de autenticación</title>
</head>
<body>
    <?php if (isset($error)): ?>
        <h1 class="bad">ERROR DE AUTENTICACIÓN</h1>
        <p><?php echo htmlspecialchars($error); ?></p>
        <a href="iniciosesion.php">Volver al inicio de sesión</a>
    <?php endif; ?>
</body>
</html>