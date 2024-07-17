
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="Estilos/estilo.css">
	<link rel="stylesheet" type="text/css" href="Estilos/registro.css">
	<script src="js/registro.js"></script>
</head>
<body>
    
        <div class="encabezado">
            <a href="inicio.php">
                <img src="Imagen/logo.jpg" alt="Logo" class="logo">
            </a>
        </div>
        <header class="header">
        <nav>
            <ul class="nav-links">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="populares.php">Más populares</a></li>
                <li><a href="Implementacion.php">Implementación</a></li>
                <li><a href="Preguntas.php">Preguntas Frecuentes</a></li>
            </ul>
            <div class="burger" aria-label="Abrir menú de navegación">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="formulario">
            <h1>MINDSET</h1>
            <h3>REGISTRO DE USUARIO</h3>
            <form method="POST"  action="insertar.php"  onsubmit="return validarFormulario()">
                <div class="Usuario">
                    <label for="inombre">Nombre</label>
                    <input type="text" id="inombre" name="nombre" required>
                    <p class="ValidationText" id="vnom"></p>
                </div>
                <div class="Usuario">
                    <label for="iapellido">Apellido</label>
                    <input type="text" id="iapellido" name="apellido" required>
                    <p class="ValidationText" id="vapell"></p>
                </div>
                  <div class="Usuario">
                    <label for="iusuario">Nombre de ususario</label>
                    <input type="text" id="iusuario" name="usuario" required>
                    <p class="ValidationText" id="vapell"></p>
                </div>
                <div class="Reg">
                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="date" id="fecha" name="fecha" class="input-linea" required>
                    <p class="ValidationText" id="vfec"></p>
                </div>
                <div class="Reg">
                    <label>Género</label>
                    <div>
                        <input type="radio" id="masculino" value="Masculino" name="Genero" required>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="femenino" value="Femenino" name="Genero" required>
                        <label for="femenino">Femenino</label>
                    </div>
                    <p class="ValidationText" id="vgend"></p>
                </div>
                <div class="Usuario">
                    <label for="icorreo">Correo electrónico</label>
                    <input type="email" id="icorreo" name="correo" required>
                    <p class="ValidationText" id="vcorr"></p>
                </div>
                <div class="Reg">
                    <label for="estudio">Grado de estudio</label>
                    <select id="estudio" name="opciones" required>
                        <option></option>
                        <option value="Pregrado">Pregrado</option>
                        <option value="Postgrado">Postgrado</option>
                        <option value="Colegiatura">Colegiatura</option>
                        <option value="Maestria">Maestría</option>
                    </select>
                </div>
                <div class="Usuario">
                    <label for="ipass">Contraseña</label>
                    <input type="password" id="ipass" name="contra" required>
                    <p class="ValidationText" id="vcont"></p>
                </div>
                <input type="submit" value="Registrar">
            </form>
        </section>
    </main>

</body>
</html>
