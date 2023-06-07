document.addEventListener("readystatechange",main,false);
function main(){
    if(document.readyState === "interactive"){
        let form = document.getElementById("formregistro");
        let enviar = document.getElementById("registrar");

        let cambio = document.getElementById("formcambio");
        let cambiar = document.getElementById("cambiar");
        enviar.addEventListener("click",(e) =>{
            e.preventDefault();
            if(compruebaContrasena() === true){
                document.getElementById("error").style.display = "none";
                form.submit();
            } else{
                document.getElementById("error").style.display = "block";
            }
            if(compruebaCodigo() === true){
                document.getElementById("error2").style.display = "none";
                form.submit();
            } else{
                document.getElementById("error2").style.display = "block";
            }
            if(compruebaTel() === true){
                document.getElementById("error3").style.display = "none";
                form.submit();
            } else{
                document.getElementById("error3").style.display = "block";
            }
            if(compruebaEmail() == true){
                document.getElementById("error4").style.display = "none";
                form.submit();
            } else{
                document.getElementById("error4").style.display = "block";
            }
        });
        cambiar.addEventListener("click", (ev) =>{
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
function compruebaContrasena(){
    if(document.getElementById("pass").value !== "" && 
    document.getElementById("passconfirm").value !== ""){
        if(document.getElementById("pass").value == document.getElementById("passconfirm").value){
            return true;
        }else{
            return false;
        }
    }
}
function compruebaCodigo(){
    if(document.getElementById("codpostal").value !== ""){
        let expr = new RegExp("^[0-9]{5}$");
        if(expr.test(document.getElementById("codpostal").value)){
            return true;
        } else{
            return false;
        }
    }
}
function compruebaTel(){
    if(tel.value !== ""){
        let exp = new RegExp("^[0-9]{7,9}$");
        if(exp.test(document.getElementById("tel").value)){
            return true;
        } else{
            return false;
        }
    }
}
function compruebaEmail(){
    if(document.getElementById("email").value !== ""){
        let exp = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
        if(exp.test(document.getElementById("email").value)){
            return true;
        } else{
            return false;
        }
    }
}