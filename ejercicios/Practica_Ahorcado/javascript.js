

var images = [],images2 = [], x = 0, y=0;
images[0] = "img/crash1.png";
images[1] = "img/crash2.png";
images[2] = "img/crash3.png";
images[3] = "img/crash4.png";
images[4] = "img/crash5.png";
images[5] = "img/crash6.png";
images[6] = "img/crash7.png";
images[7] = "img/crash8.png";
images[8] = "img/crash9.png";
images[9] = "img/crash10.png";
images[10] = "img/crash11.png";

images2[0] = "img/roca2.png";
images2[1] = "img/roca3.png";
images2[2] = "img/roca4.png";
images2[3] = "img/roca1.png";
images2[4] = "img/roca2.png";
images2[5] = "img/roca3.png";
images2[6] = "img/roca4.png";
images2[7] = "img/roca1.png";

var x = 0;
var z = 0;
var posicion = 0;
var posicionroca = 0;
var numpasos = 0;
var velocidadroca = 0;
var velocidad = 0;
var distaciapaso = 0;
var minipaso = 0;
var minipasoroca = 0;
var palabra = "";
var letra = "";
var baile = new Audio('music/cancion.mp3');
var muerte = new Audio('music/woo.mp3');

//Functionq ue mueve a crash cambiando de imagen
function MoveraCrash() {
    posicion = document.getElementById("Crash").style.left;
    numpasos = document.getElementById("numpasos").value;
    distaciapaso = document.getElementById("distaciapaso").value;
    palabra = document.getElementById("invisible").value;
    letra = document.getElementById("letra").value;

    //cambiamos algunos ajustes de crash y lo movemos
    if (x != 11 && numpasos!=4 && palabra.includes(letra)){
        document.getElementById("Crash").src = images[x];
        if (images[x] == "img/crash2.png" || images[x] == "img/crash3.png" || images[x] == "img/crash4.png") {
            document.getElementById("Crash").style.weight = "15%";
        } else document.getElementById("Crash").style.weight = "10%";
        minipaso = parseInt(posicion)+(distaciapaso/10);
        document.getElementById("Crash").style.left = minipaso+"px";
        //console.log(parseInt(posicion));
        //console.log(distaciapaso/10);
        x++;
        //console.log(numpasos);
    }
    //si llega a la poscion final con el frame final
    if(x==11 && numpasos==0){
        //cambiamos otros ajustes de crash y reproduicimos el sonido
        document.get("Crash").style.visibility = "hidden";
        document.getElementById("Crashbaile").style.visibility = "visible";
        document.getElementById("Ganar").style.visibility = "visible";
        document.getElementById("Roca").style.left = 300+"px";
        z = 0;
        minipasoroca = 0;
        document.getElementById("lescrita").style.visibility = "hidden";
        baile.play();

    }
}

//Funcion que mueve la roca continuamente
function MoverRoca(){
    posicionroca = document.getElementById("Roca").style.left;
    if(parseInt(posicionroca)<=1430) {
        if (z != 8) {
            document.getElementById("Roca").src = images2[z];
            minipasoroca = parseInt(posicionroca) + 5;
            document.getElementById("Roca").style.left = minipasoroca + "px";
            document.getElementById("posicionroca").value = minipasoroca;
            z++;
            if (z == 8) {
                z = 0;
            }
        }
    }
    //Si la roca "choca" con crash...
    if((parseInt(posicion)-parseInt(posicionroca))<260) {
        //Camniamos algunos ajustes visuales y reproducimos un sonido
        document.getElementById("Crashmuerte").style.visibility = "visible";
        document.getElementById("Crashmuerte").style.left = parseInt(posicion) + "px";
        document.getElementById("Crash").style.visibility = "hidden";
        document.getElementById("Ganar").style.visibility = "visible";
        document.getElementById("Logo").src = "img/GameOver.PNG";
        document.getElementById("Logo").style.height = "40%";
        document.getElementById("hasganado").style.visibility = "hidden";
        document.getElementById("lescrita").style.visibility = "hidden";
        muerte.play();
    }
}


//Funncio que se ejecutara cada vez quew recargo
// y ejecutará el resto de funciones cada x segundos
function startTimer() {
    velocidadroca = document.getElementById("velocidadroca").value;
    velocidad = 500 - parseInt(velocidadroca);
    setInterval(MoveraCrash, 90);
    setInterval(MoverRoca, velocidad);
}












