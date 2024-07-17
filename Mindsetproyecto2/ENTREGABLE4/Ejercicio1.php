<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="ejer.js"></script>
	<link rel="stylesheet" type="text/css" href="estiloE4.css">
</head>
<body class="ejer1">
    <h2>Libro de reclamaciones</h2>
	<form  method="get" action="salida1.php" >
		<fieldset>
		<legend>Datos Personales</legend>
		<label>DNI</label><br>
		<input type="text" name="dni" id="dni"><br>
		<label>Nombre</label><br>
		<input type="text" name="nombre" id="nombre"><br>
		<label>Apellidos</label><br>
		<input type="text" name="apellidos" id="apellidos"><br>
		<label>Correo</label><br>
		<input type="text" name="correo" id="correo"><br>
		<label>Teléfono</label><br>
		<input type="text" name="telefono" id="telefono"><br><br>
	    </fieldset>
	    <fieldset>
	    	<legend>Detalle de su reclamo</legend>
	    	<label>Tipo</label><br>
	    	<input type="radio" name="tipo" value="Reclamo" id="tipo">Reclamo
	    	<input type="radio" name="tipo" value="Queja" id="tipo">Queja<br>
	    	<label>Detalle del reclamo</label><br>
	    	<textarea name="reclamo" id="reclamo"></textarea><br>
	    	<br>
	    	<input type="submit" name="enviar" value="Enviar" onclick="reclamar(event)">
	    </fieldset>


	</form>

</body>
</html>