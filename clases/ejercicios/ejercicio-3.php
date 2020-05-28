<?php

/* Angel Ricardo Ramírez de la Torre
 * Ejercicio 3: El área de un circulo implementando constantes
 */

define('_PI', 3.141516);
$radio = 12;
$area = _PI * $radio * $radio;

?>

<h1>Area de un circulo</h1>
<h2>El radio del circulo es: <?php echo $radio; ?></h2>
<h2>PI vale: <?php echo _PI; ?></h2>
<h2>El area es: <?php echo $area; ?></h2>