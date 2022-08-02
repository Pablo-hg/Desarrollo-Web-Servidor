

<!--
    Para poder subir ficheros al servidor mediante formularios debemos utilizar
    siempre el método POST y recuperar los datos mediante el array superglobal $_FILES.

    Si quiero subir un archivo, debe incluir "enctype="multipart/form-data" en el form

 -->

<form enctype="multipart/form-data" action="Subida_de_Ficheros.php" method="POST">
    <input type="file" name="archivo"/>
    <input type="submit" value="Subir archivo" name="subir"/>
</form>

<?php
    if (isset($_POST['subir'])){//si he pulsado en el boton de subir
        //guardo el archivo en la variable $archivo_recibido
        $archivo_recibido = $_FILES['archivo'];
        print_r($archivo_recibido);
        //Defino el directoriod e subida
        $directorio_subida = 'D:\Cosas de todo\Desarrollo web-servidor (Jairo)/';
        //encadenamos el nombre del fichero a la direccion
        $archivo_subido = $directorio_subida . basename($archivo_recibido['name']);
        //Subo el fichero.
        //is_uploeaded_file --> compruebo que se ha subido al directorio temporal
        //move_uploaded_file --> comprueba que lo ha podido guardar en la ruta definitiva
        if (is_uploaded_file($archivo_recibido['tmp_name']) &&
            move_uploaded_file($archivo_recibido['tmp_name'], $archivo_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
            ?> <img src="D:\Cosas de todo\Desarrollo web-servidor (Jairo)\<?php $archivo_subido?>">
        <?php
        } else {
            echo "Se ha producido un error al subir el archivo.\n";
        }
    }
?>


