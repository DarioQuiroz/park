<?php 
$conexion=mysqli_connect('localhost','root','','vacantes');
error_reporting(0);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Piqueretaro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="FTKWJQYGkyRrB/Zkohvf+cZymGNPkCb4HkpABDIaytyvJYpYUW229+ja9KaW+vU+NxGJN//uZRGMb/4kfNlPbg==" />
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
          <li class="nav-item"><a class="nav-link" href="loguin_porv.php">Iniciar sesión</a></li>

      </ul>
    </div>
  </div>
</nav>

<?php
 
if(isset($_POST['submit'])){
$name = $_POST['name'];
}?>

     
    <div id="busc_prov" class="container" style="display: flex;  flex: 0.5 1 0px;">
      <div id="encavezado" style="display: flex;    flex: 1 1 0px;"><h2>¡Bienvenido al área de proveedores!</h2></div>
      <div id=busca_prov style="display: flex;    flex: 1 1 0px;">
     
      </div>
      <div id=busca_prov style="display: flex;    flex: 1 1 0px;">
      <section  class="container" >
					<div class="col-md-6 "></div>
					<div class="space-20"></div>
					<h3>Busca tu proveedor</h3>
          <form method="post" class="form-signin col-8" >
              <input  type="text" name="name" class="form-control" placeholder="" required>
            <div class="space-20"></div>
  						<button id="VER_FAC" class="btn btn-sm vervacantes btn-block" style="background-color: blue; color: white;" type="submit" name="submit" value="Submit Form">Buscar provedor</button>
						  <div class="space-20"></div>

          </form>
          <div class="col-4"></div>

  			 </section >
      </div>
        
        
    </div>
    <div class="container">
    <div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>

        <th>EMPRESA</th>
            <th>GIRO</th>
            <th>CONTACTO</th>
           
            <th>TELÉFONO</th>
          
            <th>CORREO ELECTRÓNICO</th>
            <th>SITIO WEB</th>

      </tr>
    </thead>
 
    <tbody>
    <?php 
    $sql='SELECT * FROM provedores WHERE giro LIKE "%'.$name.'%" or nombre LIKE "%'.$name.'%"';
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){

      echo "<tr >";
      echo "<th style='border-right: 1px solid black;'> <a href='detalles_prov.php?no=".$mostrar['id']."''>"; echo $mostrar['nombre']; echo "</a></th>";
      echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['giro']; echo "</th>";
      echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['contacto']; echo "</th>";
      echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['telefono']; echo "</th>";
      echo "<th style='border-right: 1px solid black;'>"; echo $mostrar['correo']; echo "</th>";
      ?> 


    <th style='border-right: 1px solid black;'><a href="<?php echo $mostrar['sitioweb'] ?>"><?php echo $mostrar['sitioweb'] ?></a></th>
      <?php 
       echo "</tr>";
   ?> 

</tbody>
<?php 

}
 ?>

  </table>
</div>
</div>
<!--
        <?php // echo "<th > <a href='detalles_prov.php?no=".$mostrar['id']."''>"?><?php// echo $mostrar['nombre'] ?></a> </th>
                      <td><?php// echo $mostrar['giro'] ?></td>
                      <td><?php// echo $mostrar['contacto'] ?></td>
                      <td><?php// echo $mostrar['telefono'] ?></td>
                      <td><?php// echo $mostrar['correo'] ?></td>
                      <td> <a href="<?php //echo $mostrar['sitioweb'] ?>"><?php// echo $mostrar['sitioweb'] ?></td>

-->

    <footer class="footer text-muted bg-light">
  <div class="container">
    <span>© 2019 Parque Industrial Queretaro</span>
    <ul class="list-inline mb-0 float-right">
    </ul>
  </div>
</footer>

  </body>
</html>
