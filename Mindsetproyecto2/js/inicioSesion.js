if (isset($_POST['submit'])) {
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    
    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = "6LdqjBEqAAAAAEsJEWeyp4uRrFhCfbzmBsaMkEFg";
    $errors = array();

    // Validación del captcha
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip={$ip}");
    $atributos = json_decode($response, true);
    if (empty($atributos) || !$atributos['success']) {
        $errors[] = 'Verifica el captcha';
    }

    // Validación de campos obligatorios
    $camposObligatorios = [
        'correo'  => 'El campo correo es obligatorio',
        'contra'   => 'El campo contraseña es obligatorio',
    ];
    foreach ($camposObligatorios as $campo => $mensajeError) {
        if (empty($_POST[$campo])) {
            $errors[] = $mensajeError;
        }
    }

    // Validación del formato de correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'La dirección de correo electrónico no es válida';
    }

    // Validación de la longitud de la contraseña (opcional)
    if (strlen($contra) < 8) {
        $errors[] = 'La contraseña debe tener al menos 8 caracteres';
    }

    // Si no hay errores, proceder con el inicio de sesión
    if (empty($errors)) {
          if (verificarCredenciales($correo, $contra)) {
           iniciarSesion($correo);
             header('Location: iniciosesion.php');
            exit;
         } else {
            $errors[] = 'Credenciales incorrectas';
         }
    }
}

// Si hay errores, mostrarlos
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}