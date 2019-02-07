Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.



<?php 
include 'conexionvacante.php';
$empresa= $_POST['nombre'];
$puesto=$_POST['puesto'];
$perfil=$_POST['perfil'];
$experiencia=$_POST['experiencia'];
$idiomas=$_POST['idioma'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$rfc=$_POST['rfc'];

echo  $empresa;
echo  $puesto;
echo  $perfil;
echo  $experiencia;
echo  $idiomas;
echo  $nombre;
echo  $empresa;
echo  $telefono;
echo  $correo;

$insertar="INSERT INTO tvacantes (`emp_vac`, `puesto`, `Perfil_puesto`, `expe`, `idioma_add`, `nom`, `tel`, `correo`, `rfc`) VALUES 
('$empresa', '$puesto', '$perfil', '$experiencia', '$idiomas', '$nombre', '$telefono', '$correo','$rfc')";

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