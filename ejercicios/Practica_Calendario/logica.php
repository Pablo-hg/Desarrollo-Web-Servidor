<?php
//Array para los meses con su indice
$meses = [ 1 =>'Enero','Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',
];
//Array para los dias de la semana
$diasemana = ["Lun","Mar","Mier","Jue","Vie","Sab","Dom"];

//variable para saber el numero del dia que nos encontramos
$numero = 1;
//variable para saber el numero de la columna en la que estamos
$contador = 0;

//guardamos en una variable la fecha de hoy(la expresaa en forma de array)
$fechahoy = getdate();
//guardamos en las variables el mes y el dia en la que estamos
$meshoy = $fechahoy['mon'];
$diames = $fechahoy['mday'];
?>
