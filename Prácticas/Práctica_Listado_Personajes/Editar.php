<?php
//Iniciamos la sesion
session_start();
//Si recibimos un "id"
if(isset($_GET['id'])) {
    //guardamos el id para obetner el personaje que tenga dicho "id"
    $id = $_GET['id'];
    $personaje = $_SESSION['totalpesonajes'][$id];
}
?>
<!Doctype html>
<a href="index.php" title="Volver">Volver</a>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mas Info de un personaje</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <div class="cajainfo">
        <!-- Del personaje que hemos obtenido, imprimimos sus valores -->
        <h1><?php echo $personaje['Nombre']." ".$personaje['Apellido'] ?></h1>
        <img src="<?php echo $personaje['Imagen'] ?>">
        <form method="POST" action="index.php">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="imagen" value="<?php echo $personaje['Imagen'] ?>">
            <h2>Nombre: </h2><input type="text" value="<?php echo $personaje['Nombre'] ?>" name="nombre">
            <h2>Apellido: </h2><input type="text" value="<?php echo $personaje['Apellido'] ?>" name="apellido">
            <h2>Doblador Original: </h2><input type="text" value="<?php echo $personaje['Doblador'] ?>" name="doblador">
            <h2>Edad: </h2><input type="text" value="<?php echo $personaje['Edad'] ?>" name="edad"><br><br>
            <!-- Creamos un input tipo "submit" para poder recuperar los valores introducidos y añadirlos en en otro archivo -->
            <input type="submit" value="Actualizar" name="actualizar">
        </form>

    </div>
</body>
</html>
