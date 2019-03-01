<?php 
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion==null || $varsesion='')
{
    echo'usted no tiene autorizacion';
    header("location:loguin_facturar.php");
die();
  }
?>
<?php
include "db.php";
$files = get_imgs();
?>
<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<h1>Archivos</h1>
		<button class="button-disponibilidad" ><a href="./form.php">Agregar mas</a></button>
	
		<?php if(count($files)>0):?>
			<br><table class="table">
			<thead>
    <tr>
	<th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">fecha</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
			<?php foreach($files as $f):?>
				<tr>
				<td><?php echo $f->id;?></td>
				<td><?php echo $f->src;?></td>
				<td><?php echo $f->created_at;?></td>
				<td><a href="./download.php?id=<?php echo $f->id; ?>">Descargar</a></td>
				<td><a href="./delete.php?id=<?php echo $f->id; ?>">Eliminar</a></td>
				</tr>
			<?php endforeach;?>
			</table>
		<?php else:?>
			<h4>No hay archivos!</h4>
		<?php endif; ?>

	</body>

</html>
