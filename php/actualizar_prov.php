<?php
	
ModificarProducto(
        $_POST['no'],
        $_POST['nombre'],
        $_POST['giro'],
        $_POST['contacto'],
        $_POST['direccion'],
        $_POST['telefono'],
        $_POST['rfc'],
        $_POST['correo'],
        $_POST['sitioweb'],
        $_POST['Referencia1'],
        $_POST['Referencia2'],
        $_POST['Referencia3'],
        $_POST['pdf']);
        function ModificarProducto($no, $nombre, $giro, $contacto, $direccion, $telefono, $rfc,  $correo,  $sitioweb, $Referencia1, $Referencia2, $Referencia3, $pdf)
	{
		include 'conexionvacante.php';
		echo $sentencia="UPDATE provedores SET id='".$no."',
         nombre='".$nombre."',
         giro='".$giro."',
         contacto='".$contacto."',
         direccion='".$direccion."',
         telefono='".$telefono."',
         rfc='".$rfc."',
         correo='".$correo."',
         sitioweb='".$sitioweb."',
         Referencia1='".$Referencia1."',
         Referencia2='".$Referencia2."',
         Referencia3='".$Referencia3."',
         pdf='".$pdf."'
         WHERE id='".$no."' ";
		$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='subirvacante.php';
</script>