<?php




if(isset($_GET["id"])){
	include "db.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		//del($img->id);
		$fullpath = $img->folder.$img->src;
		header("Content-Disposition: attachment; filename=$img->src");
		readfile($fullpath);



		$conn = new mysqli("localhost", "root", "", "multi_upload");

		if (mysqli_connect_errno()) {
		die("No se puede conectar a la base de datos:" . mysqli_connect_error());
		}else{

		}


		$sentencia="UPDATE `image` SET `estado` = '1' WHERE `image`.`id` = '$img->id';";
	   $conn->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));


	}
}


?>