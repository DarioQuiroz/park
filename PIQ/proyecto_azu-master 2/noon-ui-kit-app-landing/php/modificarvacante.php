<?php
  
  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto( $no_prod )
  {
   include 'conexionvacante.php';
   $sentencia="SELECT * FROM tvacantes WHERE id_vac='".$no_prod."' ";
   $resultado= $conn->query($sentencia) or die ("Error al consultar producto".mysqli_error($conn)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id_vac'],
    $fila['emp_vac'],
    $fila['puesto'],
    $fila['Perfil_puesto'],
    $fila['expe'],
    $fila['idioma_add'],
    $fila['nom'],
    $fila['tel'],
    $fila['correo'],
    $fila['add_date'],
    $fila['rfc']
    

   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>

<link rel="stylesheet" href="../css/space.css" />
    <link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
<style type="text/css">


@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="../images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Vacante</h1> </span>
  		<br>
	  <form action="modif_vac2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

      <div class="row">
    <div class="col-6 columna col-lg-4 col-md-4 col-sm-12 col-xs-12" >

      <input type="hidden" class="formulariovacante" name="no"  value="<?php echo $_GET['no']?>">
  		<label>Empresa </label>
  		<input type="text" id="empresa" class="formulariovacante" name="empresa" value="<?php echo $consulta[1] ?>" ><br>
  		
  		<label>Puesto: </label>
  		<input type="text" id="puesto" class="formulariovacante" name="puesto" value="<?php echo $consulta[2] ?>"><br>
  		
  		<label>Perfil: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" class="formulariovacante" name="perfil"> <?php echo $consulta[3] ?> 
           </textarea><br>

           <label>Eperiencia </label>
  		<input type="text" id="experiencia" class="formulariovacante" name="experiencia" value="<?php echo $consulta[4] ?>" ><br>
  		
  		<label>Idiomas: </label>
  		<input type="text" id="idioma" class="formulariovacante" name="idioma" value="<?php echo $consulta[5] ?>"><br>
</div>
<div class="col-6 columna col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <label>Nombre(contacto):  </label>
  		<input type="text" id="nombre" class="formulariovacante" name="nombre" value="<?php echo $consulta[6] ?>" ><br>
  		
  		<label>Telefono: </label>
  		<input type="text" id="telefono" class="formulariovacante" name="telefono" value="<?php echo $consulta[7] ?>"><br>
  		
          
  		<label>correo: </label>
  		<input type="email" id="correo" class="formulariovacante" name="correo" value="<?php echo $consulta[8] ?>"><br>
  		
          
  		<label>Fecha: </label>
  		<input type="date" id="fecha" class="formulariovacante" name="fecha" value="<?php echo $consulta[9] ?>"><br>
  		
          
  		<label>RFC: </label>
  		<input type="text" id="RFC" class="formulariovacante" name="RFC" value="<?php echo $consulta[10] ?>"><br>
  		
  		<br>
  	
          </div>
          <button type="submit" class="btn btn-success" style="align:center;">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="../images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>