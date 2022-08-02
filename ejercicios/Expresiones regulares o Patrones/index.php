<?php

//Metacaracteres
/*
 . Concuerda con cualquier caracter
^ Concuerda con el inicio del string
$ Concuerda con el final del string
\s Concuerda con un espacio en blanco
\d Concuerda con un dígito
\w Concuerda con una letra o caracter de palabra
 */
$regex = "/ab[cd]e/"; //--> tiene que contener a y b al principio, c o d, y e al final
$string = "abge";
echo preg_match($regex,$string); // devuelve 0 porque no cumple el patrón
echo "<br>";

$regex = "/ab[cd]e/"; //--> tiene que contener a y b al principio, c o d, y e al final
$string = "abcde1";
echo preg_match($regex,$string); // devuelve 1 porque cumple el patron
echo "<br>";



//Cuantificadores
/*
 * El carácter o metacaracter puede aparecer 0 o más veces
+ El carácter o metacaracter puede aparecer 1 o más veces
? El carácter o metacaracter puede aparecer 0 o 1 vez
{n,m} El carácter o metacaracter puede aparecer al menos n veces,
 pero no más de m veces, Si sólo incluyo uno de los dos, indicará el
 mínimo de veces (si indico el primero) o el máximo de veces (si indico el segundo).
 */
$regex= "/ab?c/"; // ? El carácter "b" puede aparecer 0 o 1 vez
$string = "ac";
echo preg_match($regex,$string); //devuelve 1 porque cumple el patron
echo "<br>";

$regex= "/ab?c/"; // ? El carácter "b"  puede aparecer 0 o 1 vez
$string = "abc";
echo preg_match($regex,$string); //devuelve 1 porque cumple el patron
echo "<br>";

$regex= "/ab?c/"; // ? El carácter "b" puede aparecer 0 o 1 vez
$string = "abbc";
echo preg_match($regex,$string); //devuelve 0 porque no cumple el patron (la b aparece 2 vecs)
echo "<br>";

$regex= "/ab{1,3}c/"; // lo cumplirán abc, abbc y abbc

// Sub-patrones
//Un sub-patrón es un patrón contenido dentro de otro, y se define encerrándolo entre paréntesis.
$regex= "/a(bc.)e/";
$string = "abcxe"; // El "." es cualquier caracter
echo preg_match($regex,$string); //devuelve 1 porque  cumple el patron
echo "<br>";

$regex= "/a(bc.)+e/";
$string = "abc7bcte"; // El "." es cualquier caracter y el + es el numero de evces quye quieras
echo preg_match($regex,$string); //devuelve 1 porque cumple el patron
echo "<br>";

//Clases de caracteres
//Son grupos de caracteres a buscar encerrados entre corchetes.
$regex= "/[A-Za-zÑn]/ "; //Tiene que tener una letra
$string = "1a23";
echo preg_match($regex,$string); ////devuelve 1 porque cumple el patron
echo "<br>";

$regex= "/[0-9]/"; //Tiene que tener un número
$string = "a123";
echo preg_match($regex,$string); // devuelve 1 porque cumple le patron
echo "<br>";

$regex= "/[^A-Za-z]/"; //al menos un caracter de ellas , no tiene que ser una letra
$String = "abc";
echo preg_match($regex,$string); // devuelve 1 porque cumple el patron
echo "<br>";

$regex= "/^[0-9]/"; //al menos un caracter de ellas , no tiene que ser un numero
$string = "123a";
echo preg_match($regex,$string); // devuelve 1 porque cumple le patron
echo "<br>";

/*Ejercicio: crea un patron que cumpla lo siguiente:
    -Al menos una mayuscula
    -Al menos una minuscula
    -Al menos un numero
    -Al menos un caracter especial
    --MInimo 12 caracrteres*/
$regex = "/((?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^A-Za-z0-9]).{12,})/";
$string_si = "Aa12345678910$";
$string_no = "aa1$2345678910";
echo preg_match($regex,$string_si); // devuelve un 1 porque cumple el patro
echo "<br>";
echo preg_match($regex,$string_no); // develve un 0 porque no cumple el patron(no tiene una mayuscula)


/*

[x,y] --> o x o y
\x --> seguido de x
x{1,3} --> puede salir x entre 1 y 3 veces

 */






