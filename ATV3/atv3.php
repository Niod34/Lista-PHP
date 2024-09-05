<?php

$_n1 = $_GET["n1"];
$_n2 = $_GET["n2"];

$soma = $_n1 + $_n2;
$sub = $_n1 - $_n2;
$multi = $_n1 * $_n2;
$div = $_n1 / $_n2;


echo "1- Soma \n2- Subtração\n3- Multiplicação\n4- Divisão <br>";


switch ($_n1 && $_n2) {
    case "1":

        echo "O Resultado é:", $soma;
        break;

    case "2":

        echo "O Resultado é:", $sub;
        break;

    case "3":

        echo "O Resultado é:", $multi;
        break;

    case "4":

        echo "O Resultado é:", $div;
        break;


    default:
        echo "Número Invalido";
        break;
}
