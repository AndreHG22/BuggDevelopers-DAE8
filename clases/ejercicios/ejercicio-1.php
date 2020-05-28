<?php

/* Angel Ricardo Ramírez de la Torre
 * Ejercicio 1: Calcular el Valor IMC
 */

$pesoKilogramos = 70;
$estaturaMetros = 1.65;

$IMC = $pesoKilogramos / ($estaturaMetros * $estaturaMetros);

?>

<h1>Sus datos:</h1>
<h2>Peso: <?php echo "$pesoKilogramos kg" ?></h2>
<h2>Estatura: <?php echo "$estaturaMetros m" ?></h2>
<br>

<h2>Su indice de masa corporal es: <?php echo "$IMC" ?></h2>
<p>
    <?php
        if($IMC < 18.5)
            echo "Peso inferior al normal";
        else if($IMC >= 18.5 && $IMC <= 24.9)
            echo "Peso normal";
        else if($IMC >= 25 && $IMC <=29.9 )
            echo "Peso superior al normal";
        else if($IMC > 30)
            echo "Obesidad";
    ?>
</p>