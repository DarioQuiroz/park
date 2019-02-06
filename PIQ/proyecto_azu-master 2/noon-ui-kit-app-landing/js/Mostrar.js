
   var correo = null;
   var contraseña = null;
   

       //submit
       function recuperar(){
           correo = document.getElementById("inputEmail").value;
           contraseña = document.getElementById("inputPassword").value;
           if (correo=="correodeprueba@prueba.com" && contraseña=="contraseña") {
            alert(correo+" datos muy correctos "+contraseña);
 
    document.getElementById("formulario").style.display="block";
           } else {
               alert("datos incorrectos");
              
           }
       
       };

function mostrarvalidar(){
    document.getElementById("validar").style.display="block";
    document.getElementById("mostrar").style.display="none";
}/*
function ocultarvalidar(){ 

    document.getElementById("validar").style.display="none";
    document.getElementById("mostrar").style.display="none";
}
 function mostrarformulario(){
    document.getElementById("formulario").style.display="block";

 }
function ocultartodo(){
    document.getElementById("validar").style.display="none";
    document.getElementById("mostrar").style.display="block";
    document.getElementById("formulario").style.display="none";

}


*/