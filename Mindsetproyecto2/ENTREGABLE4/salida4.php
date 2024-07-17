  <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $num3 = intval($_POST['num3']);

            function gcd($a, $b) {
                while ($b != 0) {
                    $t = $b;
                    $b = $a % $b;
                    $a = $t;
                }
                return $a;
            }

            function lcm($a, $b) {
                return abs($a * $b) / gcd($a, $b);
            }

            $mcd = gcd(gcd($num1, $num2), $num3);
            $mcm = lcm(lcm($num1, $num2), $num3);

        }
        ?>
            <p>MCD es: <?=$mcd?></p>
            <p>MCM es: <?=$mcm?></p>
        