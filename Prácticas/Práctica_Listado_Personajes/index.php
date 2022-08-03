<?php
//Iniciamos la sesion
session_start();

//Si pulsamos a resetear, reiniciamos la sesion y la volvemos a arrancar
if(isset($_POST['resetear'])){
    session_destroy();
    session_start();
}

//Si pulsamos a eliminar, obtenemos el id del personaje y lo borramos
if ($_GET['action']=="borrar"){
    $id = $_GET['id'];
    $nombreeliminado = $_SESSION['totalpesonajes'][$id]['Nombre'];
    unset($_SESSION['totalpesonajes'][$id]);
}
//Si pulsamos a buscar, obtenemos el valor recogido
// y eliminamos todos los personajes que no tengas ese valor
if (isset($_POST['buscar'])) {
    session_destroy();
    $_SESSION['letra'] = $_POST['buscar'];
    foreach($_SESSION['totalpesonajes'] as $keyorden => $row){
        $_SESSION['palabra'] = $_POST['buscar'];
        if(!in_array($_SESSION["palabra"],$_SESSION['personajes'][$keyorden]))
        unset($_SESSION['totalpesonajes'][$keyorden]);
    }
}

//Instanciamos las sesiones de los personajes
if(!isset($_SESSION['totalpesonajes'])){
    $_SESSION['texto'] = "";
    $_SESSION['ordenar'] = null;
    $_SESSION['paeliminar'] = "";
    $_SESSION['totalpesonajes'] = [
        [
            'Nombre' => "Homer",
            'Apellido' => "Simpson",
            'Doblador' => "Dan Castellaneta",
            'Edad' => "39",
            'Imagen' => "img/Homer.jpg"
        ],
        [
            'Nombre' => "Marge",
            'Apellido' => "Simpson",
            'Doblador' => "Julie Kavner",
            'Edad' => "32",
            'Imagen' => "img/Marge.png"
        ],
        [
            'Nombre' => "Bart",
            'Apellido' => "Simpson",
            'Doblador' => "Nancy Cartwright",
            'Edad' => "10",
            'Imagen' => "img/Bart.png"
        ],
        [
            'Nombre' => "Lisa",
            'Apellido' => "Simpson",
            'Doblador' => "Yeardley Smith",
            'Edad' => "8",
            'Imagen' => "img/Lisa.png"
        ],
        [
            'Nombre' => "Maggie",
            'Apellido' => "Simpson",
            'Doblador' => "N\A",
            'Edad' => "1",
            'Imagen' => "img/Maggie.png"
        ],
        [
            'Nombre' => "Abraham",
            'Apellido' => "Simpson",
            'Doblador' => "Dan Castellaneta",
            'Edad' => "104",
            'Imagen' => "img/Abuelo.gif"
        ],
        [
            'Nombre' => "Montgomery",
            'Apellido' => "Burns",
            'Doblador' => "Harry Shearer",
            'Edad' => "86",
            'Imagen' => "img/Burns.jpeg"
        ],
        [
            'Nombre' => "Ned",
            'Apellido' => "Flanders",
            'Doblador' => "Harry Shearer",
            'Edad' => "60",
            'Imagen' => "img/ned.jpeg"
        ],
        [
            'Nombre' => "Moe",
            'Apellido' => "Szyslak",
            'Doblador' => "Christopher Collins",
            'Edad' => "40",
            'Imagen' => "img/Moe.gif"
        ],
        [
            'Nombre' => "Krusty",
            'Apellido' => "El payaso",
            'Doblador' => "Dan Castellaneta",
            'Edad' => "64",
            'Imagen' => "img/krusty.jpg"
        ],
        [
            'Nombre' => "Apu",
            'Apellido' => "Nahasapeemapetilon",
            'Doblador' => "Hank Azaria",
            'Edad' => "37",
            'Imagen' => "img/apu.png"
        ],
        [
            'Nombre' => "Milhouse",
            'Apellido' => "Van Houten",
            'Doblador' => "Gisela Casillas ",
            'Edad' => "11",
            'Imagen' => "img/milhouse.jpeg"
        ],
        [
            'Nombre' => "Armin 'Seymour'",
            'Apellido' => "Tamzarian 'Skinner",
            'Doblador' => "Harry Shearer",
            'Edad' => "67",
            'Imagen' => "img/skinner.jpg"
        ],
        [
            'Nombre' => "Clancy",
            'Apellido' => "Wiggum",
            'Doblador' => "Hank Azaria",
            'Edad' => "42",
            'Imagen' => "img/clancy.png"
        ],
        [
            'Nombre' => "Ralph",
            'Apellido' => "Wiggum",
            'Doblador' => "Nancy Cartwright",
            'Edad' => "8",
            'Imagen' => "img/ralph.png"
        ],
        [
            'Nombre' => "Barney",
            'Apellido' => "Gumble",
            'Doblador' => "Dan Castellaneta",
            'Edad' => "40",
            'Imagen' => "img/barney.jpeg"
        ],
        [
            'Nombre' => "Waylon",
            'Apellido' => "Smithers",
            'Doblador' => "Harry Shearer",
            'Edad' => "40",
            'Imagen' => "img/smither.jpg"
        ],
        [
            'Nombre' => "Edna",
            'Apellido' => "Krabappel",
            'Doblador' => " Marcia Wallace",
            'Edad' => "40",
            'Imagen' => "img/edna.jpg"
        ],
        [
            'Nombre' => "Bob",
            'Apellido' => "Actor secundario",
            'Doblador' => "Kelsey Grammer",
            'Edad' => "0",
            'Imagen' => "img/bob.jpg"
        ],
        [
            'Nombre' => "Nelson",
            'Apellido' => "Muntz",
            'Doblador' => "Nancy Cartwright",
            'Edad' => "11",
            'Imagen' => "img/nelson.jpg"
        ],
        [
            'Nombre' => "Troy",
            'Apellido' => "McClure",
            'Doblador' => "Phil Hartman",
            'Edad' => "40",
            'Imagen' => "img/troy.jpg"
        ],
        [
            'Nombre' => "Lenny",
            'Apellido' => "Leonard",
            'Doblador' => "Harry Shearer.",
            'Edad' => "40",
            'Imagen' => "img/lenny.jpg"
        ],
        [
            'Nombre' => "Carl",
            'Apellido' => "Carlson",
            'Doblador' => "Hank Azaria",
            'Edad' => "40",
            'Imagen' => "img/carl.gif"
        ],
        [
            'Nombre' => "Hans",
            'Apellido' => "Moleman 'Topo",
            'Doblador' => "Dan Castellaneta",
            'Edad' => "100",
            'Imagen' => "img/hans.jpg"
        ],
        [
            'Nombre' => "Tony",
            'Apellido' => "El Gordo",
            'Doblador' => "Joe Mantegna",
            'Edad' => "40",
            'Imagen' => "img/tony.jpg"
        ],
    ];
}

