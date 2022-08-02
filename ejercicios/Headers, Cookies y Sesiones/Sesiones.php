
<!-- el usuario no tiene el control de las cookies -->
<h1>Sesiones</h1>

<?php
    //Inicializo sesión
    //La sesion dura hasta que cerrenemos el navegador(no la ventana)
    //las sesiones se guardan en el servidor
    session_start();

    //Almaceno datos en sesión
    //$_SESSION['nombre'] = "Jairo"; //Cadena de texto
    echo $_SESSION['nombre'];

    //Después de recargar la página y mientras no cierre el navegador, podré acceder a la variable
    //$nombre = $_SESSION['nombre'];
?>
