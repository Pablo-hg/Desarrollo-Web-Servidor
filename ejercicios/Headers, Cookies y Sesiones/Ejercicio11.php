

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio11</h1>
    <p>
        Genera un número aleatorio de 10 dígitos y, mediante un formulario que solo admita un número del 0 al 9 cada vez,
        desarrolla la lógica necesaria para que se vaya adivinando (y mostrando) el número. Debes llevar además la cuenta
        de los errores cometidos (dígitos no incluidos en el número aleatorio
    </p>
    <?php
        //Iniicio la sesion
        session_start();
        if(isset($_GET['reiniciar'])){
            session_destroy();
            session_start();
        }
        //Si no esta generadp el numero, lo genero y lo alamaceno en sesion
        if(!isset($_SESSION['numero'])) {
            //numero aleatotrio de 10 digitos
            $_SESSION['numero'] = rand(1000000000, 9999999999);
            //convierto el numero en un array de 10 digitos
            $_SESSION['original'] = str_split($_SESSION['numero'],1);
            //genero el array de *
            $_SESSION['resuelto'] = [];
            for($i=0;$i<10;$i++){
                $_SESSION['resuelto'][] = "*";
            }
            //Inicializo variable para los errores
            $_SESSION['errores']=0;
            $_SESSION['erroneos']=[];
        }
        //recojo el numero del formulario
        if(isset($_GET['digito'])){
            //booleano para ver si ahy error
            $acierto = false;
            //recorro el array el numero original
            foreach ($_SESSION['original'] as $indice => $valor){
                //si coinciden el valor y el numero introducido
                if($valor==$_GET['digito']){
                    //Asigno el valor de ese indice al rray de *
                    $_SESSION['resuelto'][$indice] = $valor;
                    //no hay error
                    $acierto =  true;
                }
            }
            //si on ha habdio acierto, es un error
            if(!$acierto){
                $_SESSION['errores']++;
                //añadi el digito al aray(si no estaba ya)
                if(!in_array($_GET['digito'],$_SESSION['erroneos'])){
                    array_push($_SESSION['erroneos'],$_GET['digito']);
                }
            }
        }
    ?>
    <p>
        Numero generado : <strong><?php  echo $_SESSION['numero']?> </strong>
    </p>
    <p>
        Numero adivinado : <strong><?php  echo implode("",$_SESSION['resuelto']) ?> </strong>
    </p>
    <p>
        Numero erroneos : <strong><?php  echo implode(", ",$_SESSION['erroneos']) ?> </strong>
    </p>
    <p>
        Errores cometidos: <strong><?php  echo $_SESSION['errores'] ?> </strong>
    </p>
    <form>
        <input type="submit"  value="Reiniciar" name="reiniciar">
    </form>
    <?php
    if(in_array("*",$_SESSION['resuelto'])){?>
    <form name="enviar">
        <p>
            Introduce un digito del 0 al 9 :
            <input type="number" min="0" max="9" name="digito" onkeyup="enviar.submit()" autofocus>
        </p>
    </form>
    <?php } else  {?>
    <p>
       <strong>HAS GANADO EL NUMERO</strong>
    </p>
    <?php } ?>
</body>
</html>