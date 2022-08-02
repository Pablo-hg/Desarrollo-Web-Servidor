<form action="post.php" method="POST">
    <input type="hidden" name="login" value="1"/>
    Usuario: <input type="text" name="usuario"/><br>
    Clave: <input type="password" name="clave"/>
    <p>
        <label><input type="checkbox" name="lenguajes[]" value="PHP"/>PHP</label>
        <label><input type="checkbox" name="lenguajes[]" value="JavaScript"/>JavaScript</label>
        <label><input type="checkbox" name="lenguajes[]" value="Java"/>Java</label>
    </p>
    <input type="submit" value="Acceder" name="acceder"/>
</form>

<?php
    //comprueobo que se ha enviado el formulario (ASI NO SE HACE)
    if (isset($_POST['acceder'])){
        /*(ASI NO SE HACE)
        $login = $_POST['login'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        $lenguajes = $_POST['lenguajes'];*/

        //ASI SE HACE
        $login = ilter_input(INPUT_POST,'login',FILTER_SANITIZE_NUMBER_INT);;
        $usuario = ilter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);;
        $clave =ilter_input(INPUT_POST,'clave',FILTER_SANITIZE_STRING);;;
        $lenguajes = $_POST['lenguajes'];


        //convierto los lenagujes seleccionados en strings separados por coma
        $texto = implode(", ", $lenguajes);

        //Muestro los datos
        echo "el valor de login es $login<br>";
        echo "el valor de usuario es $usuario<br>";
        echo "el valor de clave es $clave<br>";
        echo "el valor de lenguajes es $texto<br>";

        //No se puede manadar un array con GET, solo admite strings
    }
?>

