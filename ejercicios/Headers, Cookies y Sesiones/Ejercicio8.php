
<?php
    /*Genera un script con una cookie llamada micookie y con el texto Hola,
    soy tu cookie amiga por 1 día que dure exactamente 1 día, de modo que al
    arrancar el script se cree y te diga que recargues la página y que al
    recargar o si cierras el navegador y lo vuelves a abrir te diga que ya existe. */

    //compruebo que la cookie aun no existe
    if(!isset($_COOKIE['micookie'])) {
        //set cookie por 1 dia
        setcookie("micookie", "Hola, soy tu amigo cookie por 1 dia", time() + 86400);

        echo "La coockie se ha creado, recarga la pagina.";
    }
    else {
        echo "La cookie tiene el valor " . $_COOKIE['micookie'];
    }

?>