//Si hemos recibido la accion de "actualizar",
//recuperamos los valores los los establecemos como los originales
if (isset($_POST['actualizar'])) {
    $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
    $nombrev2 = filter_input(INPUT_POST,'nombre',FILTER_SANITIZE_STRING);
    $apellidov2 =filter_input(INPUT_POST,'apellido',FILTER_SANITIZE_STRING);
    $doblador2 =filter_input(INPUT_POST,'doblador',FILTER_SANITIZE_STRING);
    $edad2 =filter_input(INPUT_POST,'edad',FILTER_SANITIZE_NUMBER_INT);
    $imagenv2 = filter_input(INPUT_POST,'imagen',FILTER_SANITIZE_STRING);

    $_SESSION['totalpesonajes'][$id] = [
        'Nombre' => $nombrev2,
        'Apellido' => $apellidov2,
        'Doblador' => $doblador2,
        'Edad' => $edad2,
        'Imagen' => $imagenv2

    ];
}

//Si pulsamos a Ordenar
if(isset($_POST['ordenar'])){
    //recojemos los vcalores de los selects
    $_SESSION['orden']=filter_input(INPUT_POST,'Ordenar',FILTER_SANITIZE_STRING);
    $_SESSION['filtro']=filter_input(INPUT_POST,'Filtrar',FILTER_SANITIZE_STRING);
    //dependiendo del valor del orden...
    switch ($_SESSION['orden']){
        case "Ascendente"://Ordenar alfa (a-z)
            $_SESSION['ordenar'] = SORT_ASC;
            break;
        case "Descendente"://Ordenar alfa (z-a)
            $_SESSION['ordenar'] = SORT_DESC;
            break;
    }
    //creamos un nuevo array al cual le añadimos los valores
    //de array original pero ordenados de x manera
    $personajesV2 = array();
    foreach ($_SESSION['totalpesonajes'] as $keyorden => $row){
        $personajesV2[$keyorden] = $row[$_SESSION['filtro']];
    }
    if(!$_SESSION['filtro']=="") {
        //Sustituimos el array original por el nuevo y ordenador segun el tipo de orden
        array_multisort($personajesV2, $_SESSION['ordenar'], $_SESSION['totalpesonajes']);
    }
    else echo "Introduce un filtro para ordenar";
}



