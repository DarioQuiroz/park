<?php
	session_start();
	include_once('db.php');
?>
<!DOCTYPE html>
<html lang="es-es">
	<head>
		<meta charset="utf-8">
		<title>Contacto</title>
	<head>
	<body>
		<?php
		// Definimos el archivo exportado
		$arquivo = 'consulta.xls';
		
		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Reporte generado mediante consulta de carga de archivos</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
        $html .= '<td><b>Id</b></td>';
        $html .= '<td><b>Carpeta</b></td>';
		$html .= '<td><b>Nombres</b></td>';
		$html .= '<td><b>Fecha</b></td>';
		$html .= '<td><b>Estado</b></td>';
	
		$html .= '</tr>';
		
		//Seleccionar todos los elementos de la tabla
		$result_msg_contatos = "SELECT * FROM image";
		$resultado_msg_contatos = mysqli_query($con = con(), $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["folder"].'</td>';
			$html .= '<td>'.$row_msg_contatos["src"].'</td>';
            $html .= '<td>'.$row_msg_contatos["created_at"].'</td>';
            $html .= '<td>'.$row_msg_contatos["estado"].'</td>';
			
			$html .= '</tr>';
			;
		}
		// Configuración en la cabecera
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generado Data" );
		// Envia contenido al archivo
		echo $html;
		exit; ?>
	</body>
</html>