document.addEventListener("readystatechange",main,false);
function main(){
    if(document.readyState === "interactive"){
        let cambio = document.getElementById("formcambio");
        let enviar = document.getElementById("cambiar");

        enviar.addEventListener("click", (ev) =>{
            ev.preventDefault();
            if(compruebaCambioConstrasena() == true){
                document.getElementById("error").style.display = "none";
                cambio.submit();
            }else{
                document.getElementById("error").style.display = "block";
            }
        });
    }
}
function compruebaCambioConstrasena(){
    if(document.getElementById("nuevapass").value !== "" && 
    document.getElementById("confirmnpass").value !== ""){
        if(document.getElementById("nuevapass").value == document.getElementById("confirmnpass").value){
            return true;
        }else{
            return false;
        }
    }
}