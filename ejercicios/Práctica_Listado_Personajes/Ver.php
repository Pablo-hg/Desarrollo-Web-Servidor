<?php
//Iniciamos la sesion
session_start();
//Si recibimos un "id"
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $personaje = $_SESSION['totalpesonajes'][$id];
}
?>

<a href="index.php" title="Volver">Volver</a>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mas Info de un personaje</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
    <div class="cajainfo">
        <h1><?php echo $personaje['Nombre']." ".$personaje['Apellido'] ?></h1>
        <img src="<?php echo $personaje['Imagen'] ?>" alt="Imagen de un personaje">
        <h2>Nombre: </h2><?php echo $personaje['Nombre'] ?>
        <h2>Apellido: </h2><?php echo $personaje['Apellido'] ?>
        <h2>Doblador Original: </h2><?php echo $personaje['Doblador'] ?>
        <h2>Edad: </h2><?php echo $personaje['Edad'] ?>
    </div>
</body>
</html>
