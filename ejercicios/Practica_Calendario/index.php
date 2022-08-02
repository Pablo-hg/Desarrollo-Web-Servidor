<!-- Mediante el uso de arrays, tablas y CSS, mostrar en pantalla el
calendario completo del año actual similar al mostrado en la figura.-->
<?php
include "logica.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ejercicio Calendario</title>
</head>
<body>
<h1>Calendario 2021</h1>
<div>
    <!-- Bucle que recorre el array "meses" y hara acciones por cada "mes" -->
    <?php foreach ($meses as $numemes => $mes) {

        //Calculamos el numero total de dias del mes
        $numdiasmes = cal_days_in_month(CAL_GREGORIAN, $numemes, 2021); ?>
        <table>
            <!-- Escribimos como titulo de la tabla, el nombre del "mes" -->
            <caption><?php echo $mes; ?></caption>
            <tbody>
            <!-- Cada tabla tendrá 7 filas  -->
            <?php for ($fila = 0; $fila < 6; $fila++) { ?>
                <!-- En la fila 0, escribiremos los dias de la semana -->
                <tr> <?php if ($fila == 0) {
                    //Bucle que recorre el array "diasemana" y hará una accion por cada elemento en el array
                    foreach ($diasemana as $indice => $valor) { ?>
                        <!-- escribimos en la celda de cabecera, el valor del "dia" -->
                        <th> <?php echo $valor; ?></th>
                    <?php } ?>
                <?php } //En el resto de filas, escribiremos el numero del dia
                else {
                    //bucle para recorere las columnas
                    for ($contador; $contador < 7; $contador++) {
                        //si $numero es <= al numero total de dias de dicho mes...
                        if ($numero <= $numdiasmes) {
                            //si $numeses y $numero es igual a las variables que
                            //obtienen el mes y el dia de la fecha de hoy...
                            if (($numemes == $meshoy) && ($numero == $diames)) {
                                //creamos una nueva celda con otro color,
                                //sumamos 1 para continuar los dias
                                //y saltamos en 1 al bucle con "continue"
                                ?> <td style="background-color: #f7edeb">
                                <?php echo $numero++;
                                continue;
                            } ?>
                            <td> <?php echo $numero++; ?>
                            </td>
                        <?php } //$numero es mayor al numero otald e dias del mes
                        else {
                            //reiniciamos $numero para vovler a empezar otro ems
                            $numero = 1;
                            //guardamos la columna del ultimo dia del mes anyerior para el actual
                            $contador = $contador;
                            break;
                        }
                        //reiniciamos el contador para cada fila(salto de linea)
                    }
                    $contador = 0;
                    ?>
                    </tr> <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
</div>
</body>
</html>







