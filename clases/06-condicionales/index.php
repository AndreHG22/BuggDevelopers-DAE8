<?php

// Condicionales if, switch, goto
// ==, !=, <>, <, >, <=, >=, ===

goto condiciongoto;

condicionif:
    echo "Estas en las condicionales";

$pais = 'Mexico';

if( $pais == 'Mexico' )
{
    echo "Eres Méxicano";
}
else
{
    echo "No eres Méxicano";
}

echo "<hr>";

// dias de la semana
$dia = 1;

if( $dia == 1 )
    echo "Lunes";
else if( $dia == 2 )
    echo "Martes";

echo "<hr>";

condicionswitch:
    echo "Estas en el switch";
// SWITCH
$opcion = 3;

switch ($opcion) 
{
    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miercoles";
        break;

    case 4:
        echo "Jueves";
        break;
    
    default:
        echo "Revisua nuevamenta la opción que has seleccionado";
        break;
}

echo "<hr>";

condiciongoto:
// goto
    echo "goto function";

/**
 * Participación
 *  Crear un programa en PHP que permita adquirir 3 numeros(formuario) 
 *  y dependiendo de la opción seleccionada este ejecute una estructura 
 *  condicional (if, switch, goto) e imprima el segmento de código utilizado.
 */