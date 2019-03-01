<?php
	
    ModificarProducto(
        $_POST['no'],
     $_POST['empresa'],
      $_POST['puesto'],
       $_POST['perfil'],
       $_POST['experiencia'],
        $_POST['idioma'],
         $_POST['nombre'],
         $_POST['telefono'],
          $_POST['correo'],
          $_POST['fecha'],
           $_POST['RFC']);

	function ModificarProducto($no, $empresa, $puesto, $perfil, $experiencia, $idioma, $nombre, $telefono, $correo, $fecha, $RFC)
	{
		include 'conexionvacante.php';
		echo $sentencia="UPDATE tvacantes SET id_vac='".$no."',
         emp_vac='".$empresa."',
         puesto='".$puesto."',
         Perfil_puesto='".$perfil."',
         expe='".$experiencia."',
         idioma_add='".$idioma."',
         nom='".$nombre."',
         tel='".$telefono."',
         correo='".$correo."',
         add_date='".$fecha."',
         rfc='".$RFC."'
         WHERE id_vac='".$no."' ";
		$conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='subirvacante.php';
</script>