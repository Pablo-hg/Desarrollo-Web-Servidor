
<h1>Ejercicio 1</h1>
<p style="color: red">
    Muestra por pantalla el texto: El comando c:\*.* no es correcto y en mi reloj son la 12 "o'clock".
</p>
<?php
    echo "El comando c:\*.* no es correcto y en mi reloj son la 12 \"o'clock\"<br>";
    echo 'El comando c:\*.* no es correcto y en mi reloj son la 12 "o\'clock"<br>';
?>

<h1>Ejercicio 2</h1>
<p style="color: red">
    Escribe tu nombre completo y dos apellidos en una línea. En la siguiente, sustituye las vocales e,i,o por los
    números 3,1,0, respectivamente. Si hay alguna 's', sustitúyela por el número '5'.
</p>
<?php
    $nombre = "Jairo Gracia Rincons";
    $numeros = [
            'e' => '3',
            'i' => '1',
            'o' => '0',
            's' => '5',
    ];
    echo strtr($nombre, $numeros)."<br>";
?>

<h1>Ejercicio 3</h1>
<p style="color: red">
    Escribe tu nombre completo y dos apellidos en una línea. En la siguiente, sustituye todas tildes
    y diéresis (si las hay) por su correspondiente vocal sin tilde ni diéresis. Si alguna 'ñ', sustitúyela por una 'n'.
</p>
<?php
    $nombre = "Pablo Horcajada González";
    $sin_tilde = [
            'á' => 'a',
    ];
    echo strtr($nombre,$sin_tilde)."<br>";
?>

<h1>Ejercicio 4</h1>
<p style="color: red">
    Escribe una función que transforme una frase a mayúsculas
</p>
<?php
    function mayusculas($string){
        //return strtoupper($string);
        return mb_strtoupper($string,"utf-8");
    }
    echo mayusculas("pabló");
?>

<h1>Ejercicio 5</h1>
<p style="color: red">
    Escribe una función que transforme una frase a minúsculas
</p>
<?php
function minusculas($string){
    //return strtolower($string);
    return mb_strtolower($string,"utf-8");
}
echo minusculas("PABLÓ");
?>

<h1>Ejercicio 6</h1>
<p style="color: red">
    a. Escribe una función que transforme la primera letra de una frase a mayúsculas.
    b. Modifica la anterior para que transforme la primera letra de la frase a minúsculas
</p>
<?php
    function a($string){
        return ucfirst($string);
    }
function b($string){
    return lcfirst($string);
}
    echo a("pablo<br>");
    echo b("Pablo");
?>

<h1>Ejercicio 7</h1>
<p style="color: red">
    Escribe una función que transforme la primera letra de cada palabra de una frase a mayúsculas
</p>
<?php
    function primeradecadaMayus($string){
        return ucwords($string);
    }
    echo primeradecadaMayus("hola que tal");
?>

<h1>Ejercicio 8</h1>
<p style="color: red">
    Escribe una función que convierta el string 15061974 en 15/06/1974
</p>
<?php
    function formatoFecha($string){
        $dia = substr($string,0,2);
        $mes = substr($string,2,2);
        $ano = substr($string,4);
        return "$dia/$mes/$ano";
    }
    echo formatoFecha(15102021);
?>

<h1>Ejercicio 9</h1>
<p style="color: red">
    Escribe una función que extraiga el nombre del fichero de una ruta
    (Ejemplo, 'http://www.jairogarciarincon.com/carpeta1/index.php' debe devolver 'index.php'.)
    fun
</p>
<?php
    function nombrefichero($string){
        $posicion = strrpos($string,"/");
        return substr($string,$posicion+1);
    }
    echo nombrefichero('http://www.jairogarciarincon.com/carpeta1/Ejercicio1.php<br>');
?>

<h1>Ejercicio 10</h1>
<p style="color: red">
    Escribe una función que extraiga el nombre de usuario de una dirección
    de email (Ejemplo jairo@garciarincon.com debe devolver jairo)
</p>
<?php
    function nombreusuario($string){
        $posicion = strpos($string,"@");
        return substr_replace($string, "",$posicion);
    }
    echo nombreusuario('jairo@garciarincon.com<br>');
?>

<h1>Ejercicio 11 deberes</h1>
<p style="color: red">
    Escribe una función que devuelva la letra o número siguiente al introducido
    (Ejemplo, si la muestra es 'a', debe devolver 'b'. Si la muestra es '4', debe devolver '5').
</p>
<?php
    function numeroSiguiente($string){
        //$posicion = strpos($string,$muestra);
        //return
    }
    echo numeroSiguiente('<br>');
?>

<h1>Ejercicio 12</h1>
<p style="color: red">
    Escribe una función que devuelva la primera palabra de una frase.
</p>
<?php
    function primeraPalabra($string){
        $posicion = strpos($string," ");
            return substr_replace($string,"",$posicion);
    }
    echo primeraPalabra('adadadas adadadadapadad');
?>
