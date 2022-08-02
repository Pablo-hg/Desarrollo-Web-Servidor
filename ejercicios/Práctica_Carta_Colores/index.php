<?php
$rojoini = 0;
$verdeini = 0;
$azulini = 255;
$borde = "0000eb";
$hexini = "0000ff";
$hexadecimal = null;
$tectohexa = null;
$trasparencia = 99;
$letras = "abcdef";
$mal = true;

//Si hemos pulsado el boton de aceptar
if (isset($_GET['aceptar'])) {
    //guardamos los input con su filtro en una variablle
    $rojo = filter_input(INPUT_GET, 'rojo', FILTER_SANITIZE_NUMBER_INT);
    $verde = filter_input(INPUT_GET, 'verde', FILTER_SANITIZE_NUMBER_INT);
    $azul = filter_input(INPUT_GET, 'azul', FILTER_SANITIZE_NUMBER_INT);
    $hexadecimal = filter_input(INPUT_GET, 'hex', FILTER_SANITIZE_STRING);
    $trasparencia = filter_input(INPUT_GET, 'numopa', FILTER_SANITIZE_NUMBER_INT) - 1;
    //comprobamos el valor de la variable si es menor a 6
    if(strlen($hexadecimal)<=6) {
        /*for ($i = 0; $i < strlen($hexadecimal); $i++) {
            //si el caracter no es una letra del a-f o un numero
            if (!strpos($letras, $hexadecimal[$i])) {
                //saltamos al siguiente caracter
                if (ctype_digit($hexadecimal[$i])){
                    continue;
                }
                //Guardamos como valor Incorrecto
                else{
                    $mal = false;
                    $hexini = "NaN";
                    break;
                }
            }
            else $mal = true;
        }*/
        //Si está bien pero solo hemos escrito x caracteres...
        if ($mal) {
            switch (strlen($hexadecimal)) {
                case 1 :
                    $hexadecimal = $hexadecimal . "00000";
                    break;
                case 2 :
                    $hexadecimal = $hexadecimal . "0000";
                    break;
                case 3 :
                    $hexadecimal = $hexadecimal . "000";
                    break;
                case 4 :
                    $hexadecimal = $hexadecimal . "00";
                    break;
                case 5 :
                    $hexadecimal = $hexadecimal . "0";
                    break;
            }
            //objetenemos el valor hex de los 3 valores recojidos
            $hexini = sprintf("%02x%02x%02x", $rojo, $verde, $azul);
            //$hexini = $hexadecimal;
            //obtenemos el valor dividido en 3 del input hexini
            list($rojoini, $verdeini, $azulini) = sscanf("#$hexini", "#%02x%02x%02x");
            //Obtenemos el color hex para el borde
            $borde = sprintf("#%02x%02x%02x", $rojoini - 35, $verdeini - 35, $azulini - 35);
        }
    }
    //Guardamos como valor Incorrecto
    else $hexini = "NaN";
}

?>



<!DOCTYPE html>
<html>
<script src="javascript.js"></script>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ejercicio Colores</title>
</head>
<body>
    <form action="index.php" method="GET">
        <div class="tabla">
            <h2>Elige un color</h2>
                <div class="izquierda">
                    <a onclick="ObtenerColor();">
                        <!-- Pintamos el borde y el fondo con degradados-->
                        <svg class="Cgrande" id="Cgrande" <?php echo "style='background: radial-gradient(farthest-corner at 0 0 ,
                            rgb(255,255,255) 0%, rgb($rojoini,$verdeini,$azulini, .$trasparencia) 40%, rgb(0,0,0) 90%);
                                border-image: linear-gradient(135deg,rgb(255,255,255) 0%,
                                 $borde, rgb(0,0,0) 80%) 1;'" ?>
                        </svg>
                    </a>
                </div>
                <div class="medio">
                    <div class="triangulo1"></div>
                </div>
                <div class="derecha">
                    <!-- Pintamos el fondo y el borde del cuadrado -->
                    <svg class="Cpequeño" <?php echo "style='background-color:rgb($rojoini,$verdeini,$azulini);border-color:$borde'" ?>"></svg><br>
                    <!-- Escribimos como valor del input su correspondiente variable -->
                    Rojo  <br><input type="number" id="rojo" class="rgb" name="rojo" value="<?php echo $rojoini ?>" min="0" max="255"/><br>
                    Verde  <br><input type="number" id="verde" class="rgb" name="verde" value="<?php echo $verdeini ?>" min="0" max="255"/><br>
                    Azul  <br><input type="number" id="azul" class="rgb" name="azul" value="<?php echo $azulini ?>" min="0" max="255"/><br>
                    Hex (#)  <br><input type="text" id="hexa" class="cajita" name="hex" size="10" value="<?php echo $hexini ?>"/><br>
                    Opacidad (%)*  <br><input type="number" name="numopa" id="numopa" class="rgb" value="<?php echo $trasparencia+1 ?>" min="0" max="100" /><br>
                    <input type="range" name="rangeopa" id="rangeopa" class="rangeopa" value="<?php echo $trasparencia+1 ?>" min="1" max="100" step="1"/>
                    <h5>*pulsa la tecla "p" para <br> cambiar los valores</h5>
                </div>
                <div class="abajo">
                    <div class="triangulo2"></div><br>
                </div>
                <svg class="selector" name="color"><br>
                <div class="pie">
                    <!-- Añadimos 2 botones para interactuar con el servidor -->
                    <input type="submit" class="boton" value="Aceptar" name="aceptar">
                    <input type="submit" class="boton" value="Borrar" name="borrar">
                </div>
            </div>
        </div>
    </form>
</body>
</html>





