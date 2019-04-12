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
if(empty($_POST['name']))
$files = get_imgs_rfc();

 else 
 $files = search_imgs($_POST['name']);
?>
<html>
	<head>
		<title>Subir Multiples Imagenes y/o Archivos - By Evilnapsis</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
<script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>
<style > @media (max-width: 600px) { 
#busc_prov{
  flex-direction: column;
}
#encavezado{
  margin-bottom: 20%;
  display: flex;
  flex: 1 1 0px;
}
#busca_prov{
  display: flex;
  flex: 1 1 0px;
  margin-bottom: 35%;
}
} 
@media (max-width: 415px) { 
#busc_prov{
  flex-direction: column;
}
#encavezado{
  margin-bottom: 30%;
  display: flex;
  flex: 1 1 0px;
}
#busca_prov{
  display: flex;
  flex: 1 1 0px;
  margin-bottom: 45%;
}
}  </style>
</head>
	<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Parque Industrial Querétaro</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      </ul>

      <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
      <li class="nav-item"><a class="nav-link" href="segundo.html">Intranet</a></li>
          <li class="nav-item"><a class="nav-link" href="cerrarsesionfac.php">Cerrar sesión</a></li>

      </ul>
    </div>
  </div>
</nav>


        
<section  class="container" >
					<div class="col-md-8 "></div>   
					<div class="space-20"></div>
					<h1>Archivos</h1>
          <form method="post" class="form-signin col-4" > 
              <p class="h6 mb-3 font-weight-normal" >Ingresa el RFC para buscar las Facturas que desee</p>
              <input  type="text" name="name" class="form-control" placeholder="RFC" required>
            <div class="space-20"></div>
  						<button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Ver mis Facturas</button>
						  <div class="space-20"></div>
							
          </form>   
          <div class="col-4"></div> 
    
  			 </section >
	<section  class="container" >
					<div class="col-md-8 "></div>   
					<div class="space-20"></div>

    <button class="button-disponibilidad" ><a href="./form.php">Agregar mas</a></button>
    <div class="space-40"></div>
		<div class="col-4" style="margin-bottom: 3%;"></div> 
		</div> 
		</div> 
    
		
		<?php if(count($files)>0):?>
		<div class="container">
    <a href="generar_archivo.php" class="btn btn-primary" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form"> Generar excel</a>

    <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
			<thead>
    <tr>
	<th scope="col">
  
  						<a href="files_id.php" class="btn btn-primary" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form"> Ordenar por Id</a>
					
      <th scope="col"> 
      <a href="files_nombre.php" class="btn btn-primary" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form"> Ordenar por Nombre</a>

       </th>
      <th scope="col">
      <form method="post" class="form-signin col-4" > 
            <input  type="hidden" name="fecha" value="fecha" class="form-control" placeholder="RFC" required>
            <div class="space-20"></div>
  						<button id="VER_FAC" class="btn btn-primary" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form"> Ordenar por fecha</button>
						  <div class="space-20"></div>
							
          </form></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">
      <form method="post" class="form-signin col-4" > 
            <input  type="hidden" name="estado" value="estado" class="form-control" placeholder="RFC" required>
            <div class="space-20"></div>
  						<button id="VER_FAC" class="btn btn-primary" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form"> Ordenar por estado</button>
						  <div class="space-20"></div>
							
          </form></th></th>
    </tr>
  </thead>
			<?php foreach($files as $f):?>
				<tr>
				<td><?php echo $f->id;?></td>
				<td><?php echo $f->src;?></td>
				<td><?php echo $f->created_at;?></td>
				<td><a href="./download.php?id=<?php echo $f->id; ?>">Descargar</a></td>
        <td><a href="./delete.php?id=<?php echo $f->id; ?>">Eliminar</a></td>
        <?php
        if($f->estado==0){
          echo '<td style= "color: red;"><a >no descargado</a></td>';

        }
        else{
          echo '<td style= "color: green;"><a > descargado</a></td>';

        }
        
        
         ?>
				</tr>
			<?php endforeach;?>
			</table>
			</div> 
			</div> 
		<?php else:?>
			<h4>No hay archivos!</h4>
		<?php endif; ?>
</section >
<footer class="footer text-muted bg-light">
  <div class="container">
    <span>© 2019 Parque Industrial Queretaro</span>
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>
</footer>
	</body>

</html>
