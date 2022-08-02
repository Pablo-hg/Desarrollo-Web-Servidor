
<!
 EJERCICIO PROPUESTO
Desarrolla un juego web para jugar a pares o nones contra el ordenador con las siguientes especificaciones:
    -Tú serás pares y debes poder elegir del 1 al 5 en cada tirada
    -La máquina será nones y elegirá un número del 1 al 5 en cada tirada
    -Un texto debe mostrar el número que tú elegiste, el que eligió la máquina y quién ha ganado.*/
>


<?php
    //Recupereamos el campo del formulario y lo guardamos en una variable
    //para comprobar si la variable existe...
    /*if(isset($_GET['boton'])){ // if(isset()) ->si la funcion existe...
        $boton = $_GET['boton'];
    }
    else{
        $boton = null;
    }
    //Muestro el valor pulsado si tiene un valor
    if($boton){
        echo "has pulsado " .$boton;
    }
    */
    //Recupereamos el campo del formulario del usuario
        $boton = $_GET['boton'] ?? null; //OPERADOR NULO
    //Y hacemos los calculos de quien ha ganado
        if($boton){
            //Texto de salida
            $texto = "Tú has elegido <strong>". $boton.  "</strong><br>";
            //generamos un numero aleatorio entre 1 y 5
            $maquina = rand(1,5);
            //Encadenamos texto a la variable $texto con ".=
            $texto .= "La maquina ha elegido <strong>".$maquina."</strong><br>";
            //Sumanos los numeros
            $suma = $boton + $maquina;
            //compruebo quien ha ganado
            /*if ($suma % 2 == 0){
                //Jugador gana
                $texto .= "HAS GANADO";
            }
            else{
                //Maquina gana
                $texto .= "HAS PERDIDO";
            }*/
            $texto .= ($suma % 2 == 0) ? "HAS GANADO" : "HAS PERDIDO";
        }
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pares o Nones</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Bienvenid@ al juego de pares y nores</h1>
        <?php if($boton){ ?>
            <p>
                <?php echo $texto ?>
            </p>
            <p>
                <! creamos una linea que al pulsarla recarga la pagina>
                <a href="index.php">Volver a jugar</a>
            </p>
        <?php } else { ?>
            <p>
                Tu serás pares y la maquina nones.
                Escoje un número para continuar.
            </p>
            <form>
                <! form indica que el usuario interactua cn la pagina>
                <! imput se encarga de recargar la pagina>
                <! type="submit" es un boton en html>
                <input type="submit" name="boton" value="1">
                <input type="submit" name="boton" value="2">
                <input type="submit" name="boton" value="3">
                <input type="submit" name="boton" value="4">
                <input type="submit" name="boton" value="5">
            </form>
    <?php } ?>
    </body>
</html>

