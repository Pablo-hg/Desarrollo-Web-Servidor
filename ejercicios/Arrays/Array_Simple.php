<?php
    //Conctructor array
    $numeros = array(1,2,3,4,5);
    //MOstrar un array(opcion 1)
    //print_r($numeros);

    //Mostrar un array(opcion 2)
    //var_dump($numeros);

    //Mostrar un array(opcion 3, la mejor)
    function mostrarArray($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    //mostrarArray($numeros);

    //Array con indices
    //si ponemos un indice numerico, els iguiente qu eno tenga contara del ultimo + 1
    $meses = [
        1 => 'enero',
        7 => 'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'cotubre',
        'noviembre',
    ];
    $meses[12] = "diciembre";
    mostrarArray($meses);


    //Arrays asociativos
    $persona = [
        'nombre' => "pablo",
        'apellidos' => "horcajada"
    ];
    mostrarArray($persona);

    //Arrays de arrays (arrays multidimensionales)
    $personas = [
        [
            'nombre' => "pablo",
            'apellidos' => "horcajada"
        ],
        [
            'nombre' => "marcos",
            'apellidos' => "horcajada"
        ]
    ];
    mostrarArray($personas);
    echo $personas[0]['nombre'];

    //Tamaño de un array
    echo count($meses);
    echo "<br>";

    //comprobar si existe un valor en el array
    if (array_key_exists(10,$meses)){
        echo $meses[13];
        echo "<br>";
    }
    else echo "El indidice introduce no se encuentra en el array";

    //comprobar si exite un valor en el array
    if(in_array('septiembre',$meses)){
        echo "El valor se encuentra en el array";
    }
    else echo "el valor no existe";
    echo "<br>";

    //Eliminamos un elemento por su indice
    //unset($meses[16]);
    mostrarArray($meses);
    echo "<br>";

    //Interaccion con arrays(solo el valor)
    foreach ($meses as $valor){
        echo $valor ."-";
    }
    echo "<br>";

    //Interaccion con arrays(indice y valor)
    foreach ($meses as $indice => $valor){
        echo $indice .":  " .$valor."<br>";
    }

    //Interacciones con arrays con un for ( no recomendable en arrays)
    /*for($i = 1; $i <= count($meses);$i++){
        echo $meses[$i].";";
    }*/
    echo "<br><br>";

    //Ordenacion con sort(por valores). Sort-> ordena alfabeticamente y cambia los indices de los valores
    //rsort ordena descendente
    //sort($meses);
    //mostrarArray($meses);


    //arsort ordena descendente
    //Asort --> Ordena los valores alafabeticamente respecto los indices
    //asort($meses);
    mostrarArray($meses);


    //opciones de ordenacion --> alafebeticamente y luego numericamente
    $array = ['siete',12,'paco',3];
    mostrarArray($array);
    //asort($array, SORT_REGULAR); // por defecto, no convierte el tipo
    mostrarArray($array);
    //asort($array, SORT_NUMERIC); // primero ordea por numeros (convierete los string en 0)
    mostrarArray($array);
    //sort($array, SORT_STRING); // primero ordea por strings (los nuemros los convierete en string)
    mostrarArray($array);
    //uksort() --> ordena por indices

    //desordenadr un array (no respeta los indices originales)
    mostrarArray($meses);
    //shuffle($meses);
    mostrarArray($meses);

    //extraer un indice aleatorio de un array
    $indice = array_rand($meses);
    //muestro el elemento que corresponde a ese indice
    echo $meses[$indice];


    $personas = [
        [
            'nombre' => 'Jairo',
            'apellido' => 'García',
            'edad' => 47
        ],
        [
            'nombre' => 'Juan',
            'apellido' => 'Palomo',
            'edad' => 22
        ],
        [
            'nombre' => 'Luís',
            'apellido' => 'Andrade',
            'edad' => 54
        ],
        [
            'nombre' => 'Alberto',
            'apellido' => 'Pérez',
            'edad' => 18
        ],
        [
            'nombre' => 'Miguel',
            'apellido' => 'Yuste',
            'edad' => 36
        ]
    ];
    //Ordeno el multiarray por nombre ascendete
    foreach ($personas as $key => $row){
        $nombres[$key] = $row['nombre']; //Obtengo arr6ay de nombres con los índices originales
    }
    array_multisort($nombres, SORT_ASC, $personas);//ordenamos por los nombres, ascendentes y el array que queremos ordenar
    mostrarArray($personas);

    //Ordeno el multiarray por edad descendente
    foreach ($personas as $key => $row){
        $edades[$key] = $row['edad'];
    }
    array_multisort($edades, SORT_DESC, $personas);
    mostrarArray($personas);

    ///añadir elementos al final de un array
    $array = ['peras','manzanas','uvas'];
    array_push($array,'platanos');
    mostrarArray($array);

    //extraer el ultimo elemento
    $elemento = array_pop($array);//eliminaos el ultimo elemto dle array;
    echo $elemento;

    //extrarer el 1º elemento
    echo "<br>".array_shift($array);

    //Añadir un elemento al principio de un array
    array_unshift($array,'ciruelas');
    mostrarArray($array);















