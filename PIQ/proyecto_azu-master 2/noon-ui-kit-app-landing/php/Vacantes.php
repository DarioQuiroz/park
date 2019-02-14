<?php 

	$conexion=mysqli_connect('localhost','root','','vacantes');
    error_reporting(0);
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../css/space.css" />
        <link rel="stylesheet" href="../css/style.css" />
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="space-30"></div>
  <section class="bg-vertical-thirty-half-base sm-bg-vertical-ten-half-base">
  <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center-col margin-50px-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
<div class="space-30"></div>
<p id="instruccion">Para ingresar una nueva vacante, dale click al boton "Registrar vacante"
    </p>
<button style="align:center;" class="btn Registrarvac" type="submit"><a href="login.php">Registrar vacante</a></button>
</div>
</div>
</section>
<div class="space-30"></div>

<div class="space-30"></div>

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>

    
			<th>Empresa_que solicita_vacante</th>
			<th>Puesto</th>
			<th>Perfil</th>
            <th>Experiencia</th>	
            <th>Idiomas</th>	
            <th>Nombre (contacto)</th>	
            <th>Telefono</th>	
            <th>Correo</th>	
            <th>Fecha de publicasión</th>	
    </tr>
  </thead>
  <?php 
        $sql="SELECT * from tvacantes";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
         ?>
         
  <tbody>
  
  <tr>
			
			<th><?php echo $mostrar['emp_vac'] ?></th>
            <th><?php echo $mostrar['puesto'] ?></th>
			<th><?php echo $mostrar['Perfil_puesto'] ?></th>
			<th><?php echo $mostrar['expe'] ?></th>
            <th><?php echo $mostrar['idioma_add'] ?></th>
            <th><?php echo $mostrar['nom'] ?></th>
			<th><?php echo $mostrar['tel'] ?></th>
            <th><?php echo $mostrar['correo'] ?></th>
			<th><?php echo $mostrar['add_date'] ?></th>
           
		</tr>
	<?php 
	}
	 ?>
  </tbody>
</table>
 
        <div class="space-100"></div>
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/Mostrar.js"></script>
    <script src="form-validation.js"></script>
</body>

</html>