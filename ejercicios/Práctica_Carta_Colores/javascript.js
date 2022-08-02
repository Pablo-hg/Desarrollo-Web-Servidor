
window.onkeydown=Teclapulsada;
num1 = 100;
range1 = 100;
rojo1 = 0;
verde1 = 0;
azul1 = 255;
hexa1 = "0000ff";

//Al pulsar la tela p, cambiamos los valores
function Teclapulsada(event){
    tecla = event.keyCode;
    if(tecla==80){//tecla p
        //Cambiar la opacidad
        valornume = document.getElementById("numopa").value;
        valorrange = document.getElementById("rangeopa").value
        //dependiendo si hemos cambiado un elemento u otro, cambiara el valor del otro
        if(num1!=valornume){
            document.getElementById("rangeopa").value = valornume;
            num1 = valornume;
            range1 = valornume;
            valorrange = document.getElementById("rangeopa").value
        }
        if (range1!=valorrange){
            document.getElementById("numopa").value = valorrange;
            num1 = valorrange;
            range1 =valorrange;
            valornume = document.getElementById("numopa").value;
        }
        //Cambiar el hexadecimal a rgb
        //Obtenemos le v alor de los inputs
        valorrojo = document.getElementById("rojo").value
        valorverde = document.getElementById("verde").value
        valorazul = document.getElementById("azul").value
        //Apartir de las funciones, obtenemos el valor Hex de los 3 inputs anteriores
        valorhexa = rgbToHex(parseInt(valorrojo),parseInt(valorverde) , parseInt(valorazul));
        //Escribimos el nuevo valor al input
        document.getElementById("hexa").value = valorhexa;
    }
}

function rgbToHex(r, g, b) {
    return componentToHex(r) + componentToHex(g) + componentToHex(b);
}
function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}









