<?php 
include 'conexionvacante.php';
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$berificar=$_POST['berificarcontraseña'];
$rfc=$_POST['rfc'];

echo  $nombre;
echo  $correo;
echo  $contraseña;
echo  $berificar;
echo  $rfc;

$insertar="INSERT INTO usuarios (`nombre`, `correo`, `clave`, `rfc`) VALUES 
('$nombre', '$correo', '$contraseña', '$rfc')";

$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{ header("location:registrarse.html");
    echo "error al registar";
}
else{
    header("location:login.php");
    echo "usuario registrado";

}

mysqli_close($conn);


?>