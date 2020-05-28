<?php

/* Angel Ricardo Ramírez de la Torre
 * Ejercicio 2: Convertir grados °C a °F
 */

$temperatura_celsius = 100;
$temperatura_farenheit = ($temperatura_celsius * (9/5)) + 32;

?>

<h1>
    <?php
        echo "$temperatura_celsius °C quivalen a $temperatura_farenheit °F";
    ?>
</h1>