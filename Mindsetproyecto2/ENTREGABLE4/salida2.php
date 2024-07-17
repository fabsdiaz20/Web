<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];
    $precio=30;
    $monto = $cantidad*$precio;
    $tarjeta = $_POST["tarjeta"];
    $meses = intval($_POST["meses"]);
    
    // Definir las tasas de interés
    $tasas_interes = array(
        "Visa" => 0.03,
        "MasterCard" => 0.035,
        "Amex" => 0.04
    );

    // Obtener la tasa de interés según el tipo de tarjeta
    $tasa_interes = $tasas_interes[$tarjeta];
    
    // Calcular la cuota mensual usando la fórmula proporcionada
    $interes_mensual = $tasa_interes;
    $cuota_mensual = $monto * ($interes_mensual / (1 - pow(1 + $interes_mensual, -$meses)));
    
    echo "<h2>Detalles de Pago</h2>";
    echo "Monto de la compra: $monto<br>";
    echo "Tarjeta: $tarjeta<br>";
    echo "Cantidad de meses a fraccionar: $meses<br>";
    echo "Cuota mensual: " . number_format($cuota_mensual, 2) . "<br><br>";

    // Generar la tabla de amortización
    echo "<table border='1'>";
    echo "<tr><th>Mes</th><th>Cuota mensual</th><th>Pago del interés</th><th>Pago del capital</th><th>Deuda</th></tr>";
    
    $deuda_restante = $monto;
    for ($i = 1; $i <= $meses; $i++) {
        $pago_interes = $deuda_restante * $interes_mensual;
        $pago_capital = $cuota_mensual - $pago_interes;
        $deuda_restante -= $pago_capital;

        echo "<tr>
                <td>$i</td>
                <td>" . number_format($cuota_mensual, 2) . "</td>
                <td>" . number_format($pago_interes, 2) . "</td>
                <td>" . number_format($pago_capital, 2) . "</td>
                <td>" . number_format(max($deuda_restante, 0), 2) . "</td>
              </tr>";
    }
    echo "</table>";
}
?>