?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de personajes</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
    <form method="POST" name="listado">
        <img src="img/titulo.png" style="width: 1200px; height=533px; padding-left: 20%; background-color: transparent;" >
        <h1>Personajes</h1>
        <p>Filtrar por :
        <select name="Filtrar">
            <option></option>
            <option value="Nombre">Nombre</option>
            <option value="Apellido">Apellido</option>
            <option value="Doblador">Doblador</option>
            <option value="Edad">Edad</option>
        </select>
        <br>Ordenar por orden:
        <select name="Ordenar">
            <option></option>
            <option value="Ascendente">Ascendente</option>
            <option value="Descendente">Descendente</option>
        </select><br/>
            Buscador : <input class="buscar" type="text" name="buscar" >
            <a href="index.php" title="buscador">
            <img src="img/lupa.png" style="width: 3%; height: 3%; background: transparent"></a>
        </p>
        <input class="ordenar" type="submit" value="Ordenar" name="ordenar">
        <input class="resetear" type="submit" value="Resetear Ordenación (pulsa 1º aqui)" name="resetear"><br/>
        <div class="Listado">
            <br>
            <!-- recorremos todos los personajes para imprimir sus valores -->
            <?php foreach ($_SESSION['totalpesonajes'] as $indice => $fila){?>
                <div class="CajaInfo">
                    <img src="<?php echo $fila['Imagen']?>" alt="<?php echo $fila['Imagen']?>">
                    <div class="Datos">
                        <p>
                            <!-- Cargamos la pagina "ver.php" pasandole como id el indice
                             de dicho personaje al que pulsemos -->
                            <a href="Ver.php?id=<?php echo $indice ?>" title="ver">
                                <img src="img/ojos.png" style="width: 20%; height: 20%; background: transparent"></a>
                            <a href="Editar.php?id=<?php echo $indice ?>" title="editar">
                                <img src="img/lapiz.png" style="width: 15%; height: 15%; background: transparent"></a>
                            <a href="index.php?action=borrar&id=<?php echo $indice ?>" title="borrar">
                                <img src="img/basura.png" style="width: 13%; height: 13%; background: transparent"></a>
                        </p>
                        <!--  Imprimimos el valor de cada fila como texto -->
                        <h2>Nombre:</h2><h3> <?php echo $fila['Nombre'] ?></h3>
                        <h2>Apellido:</h2><h3><?php echo $fila['Apellido'] ?></h3>
                        <h2>Doblador:</h2><h3><?php echo $fila['Doblador'] ?></h3>
                        <h2>Edad:</h2><h3><?php echo $fila['Edad'] ?></h3>
                        <p>
                    </div>
                </div>
            <?php }?>
        </div>
    </form>
</body>
</html>