<?php
    $variabele = 35;
    $nombre = "Marco";

    echo "Mi nombre es " . $nombre . "<br>";

    $numUno = 9;
    $numDos = 1;
    $resultado = $numUno + $numDos;

    echo " " . $resultado;


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    //TIPOS DE DATOS:

    //Caracter y/o Letra
    $Caracter = "c";
    //Entero y/o Numero
    $Numero = 45;
    //Cadena, Texto, Palabras
    $Frase = "Esto es una cadena de texto o de palabras";
    //Flotante y/o Numero Con Punto Decimal
    $Flootante = 15.6;
    //Booleano y/o Verdadero O Falso
    $Verdadero = true;
    $Falso = false;
    //Arreglo, Collecion de valores, Lista de caracteres
    $Carros = array("chico", "camion", "convertible");
    $Edades = array(10, 15, 18, 20, 22, 25, 33);
    $Tutifuti = array("Axel", 21, "Angel", 16, "Marco", 58, "Coni", 36);
    //Nulos y/o Sin Valor
    $Nada = null;

    echo $Frase . "<br>";
    echo $Flootante . "<br>";

    //Para imprimir Arrays o Arreglos no se usa echo si no print_r
    print_r($Carros);
    print_r($Edades);


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";





    //FUNCIONES PARA MANIPULAR STRINGS:
    $mensaje = "Hoy voy a estudiar mucho";
    echo $mensaje . "<br>";

    //Longitud de la cadena o cantidad de caracteres que la condorman incluyendo espacios
    echo strlen($mensaje) . "<br>";

    //Numero de palabras que conforman una cadena de texto sin incluir espacios
    echo str_word_count($mensaje) . "<br>";

    //Reverso O Texto escrito alrevez
    echo strrev($mensaje) . "<br>";

    //Encontrar texto o palabra exata en un cojunto de palabras
    echo strpos($mensaje, "estudiar") . "<br>";

    //Remplazar texto o Una palabra del texto por otra
    //Sintaxis: echo str_replace("palabra a borrar", "palabra nueva", "variable en la que esta la palabra");
    echo str_replace("estudiar",  "aprender", $mensaje ) . "<br>";

    //Convertit a minuculas la cadena de texto
    echo strtolower($mensaje) . "<br>";

    //Convertit a mayusculas la cadena de texto
    echo strtoupper($mensaje) . "<br>";

    //Comparar cadenas, Compara el nivel de bits en cada palabra que ocnforma una cadena de texto
    echo strcasecmp("a", "a") . "<br>";
    echo strcasecmp("a", "b") . "<br>";
    echo strcasecmp("b", "a") . "<br>";
    echo strcasecmp("a", "c") . "<br>";
    echo strcasecmp("c", "a") . "<br>";

    //Substraer Cadenas, Imprime en pantalla apartir de la letra que tu le asignas
    echo substr($mensaje, 10) . "<br>";
    echo substr($mensaje, 10, 12) . "<br>";

    //Remover espacios en blanco
    echo trim("           Esto quitara           todos los espacios            inecesarios en las        palabras");

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    //OPERADORES ARITMETICOS:
    $x = 5;
    $y = 10;

    //Suma
    echo $x + $y . "<br>";

    //Resta
    echo $x - $y . "<br>";

    //Multiplicacion
    echo $x * $y . "<br>";

    //Division
    echo $x / $y . "<br>";

    //Modulo O Residuo de la division
    echo $x % $y . "<br>";

    //Exponencioasion o Elevasion
    echo $x ** $y . "<br>";

    //OPERADORES DE ASIGNACION:

    //De una variable a otra
    $x = $y;
    echo $x . "<br>";

    //x tenra el valor de x + y
    $x += $y;
    echo $x . "<br>";

    //x tenra el valor de x - y
    $x -= $y;
    echo $x . "<br>";

    //x tenra el valor de x * y
    $x *= $y;
    echo $x . "<br>";

    //OPERADORES DE COMPARACION:

    //Si x es igual a y seria True y si es diferente False, por lo tanto si x es 5 y y es 5 o "5" daria true
    var_dump($x == $y) . "<br>";

    //Si x es exactamente igual a y seria True y si es diferente False, por lo tanto si x es 5 y y es 5 daria true pero si y es "5" seria False por que no es exactamente igual
    var_dump($x === $y) . "<br>";

    //Si x es mayor a y
    var_dump($x > $y) . "<br>";

    //Si x es mayor o igual a y
    var_dump($x >= $y) . "<br>";

    //Si x es menor a y
    var_dump($x < $y) . "<br>";

    //Si x es menor o igual a y
    var_dump($x <= $y) . "<br>";

    //Si x es diferente a y
    var_dump($x <> $y);

    //Si x no es igual a y
    var_dump($x != $y);

    //Si x no es identico a y
    var_dump($x !== $y);

    echo "<br>";

    //OPERADORES DE INCREMENTO Y/O DECREMENTO:

    echo ++$x;
    echo $x++;
    echo --$x;
    echo $x--;
?>