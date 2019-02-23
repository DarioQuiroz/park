<?php
	EliminarProducto($_GET['no']);

	function EliminarProducto($no)
	{
		include 'conexionvacante.php';
		$sentencia="DELETE FROM tvacantes WHERE id_vac='".$no."' ";
		$conn->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Producto Eliminado!!");
	window.location.href='subirvacante.php';
</script>