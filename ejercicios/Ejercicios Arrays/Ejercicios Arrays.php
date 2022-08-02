<h1>Ejercicio1</h1>
<p>
    Desarrolla un array multidimensional que incluya todos los días del
    año de modo que se pueda acceder a cada elemento en la forma $array[6][15]
    y un echo devuelva "15 de Junio
</p>

<?php
function mostrarArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
    $meses = [
        1 =>'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'cotubre',
        'noviembre',
        'diciembre',
    ];
    /*foreach ($meses as $valor => $mes){
        $numdiasmes = cal_days_in_month(CAL_GREGORIAN, $valor, 2021);
        foreach (range(1,$numdiasmes) as $diadelmes){
            echo $diadelmes . " de " . $mes . "<br>";
        }
    }*/
    //VERSION PERFECTA
    $dias = [1 => 31,28,31,30,31,30,31,31,30,31,30,31];
    $anyo = [];
    foreach ($meses as $num_mes => $nombre_mes){
        for ($dia = 1; $dia <= $dias[$num_mes];$dia++){
            $anyo[$num_mes][$dia] = $dia ." de " . $nombre_mes;
        }
    }
    echo $anyo[6][15];
    echo "<br>";
    ?>
<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio2</h1>
<p>
    Crea una función que muestre en pantalla una tabla con el contenido del array
    superglobal de PHP $_SERVER, incluyendo el significado de cada índice.
</p>
<?php

    mostrarArray($_SERVER);
    $comentarios = [];
    $comentarios['HTTP_HOST'] = "Indica la direccion ip del equipo";
    //Habria que hacer lo mismo para el resto
