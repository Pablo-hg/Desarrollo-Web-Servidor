
<!-- Mediante el uso de arrays, tablas y CSS, mostrar en pantalla el
calendario completo del año actual similar al mostrado en la figura.-->

<?php
$meses = [ 1 =>'Enero','Febrero', 'Marzo', 'Abril', 'Mayo',
    'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',
];
$diasemana = ["Lun","Mar","Mier","Jue","Vie","Sab","Dom"];


$numero = 1;
$contador = 0;


//CONTADOR DEL 0 AL 7
//SI SE ACABA EL MES, GURADO EL CONTADOR PARA EL MES SIGUIENTE
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type="text/css" href="css/style.css">
    <title>Ejercicio Calendario</title>
    </head>
    <body>
        <h1>Calendario 2021</h1>
        <div>
        <?php foreach ($meses as $valor => $mes){
            $numdiasmes = cal_days_in_month(CAL_GREGORIAN, $valor, 2019);?>
            <table>
                <caption><?php echo $mes ?></caption>
                <?php for($a = 0;$a <7; $a++){ ?>
                    <tr>
                        <?php if($a == 0){
                            foreach ($diasemana as $indice => $valor){ ?>
                                <th> <?php echo $valor ?></th>
                                <?php $contador++ ?>
                            <?php } ?> </tr>
                    <?php }
                    else {
                        for($i = 0;$i <7; $i++){ ?>
                            <?php $contador++ ?>
                            <td> <?php if ($contador >=12){
                                echo $numero++ ?> </td>
                                <?php if ($numero >= $numdiasmes+1){
                                    $contador = 1;
                                    break;
                                }?>
                            <?php }?>
                        <?php }?><tr>
                    <?php }?>
                <?php }?>
            </table>
            <?php $numero = 1 ?>
        <?php }?>
    </body>
</html>







