<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="ejer4.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloE4.css">
</head>
<body class="ejer4">
	 <h1>Calcular MCM y MCD</h1>
    <form action="salida4.php" method="post" target="resultado">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" required><br><br>
        <button type="submit" onclick="multi(event)">Calcular</button>
    </form>
    <h2>Resultado</h2>
    <iframe src="" name="resultado"></iframe>

</body>
</html>