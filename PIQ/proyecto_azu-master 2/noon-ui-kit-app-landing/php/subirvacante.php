


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


<script>
    function modificar(id){
        alert (id);
        window.location="../php/subirvacante.php?id="+id
    }
    </script>
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

<div class="space-40"></div>

<section id="tamaño_grande">


<form action="insertarvacante.php" id="tam_complete" method="post" >
  <div class="row">
    <div class="col-6 columna col-lg-4 col-md-4 col-sm-12 col-xs-12" >
        <a>Empresa: </a>
      <input type="text" class="formulariovacante" name="empresa" id="empresa">
      <a>Puesto: </a>
      <input type="text" class="formulariovacante" name="puesto" />
      <a>Perfil: </a>
      <input type="text" class="formulariovacante" name="perfil" />
     <a>Experiencia: </a>
     <input type="text" class="formulariovacante" name="experiencia" />
     <a>Idiomas: </a>     
     <input type="text" class="formulariovacante" name="idioma" />
    </div>
    <div class="col-6 columna col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a>Nombre(contacto): </a>
          <input type="text" class="formulariovacante" name="nombre" />
         <a>Telefono: </a>
         <input type="text" class="formulariovacante" name="telefono" />
         <a>Correo: </a>
         <input type="email" class="formulariovacante" name="correo" />
         <a>RFC: </a>
         <input type="text" class="formulariovacante" name="rfc" />
         <a>Fecha:</a>
         <input type="date" class="formulariovacante" name="fecha" />



    </div>
  </div>
  <div class="space-20"></div>
  <div class="text-center">
            <p><input type="submit" class="btn btn-lg button-disponibilidad btn-block" value="Registrar"/></p>
            </div>
</form>


</section>   
           


<?php
 
if(isset($_POST['submit'])){
$name = $_POST['name'];
}?>
<section class="container" style="float:rigth; align: right;">
      <div class="row ">
          <div class="col-md-8 col-md-offset-2"></div>   
          <form method="post" class="form-signin col-4" > 
             
              <p class="h3 mb-3 font-weight-normal" >Ingresa tu RFC para acceder a tus vacantes</p>
              
              <input  type="text" name="name" class="form-control" placeholder="RFC" required>
              <div class="space-20"></div>
             
  <button class="btn btn-lg button-disponibilidad btn-block" type="submit" name="submit" value="Submit Form">Ver mis Vacantes</button>
  
          </form>   
          <div class="col-4"></div> 
     </div>
   </section>
            

<div class="space-30"></div>
<table class="table">
<thead class="thead-dark">
<tr>
    <th>id_vacante</td>
        <th>Empresa que solicita vacante</th>
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
    $sql="SELECT * from tvacantes WHERE rfc='$name' ";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
     ?>
<tbody>
<form method="POST" action="subirvacante.php" >
<tr>
        <th id="llave"><?php echo $mostrar['id_vac'] ?></th>
        <th><?php echo $mostrar['emp_vac'] ?></th>
        <th><?php echo $mostrar['puesto'] ?></th>
        <th><?php echo $mostrar['Perfil_puesto'] ?></th>
        <th><?php echo $mostrar['expe'] ?></th>
        <th><?php echo $mostrar['idioma_add'] ?></th>
        <th><?php echo $mostrar['nom'] ?></th>
        <th><?php echo $mostrar['tel'] ?></th>
        <th><?php echo $mostrar['correo'] ?></th>
        <th><?php echo $mostrar['add_date'] ?></th>
        <th>  <a > <button type='submit' class='btn btn-success' id="modificar">Modificar</button> </a> </th>
        <th>  <a> <button type='button' class='btn btn-danger'>Elimiar</button> </a> </th>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['id_vac'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['emp_vac'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['puesto'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['Perfil_puesto'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['expe'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['idioma_add'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['nom'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['tel'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['correo'] ?>"/>
        <input type="text" class="formulariovacante" name="nombre"  value="<?php echo $mostrar['add_date'] ?>"/>
       
    </tr>
    </form>
<?php 
}
 ?>

 <section id="modificacion">

 </section>

</tbody>
</table>
   

<div class="text-center">
        <a href="cerrarsesion.php">Cerrar sesion</a>
        </div>

        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/Mostrar.js"></script>
<script src="form-validation.js"></script>
</body>

</html>