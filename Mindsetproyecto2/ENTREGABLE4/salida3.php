<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST['cantidad']);
            if ($n > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Número</th><th>Suma de dígitos</th><th>Descripción</th></tr>";

                for ($i = 0; $i < $n; $i++) {
                    $numero = rand(300, 2000);
                    $sumaDigitos = array_sum(str_split($numero));
                    $descripcion = $sumaDigitos % 2 === 0 ? "Par" : "Impar";

                    echo "<tr><td>{$numero}</td><td>{$sumaDigitos}</td><td>{$descripcion}</td></tr>";
                }

                echo "</table>";
            } 
        }
?>
