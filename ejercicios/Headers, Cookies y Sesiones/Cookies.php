
<!-- el usuario tiene el control de las cookies -->
<h1>Cookies</h1>
<?php
    //Las coockies se guradan en el navegador
    //Set cookie
    //nombre de cookie + valor cookie + fecha caducidad cookie
    setcookie("nombre", "Jairo", time() + 86400); //Almacena la cookie 1 día
    //setcookie("temporal", "10 segundos", time() + 10); //Almacena la cookie 10 segundos

    //si la coockie existe mostramos emensaje
    if(isset($_COOKIE["nombre"])){
        echo "la coockie existe";
    } else {//si borramos la cookie, muestro un mensaje
        echo "la coockie no existe";
    }

    //Delete cookie(no se puede borrar)
    //ponemos como valor nada y tiempo negativo
    //setcookie("nombre", "", -1);
?>
