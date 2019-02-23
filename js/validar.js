function validar() {
var empresa;
var puesto;
var perfil;
var experiencia;
var idiomas;
var nombre;
var telefono;
var correo;
var rfc;
var fecha;
empresa=document.getElementById("empresa").value;
puesto=document.getElementById("puesto").value;
perfil=document.getElementById("perfil").value;
experiencia=document.getElementById("experiencia").value;
idiomas=document.getElementById("idioma").value;
nombre=document.getElementById("nombre").value;
telefono=document.getElementById("telefono").value;
correo=document.getElementById("correo").value;
rfc=document.getElementById("rfc").value;
fecha=document.getElementById("fecha").value;

 if(empresa===""||puesto===""||puesto===""||perfil===""||experiencia===""||idiomas===""||nombre===""||telefono===""||correo===""||fecha===""||rfc===""){
    alert("todos los campos son obligatorios");
    return false;
    }

}

function validar_usuario() {


    var nombre;
    var imail;
    var inputPassword2;
    var inputPassword;
    var rfc;
    nombre=document.getElementById("nombre").value;
    imail=document.getElementById("email").value;
    inputPassword=document.getElementById("inputPassword").value;
    inputPassword2=document.getElementById("inputPassword2").value;
    rfc=document.getElementById("rfc").value;
    
    
     if(nombre===""||inputPassword===""||inputPassword2===""||imail===""||rfc===""){
        alert("todos los campos son obligatorios");
        return false;
        }


        if(inputPassword2 != inputPassword){
            alert("los campos de contraseña no coinciden");
            return false;
            }
   
    }