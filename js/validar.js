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
    rfc2=document.getElementById("rfc2").value;
    
    
     if(nombre===""||inputPassword===""||inputPassword2===""||imail===""||rfc===""||rfc2===""){
        alert("todos los campos son obligatorios");
        return false;
        }


        if((inputPassword2 != inputPassword || rfc != rfc2) ){
            alert("los campos de contraseña o de RFC no coinciden");
            return false;
            }

            if((rfc.length<11) ){
                alert("El campo del RFC debe contener como minimo once carcteres y máximo trece.");
                return false;
                }
   
    }



    
function validar_prov() {

    var nombre;
    var giro;
    var contacto;
    var direccion;
    var telefono;
    var rfc;
    var correo;
    var sitioweb;
    var Referencia1;
    var Referencia2;
    var Referencia3;
    var pdf;
   

    nombre=document.getElementById("nombre").value;
    giro=document.getElementById("giro").value;
    contacto=document.getElementById("contacto").value;
    direccion=document.getElementById("direccion").value;
    telefono=document.getElementById("telefono").value;
    rfc=document.getElementById("rfc").value;
    correo=document.getElementById("correo").value;
    sitioweb=document.getElementById("sitioweb").value;
    Referencia1=document.getElementById("Referencia1").value;
    Referencia2=document.getElementById("Referencia2").value;
    Referencia3=document.getElementById("Referencia3").value;
    pdf=document.getElementById("pdf").value;
    
     if(nombre===""||
     giro===""||
     contacto===""||
     direccion===""||
     telefono===""||
     rfc===""||
     correo===""||
     sitioweb===""||
     Referencia1===""||
     Referencia2===""||
     Referencia3===""||
     pdf===""){
        alert("todos los campos son obligatorios");
        return false;
        }

}

/*campo de puras mayusculas*/
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}


function validar_consulta_facturas() {
    var rfc;

 
 
    
     if(document.getElementById("rfc_fac").value.length < 10){
        alert("El campo debe contener todos los dígitos del Rfc");
        return false;
        }
        else 
        {
            return true;
        }
    
    }
    