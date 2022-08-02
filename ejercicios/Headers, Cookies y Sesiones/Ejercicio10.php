
<?php
    /*Genera un formulario sencillo que recoja tu nombre,
    lo almacene en sesión y, al abrir otro archivo php mediante un enlace,
     muestre tu nombre recuperando dicha variable.
 */

//Inicio la sesion
session_start();
?>

<form>
    <input type="text" name="nombre" value="Introduce tu nombre"><br>
    <input type="submit" name="enviar" value="Enviar"><br>
    <input type="submit" name="borrar" value="Borrar sesion"><br>
</form>

<?php
    if(isset($_GET['enviar'])){
        //recojo el valor del nombre
        $nombre = filter_input(INPUT_GET,"nombre",FILTER_SANITIZE_STRING);
        //lo gurado en la sesion
        $_SESSION['nombre'] = $nombre;
        echo "He guarado el nombre en sesion. Pinha <a href='Ejercicio10-2.php'>AQUI</a> para comprobarlo";
    }
    if(isset($_GET['borrar'])){
        //borro la sesion
        session_destroy();
        session_start();
        echo "He reseteado la sesion el nombre en sesion. Pincha <a href='Ejercicio10-2.php'>AQUI</a> para comprobarlo";
    }
    //EJERCICIO DE NETREGA
    //NO SE USAN COKKIES
?>