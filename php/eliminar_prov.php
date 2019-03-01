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
	alert("proveedore Eliminado!!");
	window.location.href='subirvacante.php';
</script>