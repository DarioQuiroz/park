<?php 
include 'conexionvacante.php';
//if (isset($_POST['insertar'])) {
$empresa=$_POST['emp_vac'];
$puesto=$_POST['puesto'];
$perfil=$_POST['Perfil_puesto'];
$experiencia=$_POST['expe'];
$idiomas=$_POST['idioma_add'];
$nombre=$_POST['nom'];
$telefono=$_POST['tel'];
$correo=$_POST['correo'];


$insertar="INSERT INTO tvacantes (emp_vac,puesto,Perfil_puesto,expe,idioma_add,nom,tel,correo) 
VALUES ('$empresa','$puesto','$perfil','$experiencia','$idiomas','$nombre', '$telefono', '$correo')";

$stmt = $conn->prepare($peticion);
$stmt->bind_param($empresa, $puesto, $perfil, $experiencia, $idiomas, $nombre, $telefono, $correo);
$stmt->execute();
$stmt->close();

echo "Registro Insertado";
$conn->close();
s
?>