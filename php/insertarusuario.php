<?php 
include 'conexionvacante.php';
$nombre= $_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$berificar=$_POST['berificarcontraseña'];
$rfc=$_POST['rfc'];
$insertar="INSERT INTO usuarios (`nombre`, `correo`, `clave`, `rfc`) VALUES 
('$nombre', '$correo', '$contraseña', '$rfc')";

$resultado=mysqli_query($conn, $insertar);
if(!$resultado)
{
        ?>
     <script type="text/javascript">
	alert("! error al registrar !");
	window.location.href='registrarse.html';
</script>
<?php
}
else{
        ?>
     <script type="text/javascript">
	alert("¡ Usuario registrado exitosamente !");
	window.location.href='login.php';
</script>
<?php
}
mysqli_close($conn);
?>