<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Pago</title>
    <script src="ejer2.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloE4.css">
</head>
<body class="ejer2">
    <h1>Simulador de pagos</h1>
    <form name="pago" action="salida2.php"method="post">
        <fieldset>
            <legend>Entrada</legend>
        <table width="100% " height="100%" >
            <tr>
                <td>General</td>
                <td>Cantidad</td>
            </tr>
            <tr>
                <td>Precio s/.30</td>
                <td>
                    <input type="number" name="cantidad">
                </td>
            </tr>
            <tr>
                <td>
                    <br>
            <input type="button" name="aceptar" value="Aceptar" onclick="tarjetapago()">
                </td>
            </tr>
        </table>
        <br>

        <h2>Monto a pagar</h2>
        <div id="resultado"></div>
        <br><br>
    </fieldset>
    <fieldset>
        <legend>Metodo de pago</legend>
        <h4> Tarjeta de credito </h4><br>
         <table  width="100% " height="100%" border="1">
            <tr>
                <td>
                    <input type="radio" name="tarjeta" id="Visa" value="Visa">Visa 
                    <img src="img/visa.jpg" width="25" height="25">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="tarjeta" id="MasterCard" value="MasterCard">MasterCard
                    <img src="img/master.jpg" width="25" height="25">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="tarjeta" id="Amex" value="Amex">Amex
                    <img src="img/amex.jpg" width="25" height="25">
                </td>
            </tr>

         </table>
         <br><br>
        <label for="meses">Cantidad de meses a fraccionar:</label>
        <input type="text" id="meses" name="meses"><br><br>
        <input type="submit" value="Pagar">
        </fieldset>
    </form>
</body>
</html>
