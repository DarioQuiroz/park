<?php 
include 'conexionvacante.php';
/*
$empresa= $_POST['emp_vac'];
$puesto=$_POST['puesto'];
$perfil=$_POST['Perfil_puesto'];
$experiencia=$_POST['expe'];
$idiomas=$_POST['idioma_add'];
$nombre=$_POST['nom'];
$telefono=$_POST['tel'];
$correo=$_POST['correo'];

echo  $empresa;
*/
$insertar="INSERT INTO tvacantes (`emp_vac`, `puesto`, `Perfil_puesto`, `expe`, `idioma_add`, `nom`, `tel`, `correo`, `add_date`, `rfc`) VALUES ('Dario', 'REWT', 'ERTYHRRTY', 'RTEHTH', 'WERT', 'WRTHGE', 'DFGH', 'DFGH', '2019-02-28', 'DSHFJG')";

$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{
    echo "error al registar";
}
else{
    echo "usuario registrado";

}

mysqli_close($conn);


?>