?>
<style>
    table ,tr, th{
        border: 1px solid black;

    }
    table, th ,td{
        text-align: left;
        background-color: #CCC;
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <th>Indice</th>
        <th>Valores</th>
        <th>Comentarios</th>
    </tr>
    <?php foreach ($_SERVER as $indice => $valor){ ?>
    <tr>
        <td><?php echo $indice ?></td>
        <td><?php echo $valor ?></td>
        <td><?php echo $comentarios[$indice] ?></td>
    </tr>
    <?php } ?>
</table>
<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio3</h1>
<p>
    Crea una función que, dado un array de enteros de 0 a 100, extraiga 3 elementos al azar
    y devuelva la media de ellos en formato "La media de num1, num2 y num3 es resultado".
</p>
    <?php
    $enteros = [];
    for($i =0;$i<=100;$i++){
        array_push($enteros,$i);
    }

    $suma = 0;
    $texto = "La media de  ";
    for($i =0;$i<3;$i++){
        $numero = array_rand($enteros);
        $suma += $numero;
        $texto .= $numero .", ";
    }
    $media = $suma / 3;
    echo "<br>";
    echo substr($texto,0,-2). " es " . $media ."<br><br>";
?>
<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio4</h1>
<p>
    Crea un array asociativo con los nombres y números de los meses del año e imprímelo.
    *  A continuación, ordénalo de forma ascendente respetando los
    * índices según el tamaño del texto.
</p>
<?php
    function comparar($izquierda,$derecha){
        //Ordena en función de la longitud del valor
        $diferencia = strlen($izquierda) - strlen($derecha);
        if (!$diferencia) { //si tienen la misma longitud
            return strcmp ($izquierda, $derecha); //Devuelvo la comparación de los dos strings a nivel binario
        }
        return $diferencia; //Devuelvo la diferencia en caracteres de los dos strings
    }
    uasort($meses, 'comparar');
    mostrarArray($meses);
?>
<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio5</h1>
<p>
    Modifica el ejemplo anterior para que el orden sea descendente.
</p>
<?php
    function comparar2($derecha,$izquierda){
        //Ordena en función de la longitud del valor
        $diferencia = strlen($izquierda) - strlen($derecha);
        if (!$diferencia) { //si tienen la misma longitud
            return strcmp ($izquierda, $derecha); //Devuelvo la comparación de los dos strings a nivel binario
        }
        return $diferencia; //Devuelvo la diferencia en caracteres de los dos strings
    }
    uasort($meses, 'comparar2');
    mostrarArray($meses);
?>
<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio6</h1>
<p>
    Crea un array asociativo de al menos 10 productos con nombre, precio y tipo de iva (1, 2, 3 ó 4).
    Crea un array de ivas con los tipos de iva como índices y el porcentaje de iva como valores (0%, 4%, 10% y 21%).
    Recorre el array de productos y muestra en pantalla el listado de productos, su precio sin iva, el tipo de iva y su precio con iva.
</p>
<?php
//$key es el indice de cada producto y $row es el indice de los elementos de cada producto
    $productos = [
        [
            'nombre' => 'Manzana',
            'precio' => 2.15,
            'tipo iva' => 1
        ],
        [
            'nombre' => 'Peras',
            'precio' => 2.25,
            'tipo iva' => 2
        ],
        [
            'nombre' => 'Uvas',
            'precio' => 2.35,
            'tipo iva' => 3
        ],
        [
            'nombre' => 'Platanos',
            'precio' => 2.45,
            'tipo iva' => 4
        ],
        [
            'nombre' => 'Kiwi',
            'precio' => 2.45,
            'tipo iva' => 1
        ],
        [
            'nombre' => 'Piña',
            'precio' => 2.35,
            'tipo iva' => 2
        ],
        [
            'nombre' => 'Melocoton',
            'precio' => 2.15,
            'tipo iva' => 4
        ],
        [
            'nombre' => 'Nectarina',
            'precio' => 2.15,
            'tipo iva' => 3
        ],
        [
            'nombre' => 'Fresa',
            'precio' => 2.15,
            'tipo iva' => 4
        ],
        [
            'nombre' => 'Cereza',
            'precio' => 2.25,
            'tipo iva' => 4
        ],
    ];
    $ivas = [
        1 => 0,
        0.04,
        0.1,
        0.21,
    ];


    ///VERSION DEL PROFESOR
    //recorro el rrayde los productos, calculo el IVA y año ese indicie al producto
    foreach ($productos as $i => $producto){
        //tipo de iva del producto
        $iva = $ivas[$producto['tipo iva']];
        //precio con iva del producto
        $precio_iva = $producto['precio'] * (1 + $iva);
        //Añado el precio con iva al array de productos
        $productos[$i]['precio_iva'] = $precio_iva;
    }
?>
<table>
    <tr>
        <th>Nomnbre</th>
        <th>Precio sin Iva</th>
        <th>Tipo de Iva</th>
        <th>Precio con Iva</th>
    </tr>
    <?php foreach ($productos as $producto){ ?>
    <tr>
        <td><?php echo $producto['nombre'] ?></td>
        <td><?php echo $producto['precio'] ?></td>
        <td><?php echo $producto['tipo iva'] ?></td>
        <td><?php echo $producto['precio_iva'] ?></td>
    </tr>
    <?php } ?>
</table>

<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio7</h1>
<p>
    Modifica el ejercicio anterior para que muestre los productos ordenados por nombre.
</p>
<?php
    foreach ($productos as $key => $row){
        $nombres[$key] = $row['nombre'];
    }
    array_multisort($nombres, SORT_ASC, $productos);
?>
<table>
    <tr>
        <th>Nomnbre</th>
        <th>Precio sin Iva</th>
        <th>Tipo de Iva</th>
        <th>Precio con Iva</th>
    </tr>
    <?php foreach ($productos as $producto){ ?>
        <tr>
            <td><?php echo $producto['nombre'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
            <td><?php echo $producto['tipo iva'] ?></td>
            <td><?php echo $producto['precio_iva'] ?></td>
        </tr>
    <?php } ?>
</table>

<!--///////////////////////////////////-->
<hr>
<h1>Ejercicio8</h1>
<p>
    Modifica el ejercicio anterior para que muestre los productos ordenados por su precio con iva.
</p>
<?php
    foreach ($productos as $key => $row){
        $precios[$key] = $row['precio_iva'];
    }
    array_multisort($precios, SORT_ASC, $productos);
?>
<table>
    <tr>
        <th>Nomnbre</th>
        <th>Precio sin Iva</th>
        <th>Tipo de Iva</th>
        <th>Precio con Iva</th>
    </tr>
    <?php foreach ($productos as $producto){ ?>
        <tr>
            <td><?php echo $producto['nombre'] ?></td>
            <td><?php echo $producto['precio'] ?></td>
            <td><?php echo $producto['tipo iva'] ?></td>
            <td><?php echo $producto['precio_iva'] ?></td>
        </tr>
    <?php } ?>
</table>

