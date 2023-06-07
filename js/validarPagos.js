// document.getElementById("readystatechange", main, false);
// function main() {
//     if (document.readyState === "interactive") {
//         let form = document.getElementById("formpago");
//         let enviar = document.getElementById("pagar").addEventListener("click",comprobarTodo,false);
        
//         comprobarTodo();
//     }
// }
// function comprobarTodo(){
//     if(compruebaNumero() == true && compruebaFecha() == true && compruebaCVV == true){
//         form.submit();
//     } 
// }
function comprobarTodo(){
    if (document.getElementById("num").value.length == 15) {
        alert("numero correcto")
        document.getElementById("errornumeroc").style.display = "none";
    } else {
        alert("numero incorrecto")
        
        document.getElementById("errornumeroc").style.display = "block";
    }
    if (compruebaFecha() == true) {
        alert("fecha correcta");
        document.getElementById("errorfecvalidez").style.display = "none";
    } else {
        alert("fecha incorrecto")
        document.getElementById("errorfecvalidez").style.display = "block";
    }
    if (document.getElementById("cvv").value.lenght == 3) {
        alert("cvv correcto")
        document.getElementById("errorcvv").style.display = "none";
        
    } else {
        alert("cvv incorrecto")
        document.getElementById("errorcvv").style.display = "block";
    }
    
}
/*function compruebaNumero(){
    if (document.getElementById("num").value.length === 15) {
        alert("numero correcto")
        return true;
    } else {
        alert("numero incorrecto")
        document.getElementById("errornumeroc").style.display = "block";
        return false;
    }
}
function compruebaCVV(){
    if (document.getElementById("cvv").value.lenght == 3) {
        document.getElementById("cvv").style.display = "none";
        return true;
        
    } else {
        document.getElementById("cvv").style.display = "block";
        alert("cvv incorrecto")
        return false;
    }
}*/
function compruebaFecha() {
    var fechaHoy = new Date();
    var fec = new Date(document.getElementById("fec").value);
    if (fec > fechaHoy) {
        document.getElementById("fec").style.display = "none";
        alert("fecha corecta")
        return true;
    } else {
        document.getElementById("fec").style.display = "block";
        alert("fecha incorrecta")
        return false;
    }
}