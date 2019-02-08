<?php
        $cod=$_GET["id_vac"];
        $resultado = mysqli_query($conexion,"SELECT * FROM tvacantes WHERE id = '$cod'");
  while($consulta = mysqli_fetch_array($resultado))
  {
    $variable=$consulta['campo_mysql'];
  }

       
$filas=mysqli_num_rows($resultado);
if ($filas>0)
{
 
    header("location:login.php");

  }
  else
  {

    header("location:segundo.php");

  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

 ?>  
  
  <!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Título de la WEB</title>    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
   

    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
    <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/>    
  </head>  
  <body class="text-center">
    
<link rel="stylesheet" href="../css/space.css"/>
<link rel="stylesheet" href="../css/style.css"/>
<h2>Modificar Datos de la Vacante</h2>
<form action="insertarvacante.php" id="tam_complete" method="post" >
  <div class="row">


    <div class="col-6 columna col-lg-4 col-md-4 col-sm-12 col-xs-12" >
        <a>Empresa: </a>
      <input type="text" class="formulariovacante" name="empresa" value="">
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
    </body>

</html>