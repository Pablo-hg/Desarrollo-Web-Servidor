<?php
///INTRODUCCION
echo "\x2a<br>";  //muestra un asterisco utilizando notación hexadecimal

$quien = "Jairo";
echo "Hola $quien \n"; //muestra Hola Jairo y cambia de línea
echo 'Hola $quien\n <br>'; //muestra Hola Jairo\n

echo 'Mi nombre es \'Jairo\'.<br>'; //Muestra Mi nombre es "Jairo".
$quien = "Jairo";
echo "El valor de la variable \$quien es \"$quien\".<br>"; //Muestra El valor de la variable $quien es "Jairo".

echo strlen("Jairo")."<br>"; //devuelve 5
echo strlen("Jairo García")."<br>"; //devuelve 12

echo strtr('Jairo', 'i', '1')."<br>"; //devuelve Ja1ro
$numeros = ['i' => '1', 'o' => '0'];
echo strtr("Jairo", $numeros)."<br>"; //devuelve Ja1r0

$quien = 'Jairo';
echo $quien[1]."<br>"; //devuelve a
for ($i=0; $i < strlen($quien); $i++){
    echo $quien[$i]."-"; //devuelve J-a-i-r-o-
}
echo "<br>";


//COMPARAR STRINGS
$string = '123abc';
echo ($string == 123)."<br>"; //devuelve true
echo ($string === 123)."<br>"; //devuelve false
$string = 'Hola Jairo';
echo strcmp($string, 'Hola jairo')."<br>"; //devuelve -1, implica que no son iguales
echo strcasecmp($string, 'Hola jairo')."<br>"; //devuelve 0, implica que son iguales porque es insensible a mayúsculas y minúsculas
echo strncmp($string, 'Hola Luís', 5)."<br>"; //devuelve 0, implica que son iguales porque solo comparo los 5 primeros caracteres
echo "<br>";

//BUSCAR Y REEMPLAZAR STRINGS
$haystack = 'Hola Jairo'; //pajar
$needle = 'a'; //aguja
if (strpos($haystack, $needle) !== false){
    echo "Texto encontrado en la posición ".strpos($haystack, $needle);
}
else{
    echo "Texto no encontrado";
}
echo strpos($haystack, $needle); //devuelve 3, que es donde empieza el texto 'a'
echo strpos($haystack, $needle, 4); //devuelve 6 porque después de la primera 'a', la siguiente está en la posición 6
echo strpos($haystack, $needle, 7); //devuelve false (nada en pantalla) porque después de la segunda 'a' ya no hay más ocurrencias
echo "<br>";

//////////////////////////
$haystack = 'Hola Jairo'; //pajar
$needle = 'la'; //aguja
echo strstr($haystack, $needle)."<br>"; //devuelve 'la Jairo'

///////////////////////////////
echo stripos('Hola Jairo', 'hola'); //devuelve 0, que es donde empieza la aguja
echo stristr('Hola Jairo', 'j'); //devuelve 'Jairo', que es donde empieza la aguja
echo strrpos('Hola Jairo', 'a'); //devuelve 6, que es la posición de la primera ocurrencia empezando desde el final
echo "<br>";

///////////////////////////////
$subject = 'Hola Mundo'; //cadena completa
$search = 'Mundo'; //cadena de búsqueda
$replace = 'Jairo'; //cadena de reemplazo
echo str_replace($search, $replace, $subject); //devuelve 'Hola Jairo'
echo "<br>";

$subject = 'Hola Mundo'; //cadena completa
$search = ['Hola', 'Mundo']; //array de búsqueda
$replace = ['Hello', 'World']; //array de reemplazo
echo str_replace($search, $replace, $subject); //devuelve 'Hello World'
echo "<br>";

$reemplazos = 0;
str_replace($search, $replace, $subject, $reemplazos);
echo $reemplazos; //devuelve 2, que es el número de reemplazos afectuados
echo "<br>";

//////////////////////////////////////
echo substr_replace("Hola Mundo", "Jairo", 5); //Devuelve 'Hola Jairo'
echo "<br>";
$email = 'jairo@garciarincon.com';
$nombre = substr_replace($email, "", strpos($email, '@'));
echo "Hola $nombre <br>";

/////////////////////
$x = '1234567';
echo substr($x, 0, 3); //devuelve '123'
echo substr($x, 1, 1); //devuelve '2'
echo substr($x, -2); //devuelve '67'
echo substr($x, 1); //devuelve '234567'
echo substr($x, -2, 1); //devuelve '6'


