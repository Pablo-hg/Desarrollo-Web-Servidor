<style>
    .rojo{
        color: red;
    }
</style>

<?php
    //FORMATO DE NUMEROS
    $variable = 10000/3;
    echo $variable . "<br>"; //3333.3333333333
    echo number_format($variable) . "<br>"; //3,333
    echo number_format($variable,2) . "<br>"; //3,333.33
    echo number_format($variable,2,",",".") . "€<br>"; //3.333,33€

    //Crea una funcionq ue devuelva un numero en formato €.
    //Ademas, que sea de color rojo si el numero es menor a 0
    function euro($numero){
        //si numero es menor a 0 es rojo, sino nada
        $clase = ($numero < 0) ? "rojo" : "";
        return "<span class='".$clase."'>".number_format($numero,2,",",".")."€</span>";
    }

    echo euro(12324.45)."<br>";
    echo euro(-12324.45)."<br>";



    //FORMATO DE STRING sprintf()

    //Intercambio de argumentos
    $num = 5;
    $ubicacion = 'árbol';

    $formato = 'Hay %d monos en el %s';
    echo sprintf($formato, $num, $ubicacion). "<br>"; //Devuelve "Hay 5 monos en el árbol"

    $formato = 'El %s contiene %d monos';
    echo sprintf($formato, $num, $ubicacion). "<br>"; //Devuelve "El contiene 0 monos"

    $formato = 'El %2$s contiene %1$d monos'; //Devuelve "El árbol contiene 5 monos"
    echo sprintf($formato, $num, $ubicacion). "<br>";

    $formato = 'El %2$s contiene %1$d monos. Es un bonito %2$s con %1$d monos.';
    echo sprintf($formato, $num, $ubicacion). "<br>"; //Devuelve "El árbol contiene 5 monos. Es un bonito árbol con 5 monos."

    //Especificar un carácter de relleno
    echo sprintf("%'.9d\n", 123); //Devuelve "......123"
    echo sprintf("%'09d\n", 123). "<br>"; //Devuelve "000000123"

    //Especificador de posición con otros especificadores
    $formato = 'El %2$s contiene %1$04d monos';
    echo sprintf($formato, $num, $ubicacion); //Devuleve "El árbol contiene 0005 monos
