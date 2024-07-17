<!DOCTYPE html>
<html>
<head>
    <title>Generador de Números Aleatorios</title>
    <script src="ejer3.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloE4.css">
</head>
<body class="ejer3">
    <h1>Generador de Números Aleatorios</h1>
    <form action="salida3.php" method="post" onsubmit="return validarFormulario(event)" >
        <label for="cantidad">Ingrese la cantidad de números (N):</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        <button type="submit" >Generar</button>
    </form>

</div>
</body>
</html>