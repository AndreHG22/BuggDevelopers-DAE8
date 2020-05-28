<?php
/*
 * Operador Definición:
 * Es un caracter que nos permite modificar el contenido de una o más variables
 */

/* Operadores:
 *  Incremento y Decremento
 *  Aritmeticos
 *  Asignación
 */

// Declaración
$num1 = 55;
$num2 = 33;

// Aritmeticos
$resultado = $num1 + $num2;
echo "Suma: ".$resultado."<br>";
echo "Resta: ".($num1 - $num2)."<br>";
echo "Multiplicación: ".($num1 * $num2)."<br>";
echo "División: ".($num1 / $num2)."<br>";
echo "Modulo: ".($num1 % $num2)."<br>";

// Incremento y Decremento
// ++$var, $var++
// --$var, $var--
$stock = 10000;
$stock++;
echo "<h1>$stock</h1>";
$stock--;
echo "<h1>$stock</h1>";

// Asignación
$edad = 60;
echo $edad."<br>";
echo ($edad += 5)."<br>";