<?php
//Recupero el valor de la diana
$diana = $_GET['diana'] ?? null;
if($diana){
    //texto de salida
    $texto = "Has hecho click en <strong>" .$diana ."</strong> <br>";
    //Compurebo el resultado
    if ($diana == 50){
        $texto .= "¡Enhorabuena, acertaste!";
        //Si ehemos hehco la refenecia de archivo css bien, el programa entederá la referencia con el css
        $clase = "verde";
    }
    else if ($diana <= 40 && $diana <= 60){
        $texto .= "Has estado cerca, prueba otra vez";
        $clase = "naranja";
    }
    else {
        $texto .= "Eres muy mal@, prueba otra vez";
        $clase = "rojo";
    }
}
?>
