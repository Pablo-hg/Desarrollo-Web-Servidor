<!--
    º GET no es más inseguro que POST, ya que este ultimo es fácilmente inyectable por
        código malicioso si la página no tiene una encriptación básica tipo TLS.
    º Debemos evitar enviar información susceptible a través de GET como password o datos personales
    º Debemos utilizarlo, en general, solo cuando estemos proporcionando información al servidor
        relativa al contenido que queremos recuperar (orden, página, cantidad, etc.).
    º No debemos utilizarlo cuando estemos enviando información para que sea almacenada en el servidor.
    º GET mejora el SEO de nuestra página web y evita el típico mensaje de error de ¿desea reenviar el formulario?
    º GET proporciona al usuario la capacidad de alterar las consultas en la URL,
        lo cual puede generar errores para los que nuestro script debe estar preparado.
-->
<form action="get.php" method="GET">
    <!--- Si queremelos enlazar con sigo miso, no hace falta poner la linea anterior-->
        Lista: <input type="text" name="lista"/>
    Ordenar por:
    <select name="orden">
        <option value="nombre">Nombre</option>
        <option value="ciudad">Ciudad</option>
        <option value="cp">Código Postal</option>
    </select>
    Sort order:
    <select name="direccion">
        <option value="asc">Ascendente</option>
        <option value="desc">Descendente</option>
    </select>
    <input type="submit" value="Ver" name="ver"/>
</form>
<?php
//compurebo que he enviado el formulario
    if(isset($_GET['ver'])){
        //(ASI NO SE HACE)
        /*$lista = $_GET['lista'];
        $orden = $_GET['orden'];
        $direccion = $_GET['direccion'];*/

        //Recojo los valores(ASI SI SE HACE)
        //filtramos lo que introducimos por GET(al ser get), el nombre de la variable, y el filtro como tal
        $lista = filter_input(INPUT_GET,'lista',FILTER_SANITIZE_NUMBER_INT);
        $orden = filter_input(INPUT_GET,'orden',FILTER_SANITIZE_STRING);
        $direccion = filter_input(INPUT_GET,'direccion',FILTER_SANITIZE_STRING);

        echo "el valor de lista es $lista<br>";
        echo "el valor de orden es $orden<br>";
        echo "el valor de direccion es $direccion<br>";
    }
    else {
        "Haz cliclck en ver para que te muetsre los valores";
    }
?>




