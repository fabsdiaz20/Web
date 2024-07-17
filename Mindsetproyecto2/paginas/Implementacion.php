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
    <h1><center>Aplicando Metodologías Ágiles en la Práctica </center></h1>
    <br><br>

     <table >
       <ol>
        <tr>
            <td>1. Pasos para la Implementación Ágil:<br>
             <ul type="disc">
                <li>Identificación de objetivos  </li><br>
                <li>Formación del equipo</li> <br>
                <li>Selección de metodología</li> <br>
                <li>Planificación de iteraciones</li> <br>
                <li>Gestión de cambios</li> <br>
                <li>Realización de retrospectivas</li><br><br>
             </ul>
            </td>
            <aside>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6qCkRARKt00?si=9PmjrmZJTNPbIZe8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </aside>
             
         </tr>
        <tr>
            <td colspan="2">2. Consejos para una Implementación Exitosa:<br>
                <ul type="disc">
                <li>Fomentar la colaboración y la comunicación dentro del equipo.</li><br>
                <li>Establecer un ambiente de trabajo flexible y adaptativo.</li><br>
                <li>Promover una cultura de aprendizaje y mejora continua.</li><br>
                <li>Utilizar herramientas adecuadas para la gestión ágil de proyectos, como tableros, Kanban o software de seguimiento de problemas.</li><br>
                <li>Celebrar los éxitos y reconocer el trabajo en equipo.</li><br>
          </ul></td>
        </tr>
             
    </ol>
    </table>
            
</section>

 <footer class="body2">
   
    <div class="footer-bottom">
        <p>&reg; Registrado por Fabiana Diaz y Fabiana Geronimo 2024</p>
    </div>
</footer>
</body>
</html>