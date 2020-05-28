<?php

/* Angel Ricardo Ramírez de la Torre
 *
 * Participación
 *  Crear un programa en PHP que permita adquirir 3 numeros(formuario) 
 *  y dependiendo de la opción seleccionada este ejecute una estructura 
 *  condicional (if, switch, goto) e imprima el segmento de código utilizado.
 */

$respuesta = $_POST['opcion'];
inicio:
switch ($respuesta) {
    case 'if':
        sentenciaIf();
        break;

    case 'switch':
        sentenciaSwitch();
        break;
    
    case 'goto':
        $respuesta = 'switch';
        sentenciaGoto();
        goto inicio;
        break;
}

function sentenciaIf()
{
    $num1 = 10;
    $num2 = 20;

    if( $num1 > $num2 )
        echo "El $num1 es mayor que $num2";
    else
        echo "El $num1 no es mayor que $num2";
    
    echo <<<'HEY'
    <hr>
    <code style="white-space: pre">
        <strong>código fuente</strong>
        $num1 = 10;
        $num2 = 20;
        
        if( $num1 > $num2 )
            echo "El $num1 es mayor que $num2";
        else
            echo "El $num1 no es mayor que $num2";
    </code>
    HEY;
}

function sentenciaSwitch()
{
    $estado_animo = "feliz";

    switch ($estado_animo) 
    {
        case 'feliz':
            echo "que bueno que estes feliz";
            break;
        case 'triste':
            echo "que mal que estes triste";
        default:
            echo "la verdad no se que decir";
            break;
    }

    echo <<<'HEY'
    <hr>
    <code style="white-space: pre">
        <strong>código fuente</strong>
        $estado_animo = "feliz";
        
        switch ($estado_animo)
        {
            case 'feliz':
                echo "que bueno que estes feliz";
                break;
            case 'triste':
                echo "que mal que estes triste";
            default:
                echo "la verdad no se que decir";
                break;
        }
    </code>
    HEY;
}


function sentenciaGoto()
{
    echo <<<'HEY'
    <code style="white-space: pre">
    <strong>código fuente del goto</strong>
        <br>
        <b><span style="color: blue">inicio:</span></b>
        switch ($respuesta) 
        {
            case 'if':
                sentenciaIf();
                break;
    
            case 'switch':
                sentenciaSwitch();
                break;
        
            <b>case 'goto':</b>
                $respuesta = 'switch';
                sentenciaGoto();
                <b>goto</b> <b><span style="color: blue">inicio:</span></b>;
                break;
        }
    </code>
    <br><br>
    <hr>
    HEY;
}
