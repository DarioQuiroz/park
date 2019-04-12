<?php
	EliminarProducto($_GET['no']);

	function EliminarProducto($no)
	{
		include 'conexionvacante.php';
		$sentencia="DELETE FROM provedores WHERE id='".$no."' ";
		$conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("¡ proveedor Eliminado !");
	window.location.href='registro_provedor.php';
</script>