<?php

    //Iniciamos la sesion
    session_start();

    //Si reiniciamos, destruimos e iniciamos la sesion
    if(isset($_POST['Reiniciarsi'])){
        session_destroy();
        session_start();
    }


    //si no pulsamos ninguna letra, establecemos las sesiones
    if(!isset($_SESSION['letra'])){
        $_SESSION['letra'] = "";
        $_SESSION['perder'] = false;
        $_SESSION['palabras'] = ["gato","pez","tiburon","avestruz","zebra","leon","guepardo","raton","foca"];
        shuffle($_SESSION['palabras']);
        //$_SESSION['palabradivinar'] = $_SESSION['palabras'][0];
        $_SESSION['palabradivinar'] = "avestruz";
        $_SESSION['numpasos'] = strlen($_SESSION['palabradivinar']);
        $_SESSION['posicion'] = 600;
        $_SESSION['posicionroca'] = 210;
        $_SESSION['velocidadroca'] = 150;
        $_SESSION['distanciapaso'] = (1580-$_SESSION['posicion'])/$_SESSION['numpasos'];
        $_SESSION['invisible'] = "";
        $_SESSION['abc'] = "abcdefghijklmnopqrstuvwxyz";
        $_SESSION['fallos'] = 0;
        $_SESSION['acertar'] = false;
        for($i=0;$i<=strlen($_SESSION['palabradivinar'])-1;$i++){
            $_SESSION['invisible'] = $_SESSION['invisible'] . "_";
        }


    }
    //si hemos pulsado una letra...
    else{
        //si pulsamos alguna letra
        if(isset($_POST['letra'])){
            //guardamos la letra pulsada
            $_SESSION['letra'] = filter_input(INPUT_POST, 'letra', FILTER_SANITIZE_STRING);
            $_SESSION['letra'] = strtolower($_SESSION['letra']);
            if($_SESSION['letra']!=""){
                //Si la letra esta en la palabra a adivinar y en el abecedario
                if (strpos($_SESSION['palabradivinar'],$_SESSION['letra']) !== false &&
                    strpos($_SESSION['abc'],$_SESSION['letra']) !== false){
                    $i=null;
                    //Añadimos la letra acertada a la palabra invisible
                    for($i=0;$i<=strlen($_SESSION['palabradivinar'])-1;$i++){
                        if($_SESSION['palabradivinar'][$i]==$_SESSION['letra']){
                            $_SESSION['invisible'][$i] = $_SESSION['letra'];
                        }
                    }
                    //si no estamos en el 1º paso, avanzamos la posicon
                    if($_SESSION['numpasos']!=strlen($_SESSION['palabradivinar'])){
                        //aumentamos la posicion del jugador y quitamos un paso
                        $_SESSION['numpasos']--;
                        $_SESSION['posicion'] = $_SESSION['posicion'] + $_SESSION['distanciapaso'];
                    }
                    //si estamos en el 1º, solo restamos pasos
                    else{
                        $_SESSION['numpasos']--;
                    }
                }
                //si la letra no esta en la palabra
                else {
                    //añadimos un fallo y aumentamos kla velocidad de la roca
                    $_SESSION['fallos']++;
                    $_SESSION['velocidadroca'] =  $_SESSION['velocidadroca'] + 40;
                }
                //recalculamos la poscuion de la roca al recargar
                $_SESSION['posicionroca'] = $_POST['posicionroca'];
            }
            //sustituimos la letra pulsada que coincicida en el abecedarios por un "-"
            $_SESSION['abc'] = strtr($_SESSION['abc'],  $_SESSION['letra'], '-');
        }
    }


?>

<!DOCTYPE html>
<html>
<script src="javascript.js"></script>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>El Ahorcado de Crash Bandicoot</title>
    </head>
    <body onload="startTimer()">

        <form method="POST" name="formulario">
            <div class="contenido">
                <div class="imagenes">
                    <h1>El Ahorcado de Crash Bandicoot</h1>
                    <!-- Creamos todas las imagens que vamos a usar -->
                    <img class="final"  src="img/final.png">
                    <img id="Roca" class="Roca" src="img/roca1.png" style="left: <?php echo $_SESSION['posicionroca'] ?>px;">
                    <img id="Crash" class="Crash" src="img/crash1.png" style="left: <?php echo $_SESSION['posicion']?>px">
                    <img id="Crashbaile" class="Crashbaile" src="img/baile.gif">
                    <img id="Crashmuerte" class="Crashmuerte" src="img/muerte.png">
                    <img class="flechas" src="img/flechas.png">
                    <img class="botones" src="img/botones.png">
                </div>
                <!-- Ceamos elementos que apareceran cuando ganermos o perdamos -->
                <div id="Ganar" class="Ganar">
                    <img id="Logo" class="logo" src="img/logo.png">
                    <div id="hasganado" class="hasganado">¡has ganado¡</div>
                    <div class="reiniciar">Reiniciar? : </div>
                    <div class="btreiniciar">
                        <input type="submit" class="si" value="►Si" name="Reiniciarsi">
                        <input type="submit" class="no" value="►No" name="Reiniciarno"><br/>
                    </div>
                    <div type="text" class="fallos"> Has tenido <?php echo $_SESSION['fallos'] ?> fallos</div>
                </div>
                <!-- Ceamos los textos que se visualizarán -->
                <div class="letras">
                    <div class="letras1" id ="padivinar">Palabra a adivinar : <?php echo $_SESSION['invisible'] ?> </div>
                    <div class="letras2" id ="letraescrita">Escribe una letra : <input type="text" id="lescrita" name="letra" class="letra" onkeyup="submit()" size="1" autofocus="on"></div>
                    <div class="letras3">Letras restantes : <?php echo $_SESSION['abc'] ?></div>
                    <!-- Ceamos elementos invisibles que nos proporcioanan datos de php para obetnerlos en javascript -->
                    <div class="invisibles">
                        <input type="text" id="numpasos" class="numpasos" value="<?php echo $_SESSION['numpasos']?>">
                        <input type="text" id="distaciapaso" class="distaciapaso" value="<?php echo $_SESSION['distanciapaso']?>">
                        <input type="text" id="velocidadroca" class="velocidadroca" value="<?php echo $_SESSION['velocidadroca']?>">
                        <input type="text" id="posicionroca"  name="posicionroca" value="<?php echo $_SESSION['posicionroca'];?>">
                        <input type="text" id="invisible"  value="<?php echo $_SESSION['invisible'];?>">
                        <input type="text" id="letra"  value="<?php echo $_SESSION['letra'];?>">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>