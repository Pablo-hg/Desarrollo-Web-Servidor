
<?php
    /*Añade un formulario sencillo que permita borrar la cookie
     y recargar la página. */

    //compruebo que la cookie aun no existe
    if(!isset($_COOKIE['micookie'])) {
        //set cookie por 1 dia
        setcookie("micookie", "Hola, soy tu amigo cookie por 1 dia", time() + 86400);

        echo "La coockie se ha creado, recarga la pagina.";
    }
    else {
        echo "La cookie tiene el valor " . $_COOKIE['micookie'];
        ?>
        <form>
            <!-- El input recargará la pagina -->
            <input type="submit" name="borrar" value="Borrar coockie">
        </form>
        <?php if(isset($_GET['borrar'])){
            setcookie("micookie","",-1);
            //Recargo la pagina
            header('Location:ejercicio9.php');
        }
    } ?>
Genera un formulario sencillo que recoja tu nombre, lo almacene en sesión y, al abrir otro archivo php mediante un enlace, muestre tu nombre recuperando dicha variable.
