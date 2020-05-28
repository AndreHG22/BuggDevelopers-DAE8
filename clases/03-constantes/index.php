<?php

// Constantes -> Un valor estático que no cambia en el tiempo
define('PIMINE', '3.1416');

$radio = 10;
$area = PIMINE * ($radio * $radio);

echo "<h1>$area</h1><br>";

define('CADENA', 'archivo_');

// Constantes predefinidas
echo __LINE__."<br>";
echo __FILE__."<br>";
echo __DIR__."<br>";
echo __FUNCTION__."<br>";
echo __CLASS__."<br>";
echo __TRAIT__."<br>";
