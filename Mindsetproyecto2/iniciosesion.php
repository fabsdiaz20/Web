
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="Estilos/estilo.css">
    <link rel="stylesheet" type="text/css" href="Estilos/iniciosesion.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>

        <div class="encabezado" >
          <a href="inicio.php"> <img src="Imagen/logo.jpg" alt="Logo" class="logo" align="left"></a>&nbsp &nbsp &nbsp &nbsp  &nbsp 
          </div>
          <header class="header">
       <nav>   

        <ul class="nav-links">
            <li><a href="inicio.php" >Inicio</a></li>
            <li><a href="populares.php" >Más populares</a></li>
            <li><a href="Implementacion.php" >Implementación</a></li>
            <li><a href="Preguntas.php" >Preguntas Frecuentes</a></li>
            <li><a href="entregable.php">Entregable 3 </a></li>
            <li><a href="entregable4.php">Entregable 4 </a></li>
            <li><a href="Entregable5/leer.php">Entregable 5 </a></li>
        </ul>
        <div class="burger active" aria-label="Abrir menu de navegacion">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        </nav>
    </header>
    <main>
    <div class = "formulario">
        <h1>MINDSET</h1>

        <form method="post" action="validar.php">
            <div class="Usuario">
                <input type="text" id="icorreo" name="correo" required>
                <label> Correo Electronico</label>
            </div>
            <div class="Usuario">
                <input type="password" id="icontra" name="contra"required>
                <label>Contraseña</label>
            </div>
            <div class="Usuario">
                <div class="g-recaptcha" data-sitekey="6LeDlBEqAAAAAJHPnqcZVWIGesy_XKfNu_XPOQr_"></div>
            </div>
            <div class="recordar">¿Olvidaste tu Contraseña?</div>
            <input  type="submit" value ="Iniciar Sesión">
            <div class="Registrarse">
                    ¿Aun no tienes Cuenta? <a href="registro.php">Regístrate</a>
            </div>
            <div id="g_id_onload"
               data-client_id="TU_ID_DE_CLIENTE"
                 data-callback="handleCredentialResponse">
               </div>

              <div class="g_id_signin" data-type="standard"></div>
              <script >
                  function handleCredentialResponse(response) {
                   // Envía el token ID al servidor
                  fetch('/auth/google', {
                 method: 'POST',
                headers: {
                 'Content-Type': 'application/json',
                 },
               body: JSON.stringify({token: response.credential})
  })
            .then(response => response.json())
  .then(data => {
    // Maneja la respuesta del servidor
  });
}
              </script>
              <?php
              require_once 'vendor/autoload.php';

$client = new Google_Client(['client_id' => $CLIENT_ID]);
$payload = $client->verifyIdToken($id_token);

if ($payload) {
  $userid = $payload['sub'];
  $email = $payload['email'];
  // Crea la sesión del usuario o registra si es nuevo
  $_SESSION['user_id'] = $userid;
  // Redirige al usuario a la página principal
} else {
  // Token inválido
}
?>
        </form>
    </div>
    </main>

</body>
</html>