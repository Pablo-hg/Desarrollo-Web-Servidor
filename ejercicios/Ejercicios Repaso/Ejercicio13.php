<?php

//Escribe un script que reciba dos números de un formulario y
// compruebe si están entre 100 y 200 y devuelva si o no.
if(isset($_POST['comprobar'])){
    $num1 = ilter_input(INPUT_POST,'num1',FILTER_SANITIZE_NUMBER_INT);
    $num2 = ilter_input(INPUT_POST,'num2',FILTER_SANITIZE_NUMBER_INT);
    /*if(100 < num1 && 200> num1){
        echo "$num1 si";
    } else "$num1  no";*/
    /*if(100 < num2 && 200> num2){
        echo "$num2  si";
    } else "$num2  no";*/
}

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio13.php" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit" value="comprobar" name="comprobar">
        <?php echo $num1?>
    </form>
</body>
</html>
