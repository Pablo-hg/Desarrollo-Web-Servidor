<!
/*
Desarrolla un juego web cuyo objetivo es una diana horizontal para acertar en el medio de un control de tipo deslizante con las siguientes especificaciones:
    -El control debe tener un ancho del 50% de la pantalla.
    -Al cambiar el valor del control, la página debe devolver el valor conseguido entre 0 y 100.
    -Modifica ahora el valor devuelto con las siguientes especificaciones:
        Si es 50, debe mostrar el valor y el texto en color rojo: “¡Enhorabuena, acertaste!”
        Si está entre 40 y 60, debe mostrar el valor y el texto en color naranja: “Has estado cerca, prueba otra vez”.
        En cualquier otro caso, debe mostrar el valor en conseguido en color verde.
    -PLUS: Modifica ahora el juego para que el deslizador permita seleccionar un nivel de juego entre 1 y 3.
         Al seleccionar un nivel, el ancho del deslizador debe ser, respectivamente, de 10%, 50% (valor por defecto) y 100%.
 */
>

<!-- Incluyo el archivo php con la logica-->
<?php
include "logica.php"
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Diana horizontal</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--creamos en "enlaze" al archivo javascript-->
        <script type="text/javascript" src="JS/scripts.js"></script>
    </head>
    <body>
    <h1>Bienvenid@ al juego de la diana horizontal con niveles</h1>
    <?php if($diana){ ?>
            <!-- llamamos a las clase que corresponda con dicha clase en el css-->
        <p class="<?php echo $clase ?>">
            <?php echo $texto ?>
        </p>
        <p>
            <! creamos una linea que al pulsarla recarga la pagina>
            <a href="index.php">Volver a jugar</a>
        </p>
    <?php } else { ?>
        <p>
            Selecciona el nivel y pulsa en el centro de la diana para jugar
        </p>
        <div>
            <input type="button" onclick="CambiarNivel(100)" value="Nivel1: 100%">
            <input type="button" onclick="CambiarNivel(50)" value="Nivel2: 50%">
            <input type="button" onclick="CambiarNivel(10)" value="Nivel3: 10%">
        </div>
        <form>
            <input type="range" min="0" max="100" name="diana" value="0" id="diana" onchange="this.form.submit()">
            <! 1ºtipo del slider, 2º y 3ºvalores min y max ,4ºnombre, 5ºvalor al empezar ,6ºal haber un cambio en el slider
            <! range = slider >
            <! onchange= al haber un cambio hacemos algo>
            <! this.form.submit() = enviamos el formulario>
        </form>
    <?php } ?>
    </body>
</html>


