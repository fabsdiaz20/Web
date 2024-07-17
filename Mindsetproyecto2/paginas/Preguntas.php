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
    <link rel="stylesheet" type="text/css" href="../Estilos/footer.css">

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

    <div class="imgpreguntas" id="imgpreguntas">

        <div class="botoimagenes">
        <img id="preguntasim" src="../Imagen/img.png" >
        <input type="button" onclick="anteriorImg()" value="<">
        <input type="button" onclick="siguienteImg()" value=">">
        </div>

    </div> 
   

    <section>
    
       

     <h1><center>Preguntas Frecuentes</center></h1><br>
     <br>
     <h3><center>¿Cuál es la metodología ágil mas usada por las empresas?</center></h3>
     <p>La metodología ágil más utilizada por las empresas es Scrum. Scrum es ampliamente adoptada en diversos sectores y tamaños de empresas debido a su enfoque estructurado, roles claros y capacidad para adaptarse a diferentes tipos de proyectos. 
     Según diversas fuentes y encuestas, como el "State of Agile Report" de VersionOne, que ha sido una referencia en la comunidad ágil, Scrum ha sido consistentemente la metodología ágil más utilizada por una amplia mayoría de empresas. Estas encuestas a menudo muestran que alrededor del 50-70% de las empresas encuestadas utilizan Scrum como su principal metodología ágil.</p><br>
     <br>
     <h3><center>¿Cuáles son los desafíos comunes en la adopción de metodologías ágiles y cómo superarlos?</center></h3>
     <p>Los desafíos comunes en la adopción de metodologías ágiles incluyen la resistencia al cambio, la falta de comprensión de los principios ágiles, y la dificultad para escalar ágil a grandes organizaciones. Estos desafíos se pueden superar con educación, liderazgo efectivo y un enfoque gradual de adopción.</p><br>
     <br>
     <h3><center>¿Cuáles son los principios fundamentales de los métodos ágiles?</center></h3>
     <p>Los principios fundamentales de los métodos ágiles se basan en el Manifiesto Ágil, que enfatiza la entrega temprana y continua de software, la adaptabilidad al cambio, la colaboración entre clientes y equipos, y la respuesta rápida a los requisitos cambiantes.</p><br>
     <br>
     <h3><center>¿Cómo se mide el éxito en un proyecto ágil?</center></h3>
     <p>El éxito en un proyecto ágil se mide típicamente por la entrega de valor al cliente de manera temprana y frecuente, la capacidad de respuesta a los cambios en los requisitos del cliente, y la satisfacción del equipo y del cliente con el proceso y los resultados obtenidos.</p>

     </section>
  <footer class="body2">
    
    <div class="footer-bottom">
        <p>&reg; Registrado por Fabiana Diaz y Fabiana Geronimo 2024</p>
    </div>
</footer>
</body>
</html>