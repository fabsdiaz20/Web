<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" type="text/css" href="Estilos/estilo.css">
        <link rel="stylesheet" type="text/css" href="Estilos/formulario.css">
         <script src="js/javascript.js"></script>

</head>
<body>


    <div class="encabezado">
    <a href="inicio.php"> <img src="Imagen/logo.jpg" alt="Logo" class="logo" align="left"></a>
    <div class="user-info">
 
    <?php if (isset($_SESSION['ID'])): ?>
        <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['Nombre']); ?>! </p> 
        <a href="cerrarsesion.php" class="btn"><button>Cerrar Sesión</button></a>
    <?php else: ?>
        <a href="iniciosesion.php" class="btn"><button>Iniciar Sesión</button></a>
    <?php endif; ?>
    </div>
  </div>
      
          
        <header class="header">
       <nav>   

        <ul class="nav-links">
            <li><a href="inicio.php" >Inicio</a></li>
            <li><a href="paginas/populares.php" >Más populares</a></li>
            <li><a href="paginas/Implementacion.php" >Implementación</a></li>
            <li><a href="paginas/Preguntas.php" >Preguntas Frecuentes</a></li>
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
    <div class="inicio_frase">
		<table class="tab1">
			<tr>
				<td>
		        <p>
		      	"En un mundo en constante cambio, 
		     	las metodologías ágiles ofrecen un enfoque flexible y adaptativo para la gestión de proyectos."
		        </p>
		        </td>
		        <td>
		        <img src="Imagen/imagen6.jpg" width="500" height="500">
		        </td>
		    </tr>		        
		</table>
	</div>
	<div class="inicio_definicion">
		<table >
			 <tr>
              <td><center>&nbsp &nbsp &nbsp &nbsp ¿QUE SON METODOLOGÍAS ÁGILES? <br>
              	</center>
              	<br>
              Las metodologías ágiles son un conjunto de enfoques y prácticas de desarrollo de software que se caracterizan por su flexibilidad, adaptabilidad y enfoque iterativo e incremental en la entrega de valor al cliente. Surgieron como respuesta a las limitaciones de los enfoques de desarrollo de software tradicionales, como el modelo en cascada, que a menudo resultaban inflexibles y poco adecuados para proyectos complejos y cambiantes. Las metodologías ágiles se centran en maximizar la colaboración del equipo, la satisfacción del cliente y la capacidad de adaptación a los cambios en los requisitos y las circunstancias del proyecto.
             </td>
             </tr>

             <tr>
              <td></td>
               <td><center> ORIGEN <br><br>
               	</center>
              Las metodologías ágiles surgieron a principios de la década de 2000 como resultado de la publicación del "Manifiesto Ágil" en 2001. Este manifiesto fue redactado por un grupo de expertos en desarrollo de software que se reunieron en Snowbird, Utah, con el objetivo de encontrar mejores formas de desarrollar software en respuesta a los desafíos y limitaciones de los enfoques tradicionales. El Manifiesto Ágil estableció los principios y valores fundamentales que guían las metodologías ágiles.
              </td>
              </tr>
        </table>
    </div>

    <div class="inicio_beneficios">

		      <table  class="tab2" width="100%">
              <br>

              <h2><center>Beneficios</center></h2><br><br>
              <tr>
              <td> 
              <ul>
              <li>Mayor visibilidad y transparencia  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp</li>
              <li>Fomentan la innovación  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>
              </td></ul>

              <td><ul>
              <li>Permiten adaptarse rapidamente a los cambios  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>
              <br>
              <li>Ayudan a identificar y corregir errores de manera oportuna  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
              </ul></td>

              <td><ul>
              <li><center>Ayudan a recibir el desperdicio de recursos  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </center></li>
              <li><center>Mayor motivación y compromiso del equipo  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</center></li>
              </ul></td>
              </tr>
              </table>
	
	</div>

<div class="container" class="body1">
    <div class="form-container">
        <h1><center>Contacto</center></h1>
        <br>
        <form action="https://formsubmit.co/fabsdiaz20@gmail.com" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre aquí">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico*</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje*</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Enviar mensaje</button>
                <input type="hidden" name="_next" value="http://localhost/Mindsetproyecto2/inicio.php">
                <input type="hidden" name="_captcha" value="false">
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="Imagen/formulario1.png" width="700" height="500">
    </div>
   
</div>

<hr>
   
        <footer class="body2">
    <div class="footer-container">
        <div class="footer-section">
            <h3>MINDSET</h3>
            <p>Adoptando una mentalidad ágil para el éxito del proyecto</p>
            <div class="social-icons">
               <button onclick="Facebook()">
                        <img src="Imagen/facebook3.png" alt="Facebook" style="width: 24px; height: 24px;">
                    </button>
                    <button onclick="Twitter()">
                        <img src="Imagen/twitter.png" alt="Twitter" style="width: 24px; height: 24px;">
                    </button>
                    <button onclick="Instagram()">
                        <img src="Imagen/instagram.png" alt="instagram" style="width: 24px; height: 24px;">
                    </button>
                    <br>
            </div>
        </div>
        <div class="footer-section">
            <h3>Equipo</h3>
            <p>123456789</p>
            <p>info@mindset.com</p>
            <center><button onclick="volverArriba()" >Volver Arriba</button></center>
        </div>
        <div class="footer-section">
            <h3>Contacto</h3>
            <form class="contact-form">
                <input type="email" placeholder="Ingresa tu correo electrónico aquí" required>
                <button type="submit">Enviar información sobre agilidad</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&reg; Registrado por Fabiana Diaz y Fabiana Geronimo 2024</p>
    </div>
</footer>

    
    

</body>
</html>