<?php
session_start();
$varsesion=$_SESSION['correo'];
if($varsesion == null ){
    echo "no tienes acceso";
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Estilos/estiloC.css">
	<script src="../js/funcion.js"></script>
</head>
<body>
        <div class="encabezado" >
          <a href="../inicio.php"> <img src="../Imagen/logo.jpg" alt="Logo" class="logo" align="left"></a>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <a href="../cerrarsesion.php" class="btn"><button>Cerrar Sesion</button></a>
          </div>
    <header class="header">
       <nav>   

        <ul class="nav-links">
            <li><a href="../inicio.php" >Inicio</a></li>
            <li><a href="populares.php" >Más populares</a></li>
            <li><a href="Implementacion.php" >Implementación</a></li>
            <li><a href="Preguntas.php" >Preguntas Frecuentes</a></li>
            <li><a href="../entregable.php">Entregable 3 </a></li>
            <li><a href="../entregable4.php">Entregable 4 </a></li>
            <li><a href="../Entregable5/leer.php">Entregable 5 </a></li>
        </ul>
        <div class="burger active" aria-label="Abrir menu de navegacion">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        </nav>
    </header>
        <div class="container">
            <h1>Bienvenido</h1><br><br>
        <h1>Deja un comentario</h1>
        <br>
        <form id="comment-form">
        	
            <textarea id="message" placeholder="Tu comentario" required></textarea>
            <button type="submit">Enviar</button>
            <br>
        </form>
        <div id="comments-section">
            <h2>Comentarios</h2>
            <div id="comments"></div>
        </div>
    </div>
</body>
</html>