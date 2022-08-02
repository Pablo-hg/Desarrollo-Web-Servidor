
<h1> 5º Modifica el formulario del ejercicio 1 para que sea
    de tipo POST e incluya sexo (con radio) e idiomas hablados
    (con checkbox, 5 opciones más una caja de texto para otros idiomas)
    y para que se guarden todos los datos en un fichero de texto. </h1>

<form enctype="multipart/form-data" action="Ejercicio5.php" method="POST">
    Nombre de empresa : <input type="text" name="empresa"/> <br>
    Email : <input type="text" name="email"/> <br>
    Password : <input type="password" name="password"/> <br>
    Sexo :<br>
    <input type="radio" name="sexo" value="hombre"> Hombre<br>
    <input type="radio" name="sexo" value="mujer"> Mujer<br>
    <input type="radio" name="sexo" value="otro"> Otro<br>
    Idiomas : <br>
    <label><input type="checkbox" name="idiomas" value="español"/>Español</label><br>
    <label><input type="checkbox" name=idiomas" value="frances"/>Frances</label><br>
    <label><input type="checkbox" name=idiomas" value="ingles"/>Ingles</label><br>
    <label><input type="checkbox" name=idiomas" value="aleman"/>Aleman</label><br>
    <label><input type="checkbox" name=idiomas" value="italiano"/>Italiano</label><br>
    Otro : <input type="otros" name="otros"/> <br>
    <input type="submit" value="Guardar" name="guardar"><br>


    <?php
    if(isset($_POST['guardar'])){
        $empresa = filter_input(INPUT_GET, 'empresa', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_GET,'email',FILTER_SANITIZE_EMAIL);
        $paswd = filter_input(INPUT_GET,'password',FILTER_SANITIZE_STRING);
        $file = fopen("C:\Users\pablo.horcajada\pruebas\archivo.txt", "w+");
        $texto_salida  = "";
        $texto_salida  .= " Los datos son : \n";
        fwrite($file,$texto_salida);
        fwrite($file,"Empresa :" . $_POST['empresa'] . PHP_EOL);
        fwrite($file,"Email : " . $_POST['email'] . PHP_EOL);
        fwrite($file,"Password : " . $_POST['password'] . PHP_EOL);
        fwrite($file,"Sexo : " .$_POST['sexo'] . PHP_EOL);
        fwrite($file,"Idiomas : ". $_POST['idiomas'] . PHP_EOL);
        fwrite($file,"Otro : " . $_POST['otros'] . PHP_EOL);
        fclose($file);
        echo "Revisa el fichero C:\Users\pablo.horcajada\pruebas\archivo.txt con los datos";
    }
    ?>
