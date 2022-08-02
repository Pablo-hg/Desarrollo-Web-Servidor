
<h1> 1º Genera un formulario y un script utilizando GET que envíe y recoja nombre
de empresa, email y password de un cliente. </h1>

<form action="Ejercicios.php" method="GET">
    Nombre de empresa : <input type="text" name="empresa"/> <br>
    Email : <input type="text" name="email"/> <br>
    Password : <input type="password" name="password"/> <br>
    <input type="submit" value="Enviar" name="enviar">
</form>
<?php
    if(isset($_GET['enviar'])){
        $empresa = filter_input(INPUT_GET, 'empresa', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_EMAIL);
        $paswd = filter_input(INPUT_GET,'password',FILTER_SANITIZE_STRING);

        echo "Empresa : $empresa<br>";
        echo "Correo : $email<br>";
        echo "Password : $paswd<br>";
    }
    else {
        "Haz click en enviar para subir tus datos";
    }
?>




