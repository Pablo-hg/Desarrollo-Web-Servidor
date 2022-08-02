
<h1> 6º Genera un formulario de subida de ficheros que solo acepte imágenes
    (mediante MIME) y además las almacene en una carpeta del proyecto
    utilizando como nombre imagen-12345, imagen-24232, imagen-54532, etc. </h1>

<form enctype="multipart/form-data" action="Ejercicio6.php" method="POST">
    <input type="file" name="archivo"/>
    <input type="submit" value="Subir archivo" name="subir"/>
</form>

<?php
    if (isset($_POST['subir'])){
        $file = $_FILES['archivo'];
        print_r($file);
        $directorio_subida = "C:\xampp\htdocs\Formularios\ ";
        //tipo de imagen
        $tipo = $_FILES['archivo']['type'];
        $es_imagen = (substr($tipo,0,5)=="image");
        //nombre de la imagen
        $nombre = "imagen-" . random_int(10000,99999);
        //extension de la imagen
        $path = pathinfo( $_FILES['archivo']['name']);
        $extension = $path('extension');
        //le encadeno el nombre al fichero
        $archivo_subido = $directorio_subida . $nombre . "." . $extension;
        //ruta para mostarar
        $img = $directorio_subida . $nombre . $extension;

        if($es_imagen){
            if (is_uploaded_file($archivo_subido['tmp_name']) &&
                move_uploaded_file($archivo_subido['tmp_name'], $archivo_subido)) {
                echo "El fichero se ha subido.\n";
                print_r($archivo_recibido);
            } else {
                echo "No es una imagen";
            }
        }
    }

?>
