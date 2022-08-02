<h1>Ejercicio9</h1>
<p>
    Desarrolla un juego web que, a partir de una baraja española de mus (esto es, sin 8, 9 y 10) permita:
</p>
<ol>
    <li>Mostrar una carta de un palo determinado al azar</li>
    <li>Mostrar una mano de mus de dos jugadores (4 cartas del as al rey para cada uno al azar sin que se repitan)</li>
    <li>Mostrar una mano de las anteriores y comprobar quién se llevaría el “juego” (si lo llevan).</li>
    <li>PLUS: Mostrar una mano de las anteriores y comprobar quién se llevaría los “pares” (si lo llevan).</li>
    <li>PLUS: Mostrar una mano de las anteriores y comprobar quién lleva más “a la grande”.</li>
    <li>PLUS: Mostrar una mano de las anteriores y comprobar quién lleva más “a la chica”.</li>
</ol>

<?php

    $palos = ['oros','copas','espadas','bastos',];
    $cartas = [
            [
                    'nombre' => 'As',
                    'valor' => 1
            ],
            [
                    'nombre' => 'Dos',
                    'valor' => 1
            ],
            [
                    'nombre' => 'Tres',
                    'valor' => 10
            ],
            [
                    'nombre' => 'Cuatro',
                    'valor' => 4
            ],
            [
                    'nombre' => 'Cinco',
                    'valor' => 5
            ],
            [
                    'nombre' => 'Seis',
                    'valor' => 6
            ],
            [
                    'nombre' => 'Siete',
                    'valor' => 7
            ],
            [
                    'nombre' => 'Sota',
                    'valor' => 10
            ],
            [
                    'nombre' => 'Caballo',
                    'valor' => 10
            ],
            [
                    'nombre' => 'Rey',
                    'valor' => 10
            ],
    ];

    $baraja = [];
    //por cada palo
    foreach ($palos as $palo){
        //por cada carta
        foreach ($cartas as $carta){
            //añado un elemento al array $baraja
            $baraja[] = [
                'nombre' => $carta['nombre'],
                'valor' => $carta['valor'],
                'palo' => $palo,
            ];
        }
    }
    echo "1º Mostrar una carta de un palo determinado al azar<br>";
    $i = array_rand($baraja);   //indice aleatorio
    echo $baraja[$i]['nombre'] . " de " .  $baraja[$i]['palo'];
    ?>
    <br><br>
<?php
    echo "2º Mostrar una mano de mus de dos jugadores (4 cartas del as al rey para cada uno al azar sin que se repitan):<br>";
    //barajeo las cartas
    shuffle($baraja);
    //Reaprto las dos manos
    $mano1 = [];
    $mano2 = [];
    for($i = 0;$i < 4;$i++){
        $mano1[] = array_shift($baraja);
        $mano2[] = array_shift($baraja);
    }
    //Muestro las manos
    echo "<strong>Mano 1</strong><br>";
    foreach ($mano1 as $carta){
        echo $carta['nombre'] . " de " .  $carta['palo'] . "<br>";
    }
    echo "<strong>Mano 2</strong><br>";
    foreach ($mano2 as $carta){
        echo $carta['nombre'] . " de " .  $carta['palo'] . "<br>";
    }
    //compruebo cunatas cartas quedan
    echo "<br>Quedan " . count($baraja) . " cartas <br><br>" ;

    echo "3º Calcular quien se llevaria el juego.";
    //juego = suma de los cuatro valores da mayor de 31
    //El orden de mejor a peor juegos es --> 31>32>40>36>35>34>33
    $juego1 = 0;
    $juego2 = 0;
    //Recorro los arrauys (con for para recorrelos los dos  ala vez)
    for ($i = 0;$i <= 3;$i++){
        //voy acumulando en juego1 y juego2 el valor de cada carta
        $juego1 += $mano1[$i]['valor'];
        $juego2 += $mano2[$i]['valor'];
    }
    //Muestro el juego de cada mano
    echo "<br>La mano 1 tiene " . $juego1 . " de juego.";
    echo "<br>La mano 2 tiene " . $juego2 . " de juego.";

    //Compruebo si llevan juego
    if($juego1 > 30 && $juego2 > 30){
        $juegos = [31,32,40,36,35,34,33];
        //guardamos en indice1 el indice que corresponde a ese valor
        $indice1 = array_search($juego1,$juegos);
        $indice2 = array_search($juego2,$juegos);
        //compuebo quien gana
        if($indice1 > $indice2){//gano mano2
            echo "<br>Gana el juego el jugador 2";
        }
        else if ($indice1 < $indice2){//gano mano 1
            echo "<br>Gana el juego el jugador 1";
        }
        else {
            echo "<br>Empate al juego";
        }
    }
    if ($mano1 > 30) {
        echo "<br>Gana el jugador 1 porque el jugador 2 no lleva juego";
    }
    else if ($mano2 > 30) {
        echo "<br>Gana el jugador 2 porque el jugador 1 no lleva juego";
    } else{//ninguno llevan juego
            "<br>Ninguno lleva juego";
    }
?>


