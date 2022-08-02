
<?php

//Inicio la sesion
session_start();

if (isset($_SESSION['nombre'])){
    //Muestro el valor de nombre
    echo "El nombre es " . $_SESSION['nombre'];
}
else{
    echo "todavia no has completado el formulario";
}

?>