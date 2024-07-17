<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="../Estilos/estilo.css">
    <link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">
    <link rel="stylesheet" type="text/css" href="../Estilos/formulario.css">
         <script src="../js/javascript.js"></script>
</head>
<body>
       
        
    <div class="encabezado">
    <a href="inicio.php"> <img src="../Imagen/logo.jpg" alt="Logo" class="logo" align="left"></a>
    <div class="user-info">
 
    <?php if (isset($_SESSION['ID'])): ?>
        <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['Nombre']); ?>! </p> 
        
    <?php else: ?>
        <a href="iniciosesion.php" class="btn"><button>Iniciar Sesión</button></a>
    <?php endif; ?>
    </div>
  </div>
      
          
        <header class="header">
       <nav>   

        <ul class="nav-links">
            <li><a href="../inicio.php" >Inicio</a></li>
            <li><a href="populares.php" >Más populares</a></li>
            <li><a href="Implementacion.php" >Implementación</a></li>
            <li><a href="Preguntas.php" >Preguntas Frecuentes</a></li>
            <li class="dropdown">
            <a href="#" class="dropbtn">Entregables</a>
            <div class="dropdown-content">
                <a href="entregable.php">Entregable 3</a>
                <a href="entregable4.php">Entregable 4</a>
                <a href="Entregable5/leer.php">Entregable 5</a>
            </div>
        </li>
        </ul>
        <div class="burger active" aria-label="Abrir menu de navegacion">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        </nav>
    </header>
    <section>
    <table border="0">
    <tr>
        <td colspan="2"><center><strong>TIPOS DE METODOLOGÍAS ÁGILES</strong></center></td>

    </tr>
    <tr>

        <td><br><br>MÁS POPULARES</td>
    </tr>
    <tr>
        <td>Scrum:<br><hr> Scrum es un marco de trabajo ágil centrado en equipos que trabajan de manera colaborativa para desarrollar productos de forma iterativa e incremental. Se organiza en sprints, que son períodos de tiempo fijos (generalmente de 2 a 4 semanas) donde se planifica, desarrolla y entrega un incremento del producto. Scrum se basa en roles definidos (Product Owner, Scrum Master, y el equipo de desarrollo), artefactos (Product Backlog, Sprint Backlog, Incremento) y eventos (Sprint Planning, Daily Scrum, Sprint Review, Sprint Retrospective) para guiar el proceso de desarrollo.</td>
        <td><center><img src="../Imagen/imagen8.jpg" width="400" height="250"></img></center></td>
    </tr>
    <tr>
        <td><center><img src="../Imagen/imagen10.jpg" width="400" height="250"></img></center></td>
        <td>Kanban:<br><hr> Kanban es un enfoque de gestión visual que se centra en la mejora continua del flujo de trabajo. Utiliza un tablero Kanban para visualizar las tareas y el flujo de trabajo, que se dividen en columnas representando los diferentes estados del proceso. El objetivo es limitar el trabajo en curso (WIP) para mejorar la eficiencia y reducir el tiempo de ciclo. No tiene roles, artefactos o eventos predeterminados como Scrum, lo que lo hace más flexible y adaptable a diferentes contextos.</td>
    </tr>
    <tr>
        <td>Extreme Programming (XP):<br><hr> XP es una metodología ágil que se centra en las prácticas de ingeniería de software para mejorar la calidad del producto y la satisfacción del cliente. Se basa en principios como retroalimentación continua, comunicación cercana con el cliente, simplicidad, pruebas unitarias, integración continua, refactorización y programación en parejas. XP promueve un enfoque de desarrollo de software muy colaborativo y orientado a la entrega de valor de manera rápida y constante.</td>
        <td><center><img src="../Imagen/imagen11.png" width="400" height="300"></img></center></td>
    </tr>
    <tr>
        <td><center><img src="../Imagen/imagen12.jpg" width="400" height="250"></img></center></td>
        <td>Lean:<br><hr> Lean se basa en los principios de la manufactura esbelta y se enfoca en eliminar el desperdicio y optimizar el flujo de trabajo. Se centra en entregar valor al cliente de manera eficiente y continua, eliminando actividades que no agregan valor. Utiliza herramientas como el mapeo del flujo de valor, la gestión visual y la mejora continua para optimizar los procesos y reducir el tiempo de entrega.</td>
    </tr>

     
     </table>
 </section>
 <footer class="body2">
    
    <div class="footer-bottom">
        <p>&reg; Registrado por Fabiana Diaz y Fabiana Geronimo 2024</p>
    </div>
</footer>
</body>
</html>