//Funciona para cambiar el nivel del juego (el ancho de la diana)
function CambiarNivel(nivel){
    //Accedo al elemento de la diana
    var diana = document.getElementById("diana");

    /*Establezo y aplico el ancho en funcion del nivel
    if(nivel ==1){
        diana.style.width = "100%";
    }
    else if(nivel ==2){
        diana.style.width = "50%";
    }
    else{
        diana.style.width = "10%";
    }*/
    diana.style.width = nivel + "%";


}