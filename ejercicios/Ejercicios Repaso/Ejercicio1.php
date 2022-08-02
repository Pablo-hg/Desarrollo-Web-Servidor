<?php

/* 1º
  Desarrolla un script que reciba un número de mes y un número de día de la semana y devuelva el nombre del mes,
el nombre del día de la semana y el número de días de dicho mes (sin tener en cuenta los bisiestos)
 */




function imprimirfecha($mes,$diasemana){

    $meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $semana = ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'];
    $dias_mes = [1 => 31,28,31,30,31,30,31,31,30,31,30,31];
    $textomes = "";
    foreach ($meses as $numero_mes => $nombre_mes){
       if($numero_mes == $mes){
           $textomes = $nombre_mes;
           foreach ($semana as $numero => $dia_semana){
               if($diasemana == $numero){
                   $textodia = $dia_semana;
                   $textonumero= $dias_mes[$mes];
               }
           }
       }
   }
    return $textodia;
}


echo imprimirfecha(5, 3);
?>

